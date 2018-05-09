<?php

namespace CoreBundle\Repository;

/**
 * GuestRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GuestRepository extends \Doctrine\ORM\EntityRepository
{
    public function findGuests(array $params)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('guest', 'room')
            ->from($this->getEntityName(), 'guest')
            ->leftJoin('guest.room', 'room');

        return $qb;
    }
}

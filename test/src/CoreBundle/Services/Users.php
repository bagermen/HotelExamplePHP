<?php

namespace CoreBundle\Services;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

class Users {
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function fetchUsers(array $params = [], $start = 0, $max = 100)
    {
        $guests = $this->em->getRepository('CoreBundle\Entity\Guest');
        $query = $guests->findGuests($params)->setFirstResult($start)->setMaxResults($max);

        return new Paginator($query, true);
    }
}
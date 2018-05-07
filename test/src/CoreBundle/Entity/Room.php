<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\RoomRepository")
 *
 */
class Room
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="beds", type="smallint")
     */
    private $beds;

    /**
     * @var int
     *
     * @ORM\Column(name="floor", type="smallint")
     */
    private $floor;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Guest", mappedBy="room", fetch="EXTRA_LAZY")
     */
    private $guests;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->guests = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set beds
     *
     * @param integer $beds
     *
     * @return Room
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;

        return $this;
    }

    /**
     * Get beds
     *
     * @return int
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Set floor
     *
     * @param integer $floor
     *
     * @return Room
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @return ArrayCollection
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param Guest $guest
     */
    public function addUserPass(Guest $guest)
    {
        $this->guests->add($guest);
        $guest->setRoom($this);
    }

    /**
     * @param Guest $guest
     */
    public function removeUserPass(Guest $guest)
    {
        if ($this->guests->removeElement($guest)) {
            $guest->setPass(null);
        }
    }
}


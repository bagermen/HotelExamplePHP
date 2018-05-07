<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 * @ORM\Table(
 *     name="guest",
 *     options={
 *      "comment":"Guests table"
 *  },
 *  indexes={
 *      @ORM\Index(name="reservation_idx", columns={"reservation"}),
 *      @ORM\Index(name="visit_idx", columns={"visit"})
 *  }
 * )
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\GuestRepository")
 */
class Guest
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visit",
     *  type="datetime",
     *  nullable=true,
     *  options={
     *      "comment": "Visit date"
     *  })
     */
    private $visit;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation", type="string", length=255)
     */
    private $reservation;

    /**
     * @var Room
     *
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="guests")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $room;


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
     * Set name
     *
     * @param string $name
     *
     * @return Guest
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Guest
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Guest
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set reservation
     *
     * @param string $reservation
     *
     * @return Guest
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return string
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @return Room
     */
    public function getRoom(): Room
    {
        return $this->room;
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room): void
    {
        $this->room = $room;
    }

    /**
     * @return \DateTime
     */
    public function getVisit(): \DateTime
    {
        return $this->visit;
    }

    /**
     * @param \DateTime $visit
     */
    public function setVisit(\DateTime $visit): void
    {
        $this->visit = $visit;
    }
}


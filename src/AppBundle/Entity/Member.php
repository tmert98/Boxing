<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 29-5-2018
 * Time: 12:09
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Member
 * @ORM\Entity
 * @ORM\Table(name="members")
 */
class Member extends Person
{
    /**
     * @ORM\Column(name="street")
     */
    private $street;

    /**
     * @ORM\Column(name="place")
     */
    private $place;

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Sayfedine
 * Date: 29-5-2018
 * Time: 12:09
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Member
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */
    private $naam;

    /**
     * @ORM\Column(type="string")
     */
    private $achternaam;

    /**
     * @ORM\Column(type="string")
     */
    private $tussenvoegsel;

    /**
     * @ORM\Column(type="date")
     */
    private $dateofbirth;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles;

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    /**
     * @param mixed $achternaam
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @param mixed $tussenvoegsel
     */
    public function setTussenvoegsel($tussenvoegsel)
    {
        $this->tussenvoegsel = $tussenvoegsel;
    }

    /**
     * @param mixed $dateofbirth
     */
    public function setDateofbirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
}
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
 * @ORM\Table(name="instructors")
 */
class Instructor extends Person
{
    /**
     * @ORM\Column(name="hiring_date", type="date")
     */
    private $hiring_date;

    /**
     * @ORM\Column(name="salary", type="integer")
     */
    private $salary;

    /**
     * @ORM\Column(name="social_sec_number", type="integer")
     */
    private $social_sec_number;

    /**
     * @param mixed $hiring_date
     */
    public function setHiringDate($hiring_date)
    {
        $this->hiring_date = $hiring_date;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $social_sec_number
     */
    public function setSocialSecNumber($social_sec_number)
    {
        $this->social_sec_number = $social_sec_number;
    }
}

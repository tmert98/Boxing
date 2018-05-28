<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 22-5-2018
 * Time: 10:21
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="trainings")
 */
class Training
{

    // ...

    /**
     * @ORM\OneToMany(targetEntity="Lesson", mappedBy="training")
     */
    private $lesson;
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="time")
     */
    private $duration;

    /**
     * @ORM\Column(type="decimal")
     */
    private $extra_costs;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getExtraCosts()
    {
        return $this->extra_costs;
    }

    /**
     * @param mixed $extra_costs
     */
    public function setExtraCosts($extra_costs)
    {
        $this->extra_costs = $extra_costs;
    }
}

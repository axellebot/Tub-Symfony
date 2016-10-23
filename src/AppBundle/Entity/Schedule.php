<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="Schedule")
 * @ORM\Entity
 */
class Schedule
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ETA", type="time", nullable=true)
     */
    private $eta;

    /**
     * @var StopGroup
     *
     * @ORM\ManyToOne(targetEntity="StopGroup", inversedBy="schedules")
     * @ORM\JoinColumn(name="stopGroup_id", referencedColumnName="id")
     */
    private $stopGroup;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eta
     *
     * @param \DateTime $eta
     *
     * @return Schedule
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get eta
     *
     * @return \DateTime
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set stopGroup
     *
     * @param \AppBundle\Entity\StopGroup $stopGroup
     *
     * @return Schedule
     */
    public function setStopGroup(\AppBundle\Entity\StopGroup $stopGroup = null)
    {
        $this->stopGroup = $stopGroup;

        return $this;
    }

    /**
     * Get stopGroup
     *
     * @return \AppBundle\Entity\StopGroup
     */
    public function getStopGroup()
    {
        return $this->stopGroup;
    }
}

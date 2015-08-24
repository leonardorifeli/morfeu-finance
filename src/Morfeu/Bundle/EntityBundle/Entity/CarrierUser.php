<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarrierUser
 *
 * @ORM\Table(name="carrier_user", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="carrier_id", columns={"carrier_id"})})
 * @ORM\Entity
 */
class CarrierUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var \Morfeu\Bundle\EntityBundle\Entity\Carrier
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\Carrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrier_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $carrier;

    /**
     * @var \Morfeu\Bundle\EntityBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;



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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return CarrierUser
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return CarrierUser
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return CarrierUser
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set carrier
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\Carrier $carrier
     * @return CarrierUser
     */
    public function setCarrier(\Morfeu\Bundle\EntityBundle\Entity\Carrier $carrier = null)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\Carrier 
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set user
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\User $user
     * @return CarrierUser
     */
    public function setUser(\Morfeu\Bundle\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
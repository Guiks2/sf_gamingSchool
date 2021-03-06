<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Selling.
 *
 * @ORM\Table(name="selling")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\SellingRepository")
 */
class Selling
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="selling_students")
     * @ORM\JoinColumn(name="selling_student_id", referencedColumnName="id")
     */
    private $sellingStudentId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="selling_coachs")
     * @ORM\JoinColumn(name="selling_coach_id", referencedColumnName="id")
     */
    private $sellingCoachId;

    /**
     * @ORM\ManyToOne(targetEntity="CoachingPack", inversedBy="selling_packs")
     * @ORM\JoinColumn(name="selling_pack_id", referencedColumnName="id")
     */
    private $sellingPackId;

    /**
     * @ORM\ManyToOne(targetEntity="Boosting", inversedBy="selling_boostings")
     * @ORM\JoinColumn(name="selling_boosting_id", referencedColumnName="id")
     */
    private $sellingBoostingId;

    /**
     * @var float
     *
     * @ORM\Column(name="selling_price", type="float")
     */
    private $sellingPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="selling_date", type="datetime")
     */
    private $sellingDate;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sellingStudentId.
     *
     * @param int $sellingStudentId
     *
     * @return Selling
     */
    public function setSellingStudentId($sellingStudentId)
    {
        $this->sellingStudentId = $sellingStudentId;

        return $this;
    }

    /**
     * Get sellingStudentId.
     *
     * @return int
     */
    public function getSellingStudentId()
    {
        return $this->sellingStudentId;
    }

    /**
     * Set sellingCoachId.
     *
     * @param int $sellingCoachId
     *
     * @return Selling
     */
    public function setSellingCoachId($sellingCoachId)
    {
        $this->sellingCoachId = $sellingCoachId;

        return $this;
    }

    /**
     * Get sellingCoachId.
     *
     * @return int
     */
    public function getSellingCoachId()
    {
        return $this->sellingCoachId;
    }

    /**
     * Set sellingPackId.
     *
     * @param int $sellingPackId
     *
     * @return Selling
     */
    public function setSellingPackId($sellingPackId)
    {
        $this->sellingPackId = $sellingPackId;

        return $this;
    }

    /**
     * Get sellingPackId.
     *
     * @return int
     */
    public function getSellingPackId()
    {
        return $this->sellingPackId;
    }

    /**
     * Set sellingBoostingId.
     *
     * @param int $sellingBoostingId
     *
     * @return Selling
     */
    public function setSellingBoostingId($sellingBoostingId)
    {
        $this->sellingBoostingId = $sellingBoostingId;

        return $this;
    }

    /**
     * Get sellingBoostingId.
     *
     * @return int
     */
    public function getSellingBoostingId()
    {
        return $this->sellingBoostingId;
    }

    /**
     * Set sellingPrice.
     *
     * @param float $sellingPrice
     *
     * @return Selling
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * Get sellingPrice.
     *
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * Set sellingDate.
     *
     * @param \DateTime $sellingDate
     *
     * @return Selling
     */
    public function setSellingDate($sellingDate)
    {
        $this->sellingDate = $sellingDate;

        return $this;
    }

    /**
     * Get sellingDate.
     *
     * @return \DateTime
     */
    public function getSellingDate()
    {
        return $this->sellingDate;
    }
}

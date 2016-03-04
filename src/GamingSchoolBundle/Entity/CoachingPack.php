<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoachingPack.
 *
 * @ORM\Table(name="coaching_pack")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\CoachingPackRepository")
 */
class CoachingPack
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
     * toString.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getId();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="coaching_pack_nb_hours", type="integer")
     */
    private $coachingPackNbHours;

    /**
     * @var float
     *
     * @ORM\Column(name="coaching_pack_price", type="float")
     */
    private $coachingPackPrice;

    /**
     * @ORM\ManyToOne(targetEntity="game", inversedBy="coaching_packs")
     * @ORM\JoinColumn(name="coaching_pack_game_id", referencedColumnName="id")
     */
    private $coachingPackGameId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="coaching_pack")
     * @ORM\JoinColumn(name="coaching_pack_coach_id", referencedColumnName="id")
     */
    private $coachingPackCoachId;

    /**
     * @ORM\OneToMany(targetEntity="Selling", mappedBy="sellingPackId", cascade={"persist", "remove", "merge"})
     */
    private $selling_packs;

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
     * Set coachingPackNbHours.
     *
     * @param int $coachingPackNbHours
     *
     * @return CoachingPack
     */
    public function setCoachingPackNbHours($coachingPackNbHours)
    {
        $this->coachingPackNbHours = $coachingPackNbHours;

        return $this;
    }

    /**
     * Get coachingPackNbHours.
     *
     * @return int
     */
    public function getCoachingPackNbHours()
    {
        return $this->coachingPackNbHours;
    }

    /**
     * Set coachingPackPrice.
     *
     * @param float $coachingPackPrice
     *
     * @return CoachingPack
     */
    public function setCoachingPackPrice($coachingPackPrice)
    {
        $this->coachingPackPrice = $coachingPackPrice;

        return $this;
    }

    /**
     * Get coachingPackPrice.
     *
     * @return float
     */
    public function getCoachingPackPrice()
    {
        return $this->coachingPackPrice;
    }

    /**
     * Set coachingPackGameId.
     *
     * @param int $coachingPackGameId
     *
     * @return CoachingPack
     */
    public function setCoachingPackGameId($coachingPackGameId)
    {
        $this->coachingPackGameId = $coachingPackGameId;

        return $this;
    }

    /**
     * Get coachingPackGameId.
     *
     * @return int
     */
    public function getCoachingPackGameId()
    {
        return $this->coachingPackGameId;
    }

    /**
     * Set coachingPackCoachId.
     *
     * @param int $coachingPackCoachId
     *
     * @return CoachingPack
     */
    public function setCoachingPackCoachId($coachingPackCoachId)
    {
        $this->coachingPackCoachId = $coachingPackCoachId;

        return $this;
    }

    /**
     * Get coachingPackCoachId.
     *
     * @return int
     */
    public function getCoachingPackCoachId()
    {
        return $this->coachingPackCoachId;
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->selling_packs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sellingPack.
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingPack
     *
     * @return CoachingPack
     */
    public function addSellingPack(\GamingSchoolBundle\Entity\Selling $sellingPack)
    {
        $this->selling_packs[] = $sellingPack;

        return $this;
    }

    /**
     * Remove sellingPack.
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingPack
     */
    public function removeSellingPack(\GamingSchoolBundle\Entity\Selling $sellingPack)
    {
        $this->selling_packs->removeElement($sellingPack);
    }

    /**
     * Get sellingPacks.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSellingPacks()
    {
        return $this->selling_packs;
    }
}

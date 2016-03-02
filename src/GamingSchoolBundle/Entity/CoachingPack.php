<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoachingPack
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
     * @ORM\ManyToOne(targetEntity="game", inversedBy="coaching_pack")
     * @ORM\JoinColumn(name="coaching_pack_game_id", referencedColumnName="id")
     */
    private $coachingPackGameId;

    /**
     * @ORM\ManyToOne(targetEntity="user", inversedBy="coaching_pack")
     * @ORM\JoinColumn(name="coaching_pack_coach_id", referencedColumnName="id")
     */
    private $coachingPackCoachId;


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
     * Set coachingPackNbHours
     *
     * @param integer $coachingPackNbHours
     *
     * @return CoachingPack
     */
    public function setCoachingPackNbHours($coachingPackNbHours)
    {
        $this->coachingPackNbHours = $coachingPackNbHours;

        return $this;
    }

    /**
     * Get coachingPackNbHours
     *
     * @return int
     */
    public function getCoachingPackNbHours()
    {
        return $this->coachingPackNbHours;
    }

    /**
     * Set coachingPackPrice
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
     * Get coachingPackPrice
     *
     * @return float
     */
    public function getCoachingPackPrice()
    {
        return $this->coachingPackPrice;
    }

    /**
     * Set coachingPackGameId
     *
     * @param integer $coachingPackGameId
     *
     * @return CoachingPack
     */
    public function setCoachingPackGameId($coachingPackGameId)
    {
        $this->coachingPackGameId = $coachingPackGameId;

        return $this;
    }

    /**
     * Get coachingPackGameId
     *
     * @return int
     */
    public function getCoachingPackGameId()
    {
        return $this->coachingPackGameId;
    }

    /**
     * Set coachingPackCoachId
     *
     * @param integer $coachingPackCoachId
     *
     * @return CoachingPack
     */
    public function setCoachingPackCoachId($coachingPackCoachId)
    {
        $this->coachingPackCoachId = $coachingPackCoachId;

        return $this;
    }

    /**
     * Get coachingPackCoachId
     *
     * @return int
     */
    public function getCoachingPackCoachId()
    {
        return $this->coachingPackCoachId;
    }
}


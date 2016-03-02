<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boosting
 *
 * @ORM\Table(name="boosting")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\BoostingRepository")
 */
class Boosting
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
     * @ORM\ManyToOne(targetEntity="game", inversedBy="boosting_games")
     * @ORM\JoinColumn(name="boosting_game_id", referencedColumnName="id")
     */
    private $boostingGameId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="boosting_rank_from", type="string", length=30)
     */
    private $boostingRankFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="boosting_rank_to", type="string", length=30)
     */
    private $boostingRankTo;

    /**
     * @var float
     *
     * @ORM\Column(name="boosting_cost", type="float")
     */
    private $boostingCost;

    /**
    * @ORM\OneToMany(targetEntity="Selling", mappedBy="sellingBoostingId", cascade={"persist", "remove", "merge"})
    */
    private $selling_boostings;
    
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
     * Set boostingGameId
     *
     * @param integer $boostingGameId
     *
     * @return Boosting
     */
    public function setBoostingGameId($boostingGameId)
    {
        $this->boostingGameId = $boostingGameId;

        return $this;
    }

    /**
     * Get boostingGameId
     *
     * @return int
     */
    public function getBoostingGameId()
    {
        return $this->boostingGameId;
    }

    /**
     * Set boostingRankFrom
     *
     * @param string $boostingRankFrom
     *
     * @return Boosting
     */
    public function setBoostingRankFrom($boostingRankFrom)
    {
        $this->boostingRankFrom = $boostingRankFrom;

        return $this;
    }

    /**
     * Get boostingRankFrom
     *
     * @return string
     */
    public function getBoostingRankFrom()
    {
        return $this->boostingRankFrom;
    }

    /**
     * Set boostingRankTo
     *
     * @param string $boostingRankTo
     *
     * @return Boosting
     */
    public function setBoostingRankTo($boostingRankTo)
    {
        $this->boostingRankTo = $boostingRankTo;

        return $this;
    }

    /**
     * Get boostingRankTo
     *
     * @return string
     */
    public function getBoostingRankTo()
    {
        return $this->boostingRankTo;
    }

    /**
     * Set boostingCost
     *
     * @param float $boostingCost
     *
     * @return Boosting
     */
    public function setBoostingCost($boostingCost)
    {
        $this->boostingCost = $boostingCost;

        return $this;
    }

    /**
     * Get boostingCost
     *
     * @return float
     */
    public function getBoostingCost()
    {
        return $this->boostingCost;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->selling_boostings = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sellingBoosting
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingBoosting
     *
     * @return Boosting
     */
    public function addSellingBoosting(\GamingSchoolBundle\Entity\Selling $sellingBoosting)
    {
        $this->selling_boostings[] = $sellingBoosting;

        return $this;
    }

    /**
     * Remove sellingBoosting
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingBoosting
     */
    public function removeSellingBoosting(\GamingSchoolBundle\Entity\Selling $sellingBoosting)
    {
        $this->selling_boostings->removeElement($sellingBoosting);
    }

    /**
     * Get sellingBoostings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSellingBoostings()
    {
        return $this->selling_boostings;
    }
}

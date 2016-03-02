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
     * @var int
     *
     * @ORM\Column(name="boosting_game_id", type="integer")
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
}


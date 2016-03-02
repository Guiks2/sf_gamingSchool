<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\gameRepository")
 */
class game
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
     * @var string
     *
     * @ORM\Column(name="game_name", type="string", length=255, unique=true)
     */
    private $gameName;

    /**
    * @ORM\OneToMany(targetEntity="CoachingPack", mappedBy="coachingPackGameId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_packs;

    /**
    * @ORM\OneToMany(targetEntity="Boosting", mappedBy="boostingGameId", cascade={"persist", "remove", "merge"})
    */
    private $boosting_games;

    /**
    * @ORM\OneToMany(targetEntity="CoachingSold", mappedBy="coachingSoldGameId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_sold_games;
        
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
     * Set gameName
     *
     * @param string $gameName
     *
     * @return game
     */
    public function setGameName($gameName)
    {
        $this->gameName = $gameName;

        return $this;
    }

    /**
     * Get gameName
     *
     * @return string
     */
    public function getGameName()
    {
        return $this->gameName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coaching_packs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add coachingPack
     *
     * @param \GamingSchoolBundle\Entity\CoachingPack $coachingPack
     *
     * @return game
     */
    public function addCoachingPack(\GamingSchoolBundle\Entity\CoachingPack $coachingPack)
    {
        $this->coaching_packs[] = $coachingPack;

        return $this;
    }

    /**
     * Remove coachingPack
     *
     * @param \GamingSchoolBundle\Entity\CoachingPack $coachingPack
     */
    public function removeCoachingPack(\GamingSchoolBundle\Entity\CoachingPack $coachingPack)
    {
        $this->coaching_packs->removeElement($coachingPack);
    }

    /**
     * Get coachingPacks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingPacks()
    {
        return $this->coaching_packs;
    }

    /**
     * Add boostingGame
     *
     * @param \GamingSchoolBundle\Entity\Boosting $boostingGame
     *
     * @return game
     */
    public function addBoostingGame(\GamingSchoolBundle\Entity\Boosting $boostingGame)
    {
        $this->boosting_games[] = $boostingGame;

        return $this;
    }

    /**
     * Remove boostingGame
     *
     * @param \GamingSchoolBundle\Entity\Boosting $boostingGame
     */
    public function removeBoostingGame(\GamingSchoolBundle\Entity\Boosting $boostingGame)
    {
        $this->boosting_games->removeElement($boostingGame);
    }

    /**
     * Get boostingGames
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBoostingGames()
    {
        return $this->boosting_games;
    }

    /**
     * Add coachingSoldGame
     *
     * @param \GamingSchoolBundle\Entity\CoachingSold $coachingSoldGame
     *
     * @return game
     */
    public function addCoachingSoldGame(\GamingSchoolBundle\Entity\CoachingSold $coachingSoldGame)
    {
        $this->coaching_sold_games[] = $coachingSoldGame;

        return $this;
    }

    /**
     * Remove coachingSoldGame
     *
     * @param \GamingSchoolBundle\Entity\CoachingSold $coachingSoldGame
     */
    public function removeCoachingSoldGame(\GamingSchoolBundle\Entity\CoachingSold $coachingSoldGame)
    {
        $this->coaching_sold_games->removeElement($coachingSoldGame);
    }

    /**
     * Get coachingSoldGames
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingSoldGames()
    {
        return $this->coaching_sold_games;
    }
}

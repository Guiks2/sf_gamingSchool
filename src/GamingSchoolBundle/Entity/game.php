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
}

<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoachingSold.
 *
 * @ORM\Table(name="coaching_sold")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\CoachingSoldRepository")
 */
class CoachingSold
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="coaching_sold_students")
     * @ORM\JoinColumn(name="coaching_sold_student_id", referencedColumnName="id")
     */
    private $coachingSoldStudentId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="coaching_sold_coachs")
     * @ORM\JoinColumn(name="coaching_sold_coach_id", referencedColumnName="id")
     */
    private $coachingSoldCoachId;

    /**
     * @ORM\ManyToOne(targetEntity="game", inversedBy="coaching_sold_games")
     * @ORM\JoinColumn(name="coaching_sold_game_id", referencedColumnName="id")
     */
    private $coachingSoldGameId;

    /**
     * @var string
     *
     * @ORM\Column(name="coaching_sold_nb_hours", type="integer")
     */
    private $coachingSoldNbHours;

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
     * Set coachingSoldStudentId.
     *
     * @param int $coachingSoldStudentId
     *
     * @return CoachingSold
     */
    public function setCoachingSoldStudentId($coachingSoldStudentId)
    {
        $this->coachingSoldStudentId = $coachingSoldStudentId;

        return $this;
    }

    /**
     * Get coachingSoldStudentId.
     *
     * @return int
     */
    public function getCoachingSoldStudentId()
    {
        return $this->coachingSoldStudentId;
    }

    /**
     * Set coachingSoldCoachId.
     *
     * @param int $coachingSoldCoachId
     *
     * @return CoachingSold
     */
    public function setCoachingSoldCoachId($coachingSoldCoachId)
    {
        $this->coachingSoldCoachId = $coachingSoldCoachId;

        return $this;
    }

    /**
     * Get coachingSoldCoachId.
     *
     * @return int
     */
    public function getCoachingSoldCoachId()
    {
        return $this->coachingSoldCoachId;
    }

    /**
     * Set coachingSoldGameId.
     *
     * @param int $coachingSoldGameId
     *
     * @return CoachingSold
     */
    public function setCoachingSoldGameId($coachingSoldGameId)
    {
        $this->coachingSoldGameId = $coachingSoldGameId;

        return $this;
    }

    /**
     * Get coachingSoldGameId.
     *
     * @return int
     */
    public function getCoachingSoldGameId()
    {
        return $this->coachingSoldGameId;
    }

    /**
     * Set coachingSoldNbHours.
     *
     * @param string $coachingSoldNbHours
     *
     * @return CoachingSold
     */
    public function setCoachingSoldNbHours($coachingSoldNbHours)
    {
        $this->coachingSoldNbHours = $coachingSoldNbHours;

        return $this;
    }

    /**
     * Get coachingSoldNbHours.
     *
     * @return int
     */
    public function getCoachingSoldNbHours()
    {
        return $this->coachingSoldNbHours;
    }
}

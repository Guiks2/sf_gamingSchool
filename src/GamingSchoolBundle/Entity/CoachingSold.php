<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoachingSold
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
     * @var int
     *
     * @ORM\Column(name="coaching_sold_student_id", type="integer")
     */
    private $coachingSoldStudentId;

    /**
     * @var int
     *
     * @ORM\Column(name="coaching_sold_coach_id", type="integer")
     */
    private $coachingSoldCoachId;

    /**
     * @var int
     *
     * @ORM\Column(name="coaching_sold_game_id", type="integer")
     */
    private $coachingSoldGameId;

    /**
     * @var string
     *
     * @ORM\Column(name="coaching_sold_nb_hours", type="integer")
     */
    private $coachingSoldNbHours;


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
     * Set coachingSoldStudentId
     *
     * @param integer $coachingSoldStudentId
     *
     * @return CoachingSold
     */
    public function setCoachingSoldStudentId($coachingSoldStudentId)
    {
        $this->coachingSoldStudentId = $coachingSoldStudentId;

        return $this;
    }

    /**
     * Get coachingSoldStudentId
     *
     * @return int
     */
    public function getCoachingSoldStudentId()
    {
        return $this->coachingSoldStudentId;
    }

    /**
     * Set coachingSoldCoachId
     *
     * @param integer $coachingSoldCoachId
     *
     * @return CoachingSold
     */
    public function setCoachingSoldCoachId($coachingSoldCoachId)
    {
        $this->coachingSoldCoachId = $coachingSoldCoachId;

        return $this;
    }

    /**
     * Get coachingSoldCoachId
     *
     * @return int
     */
    public function getCoachingSoldCoachId()
    {
        return $this->coachingSoldCoachId;
    }

    /**
     * Set coachingSoldGameId
     *
     * @param integer $coachingSoldGameId
     *
     * @return CoachingSold
     */
    public function setCoachingSoldGameId($coachingSoldGameId)
    {
        $this->coachingSoldGameId = $coachingSoldGameId;

        return $this;
    }

    /**
     * Get coachingSoldGameId
     *
     * @return int
     */
    public function getCoachingSoldGameId()
    {
        return $this->coachingSoldGameId;
    }

    /**
     * Set coachingSoldNbHours
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
     * Get coachingSoldNbHours
     *
     * @return int
     */
    public function getCoachingSoldNbHours()
    {
        return $this->coachingSoldNbHours;
    }
}


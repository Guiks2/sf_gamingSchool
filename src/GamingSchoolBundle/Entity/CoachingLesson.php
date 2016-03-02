<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoachingLesson
 *
 * @ORM\Table(name="coaching_lesson")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\CoachingLessonRepository")
 */
class CoachingLesson
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
     * @ORM\Column(name="coaching_lesson_student_id", type="integer")
     */
    private $coachingLessonStudentId;

    /**
     * @var int
     *
     * @ORM\Column(name="coaching_lesson_coach_id", type="integer")
     */
    private $coachingLessonCoachId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="coaching_lesson_date_beginning", type="datetime")
     */
    private $coachingLessonDateBeginning;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="coaching_lesson_date_ending", type="datetime")
     */
    private $coachingLessonDateEnding;


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
     * Set coachingLessonStudentId
     *
     * @param integer $coachingLessonStudentId
     *
     * @return CoachingLesson
     */
    public function setCoachingLessonStudentId($coachingLessonStudentId)
    {
        $this->coachingLessonStudentId = $coachingLessonStudentId;

        return $this;
    }

    /**
     * Get coachingLessonStudentId
     *
     * @return int
     */
    public function getCoachingLessonStudentId()
    {
        return $this->coachingLessonStudentId;
    }

    /**
     * Set coachingLessonCoachId
     *
     * @param integer $coachingLessonCoachId
     *
     * @return CoachingLesson
     */
    public function setCoachingLessonCoachId($coachingLessonCoachId)
    {
        $this->coachingLessonCoachId = $coachingLessonCoachId;

        return $this;
    }

    /**
     * Get coachingLessonCoachId
     *
     * @return int
     */
    public function getCoachingLessonCoachId()
    {
        return $this->coachingLessonCoachId;
    }

    /**
     * Set coachingLessonDateBeginning
     *
     * @param \DateTime $coachingLessonDateBeginning
     *
     * @return CoachingLesson
     */
    public function setCoachingLessonDateBeginning($coachingLessonDateBeginning)
    {
        $this->coachingLessonDateBeginning = $coachingLessonDateBeginning;

        return $this;
    }

    /**
     * Get coachingLessonDateBeginning
     *
     * @return \DateTime
     */
    public function getCoachingLessonDateBeginning()
    {
        return $this->coachingLessonDateBeginning;
    }

    /**
     * Set coachingLessonDateEnding
     *
     * @param \DateTime $coachingLessonDateEnding
     *
     * @return CoachingLesson
     */
    public function setCoachingLessonDateEnding($coachingLessonDateEnding)
    {
        $this->coachingLessonDateEnding = $coachingLessonDateEnding;

        return $this;
    }

    /**
     * Get coachingLessonDateEnding
     *
     * @return \DateTime
     */
    public function getCoachingLessonDateEnding()
    {
        return $this->coachingLessonDateEnding;
    }
}


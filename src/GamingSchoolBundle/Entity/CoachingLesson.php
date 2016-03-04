<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoachingLesson.
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="coaching_lesson_students")
     * @ORM\JoinColumn(name="coaching_lesson_student_id", referencedColumnName="id")
     */
    private $coachingLessonStudentId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="coaching_lesson_coachs")
     * @ORM\JoinColumn(name="coaching_lesson_coach_id", referencedColumnName="id")
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coachingLessonStudentId.
     *
     * @param int $coachingLessonStudentId
     *
     * @return CoachingLesson
     */
    public function setCoachingLessonStudentId($coachingLessonStudentId)
    {
        $this->coachingLessonStudentId = $coachingLessonStudentId;

        return $this;
    }

    /**
     * Get coachingLessonStudentId.
     *
     * @return int
     */
    public function getCoachingLessonStudentId()
    {
        return $this->coachingLessonStudentId;
    }

    /**
     * Set coachingLessonCoachId.
     *
     * @param int $coachingLessonCoachId
     *
     * @return CoachingLesson
     */
    public function setCoachingLessonCoachId($coachingLessonCoachId)
    {
        $this->coachingLessonCoachId = $coachingLessonCoachId;

        return $this;
    }

    /**
     * Get coachingLessonCoachId.
     *
     * @return int
     */
    public function getCoachingLessonCoachId()
    {
        return $this->coachingLessonCoachId;
    }

    /**
     * Set coachingLessonDateBeginning.
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
     * Get coachingLessonDateBeginning.
     *
     * @return \DateTime
     */
    public function getCoachingLessonDateBeginning()
    {
        return $this->coachingLessonDateBeginning;
    }

    /**
     * Set coachingLessonDateEnding.
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
     * Get coachingLessonDateEnding.
     *
     * @return \DateTime
     */
    public function getCoachingLessonDateEnding()
    {
        return $this->coachingLessonDateEnding;
    }
}

<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="user_username", type="string", length=30, unique=true)
     */
    private $userUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="user_firstname", type="string", length=30)
     */
    private $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lastname", type="string", length=30)
     */
    private $userLastname;

    /**
     * @ORM\ManyToOne(targetEntity="statut", inversedBy="user")
     * @ORM\JoinColumn(name="user_statut", referencedColumnName="id")
     */
    private $userStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address", type="string", length=255, nullable=true)
     */
    private $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=20, nullable=true)
     */
    private $userPhone;

    /**
     * @var float
     *
     * @ORM\Column(name="user_sold", type="float")
     */
    private $userSold;

    /**
    * @ORM\OneToMany(targetEntity="CoachingPack", mappedBy="coachingPackCoachId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_pack;

    /**
    * @ORM\OneToMany(targetEntity="CoachingSold", mappedBy="coachingSoldCoachId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_sold_coachs;

    /**
    * @ORM\OneToMany(targetEntity="CoachingSold", mappedBy="coachingSoldStudentId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_sold_students;

    /**
    * @ORM\OneToMany(targetEntity="Selling", mappedBy="sellingStudentId", cascade={"persist", "remove", "merge"})
    */
    private $selling_students;

    /**
    * @ORM\OneToMany(targetEntity="Selling", mappedBy="sellingCoachId", cascade={"persist", "remove", "merge"})
    */
    private $selling_coachs;

    /**
    * @ORM\OneToMany(targetEntity="CoachingLesson", mappedBy="coachingLessonStudentId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_lesson_students;

    /**
    * @ORM\OneToMany(targetEntity="CoachingLesson", mappedBy="coachingLessonCoachId", cascade={"persist", "remove", "merge"})
    */
    private $coaching_lesson_coachs;
                        
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
     * Set userUsername
     *
     * @param string $userUsername
     *
     * @return User
     */
    public function setUserUsername($userUsername)
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    /**
     * Get userUsername
     *
     * @return string
     */
    public function getUserUsername()
    {
        return $this->userUsername;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userFirstname
     *
     * @param string $userFirstname
     *
     * @return User
     */
    public function setUserFirstname($userFirstname)
    {
        $this->userFirstname = $userFirstname;

        return $this;
    }

    /**
     * Get userFirstname
     *
     * @return string
     */
    public function getUserFirstname()
    {
        return $this->userFirstname;
    }

    /**
     * Set userLastname
     *
     * @param string $userLastname
     *
     * @return User
     */
    public function setUserLastname($userLastname)
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    /**
     * Get userLastname
     *
     * @return string
     */
    public function getUserLastname()
    {
        return $this->userLastname;
    }

    /**
     * Set userStatut
     *
     * @param string $userStatut
     *
     * @return User
     */
    public function setUserStatut($userStatut)
    {
        $this->userStatut = $userStatut;

        return $this;
    }

    /**
     * Get userStatut
     *
     * @return int
     */
    public function getUserStatut()
    {
        return $this->userStatut;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userAddress
     *
     * @param string $userAddress
     *
     * @return User
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * Get userAddress
     *
     * @return string
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return User
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set userSold
     *
     * @param float $userSold
     *
     * @return User
     */
    public function setUserSold($userSold)
    {
        $this->userSold = $userSold;

        return $this;
    }

    /**
     * Get userSold
     *
     * @return float
     */
    public function getUserSold()
    {
        return $this->userSold;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coaching_pack = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add coachingPack
     *
     * @param \GamingSchoolBundle\Entity\CoachingPack $coachingPack
     *
     * @return User
     */
    public function addCoachingPack(\GamingSchoolBundle\Entity\CoachingPack $coachingPack)
    {
        $this->coaching_pack[] = $coachingPack;

        return $this;
    }

    /**
     * Remove coachingPack
     *
     * @param \GamingSchoolBundle\Entity\CoachingPack $coachingPack
     */
    public function removeCoachingPack(\GamingSchoolBundle\Entity\CoachingPack $coachingPack)
    {
        $this->coaching_pack->removeElement($coachingPack);
    }

    /**
     * Get coachingPack
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingPack()
    {
        return $this->coaching_pack;
    }

    /**
     * Add coachingSoldCoach
     *
     * @param \GamingSchoolBundle\Entity\CoachingSold $coachingSoldCoach
     *
     * @return User
     */
    public function addCoachingSoldCoach(\GamingSchoolBundle\Entity\CoachingSold $coachingSoldCoach)
    {
        $this->coaching_sold_coachs[] = $coachingSoldCoach;

        return $this;
    }

    /**
     * Remove coachingSoldCoach
     *
     * @param \GamingSchoolBundle\Entity\CoachingSold $coachingSoldCoach
     */
    public function removeCoachingSoldCoach(\GamingSchoolBundle\Entity\CoachingSold $coachingSoldCoach)
    {
        $this->coaching_sold_coachs->removeElement($coachingSoldCoach);
    }

    /**
     * Get coachingSoldCoachs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingSoldCoachs()
    {
        return $this->coaching_sold_coachs;
    }

    /**
     * Add coachingSoldStudent
     *
     * @param \GamingSchoolBundle\Entity\CoachingSold $coachingSoldStudent
     *
     * @return User
     */
    public function addCoachingSoldStudent(\GamingSchoolBundle\Entity\CoachingSold $coachingSoldStudent)
    {
        $this->coaching_sold_students[] = $coachingSoldStudent;

        return $this;
    }

    /**
     * Remove coachingSoldStudent
     *
     * @param \GamingSchoolBundle\Entity\CoachingSold $coachingSoldStudent
     */
    public function removeCoachingSoldStudent(\GamingSchoolBundle\Entity\CoachingSold $coachingSoldStudent)
    {
        $this->coaching_sold_students->removeElement($coachingSoldStudent);
    }

    /**
     * Get coachingSoldStudents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingSoldStudents()
    {
        return $this->coaching_sold_students;
    }

    /**
     * Add sellingStudent
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingStudent
     *
     * @return User
     */
    public function addSellingStudent(\GamingSchoolBundle\Entity\Selling $sellingStudent)
    {
        $this->selling_students[] = $sellingStudent;

        return $this;
    }

    /**
     * Remove sellingStudent
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingStudent
     */
    public function removeSellingStudent(\GamingSchoolBundle\Entity\Selling $sellingStudent)
    {
        $this->selling_students->removeElement($sellingStudent);
    }

    /**
     * Get sellingStudents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSellingStudents()
    {
        return $this->selling_students;
    }

    /**
     * Add sellingCoach
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingCoach
     *
     * @return User
     */
    public function addSellingCoach(\GamingSchoolBundle\Entity\Selling $sellingCoach)
    {
        $this->selling_coachs[] = $sellingCoach;

        return $this;
    }

    /**
     * Remove sellingCoach
     *
     * @param \GamingSchoolBundle\Entity\Selling $sellingCoach
     */
    public function removeSellingCoach(\GamingSchoolBundle\Entity\Selling $sellingCoach)
    {
        $this->selling_coachs->removeElement($sellingCoach);
    }

    /**
     * Get sellingCoachs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSellingCoachs()
    {
        return $this->selling_coachs;
    }

    /**
     * Add coachingLessonStudent
     *
     * @param \GamingSchoolBundle\Entity\CoachingLesson $coachingLessonStudent
     *
     * @return User
     */
    public function addCoachingLessonStudent(\GamingSchoolBundle\Entity\CoachingLesson $coachingLessonStudent)
    {
        $this->coaching_lesson_students[] = $coachingLessonStudent;

        return $this;
    }

    /**
     * Remove coachingLessonStudent
     *
     * @param \GamingSchoolBundle\Entity\CoachingLesson $coachingLessonStudent
     */
    public function removeCoachingLessonStudent(\GamingSchoolBundle\Entity\CoachingLesson $coachingLessonStudent)
    {
        $this->coaching_lesson_students->removeElement($coachingLessonStudent);
    }

    /**
     * Get coachingLessonStudents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingLessonStudents()
    {
        return $this->coaching_lesson_students;
    }

    /**
     * Add coachingLessonCoach
     *
     * @param \GamingSchoolBundle\Entity\CoachingLesson $coachingLessonCoach
     *
     * @return User
     */
    public function addCoachingLessonCoach(\GamingSchoolBundle\Entity\CoachingLesson $coachingLessonCoach)
    {
        $this->coaching_lesson_coachs[] = $coachingLessonCoach;

        return $this;
    }

    /**
     * Remove coachingLessonCoach
     *
     * @param \GamingSchoolBundle\Entity\CoachingLesson $coachingLessonCoach
     */
    public function removeCoachingLessonCoach(\GamingSchoolBundle\Entity\CoachingLesson $coachingLessonCoach)
    {
        $this->coaching_lesson_coachs->removeElement($coachingLessonCoach);
    }

    /**
     * Get coachingLessonCoachs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoachingLessonCoachs()
    {
        return $this->coaching_lesson_coachs;
    }
}

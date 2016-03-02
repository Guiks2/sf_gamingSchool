<?php

namespace GamingSchoolBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_username", type="string", length=30, unique=true)
     */
    protected $userUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="user_firstname", type="string", length=30)
     */
    protected $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lastname", type="string", length=30)
     */
    protected $userLastname;

    /**
     * @ORM\ManyToOne(targetEntity="statut", inversedBy="user")
     * @ORM\JoinColumn(name="user_statut", referencedColumnName="id")
     */
    protected $userStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255)
     */
    protected $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address", type="string", length=255, nullable=true)
     */
    protected $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=20, nullable=true)
     */
    protected $userPhone;

    /**
     * @var float
     *
     * @ORM\Column(name="user_sold", type="float")
     */
    protected $userSold;


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
}


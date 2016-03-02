<?php

namespace GamingSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * statut
 *
 * @ORM\Table(name="statut")
 * @ORM\Entity(repositoryClass="GamingSchoolBundle\Repository\statutRepository")
 */
class statut
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="user", mappedBy="statut")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_name", type="string", length=255, unique=true)
     */
    private $statutName;


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
     * Set statutName
     *
     * @param string $statutName
     *
     * @return statut
     */
    public function setStatutName($statutName)
    {
        $this->statutName = $statutName;

        return $this;
    }

    /**
     * Get statutName
     *
     * @return string
     */
    public function getStatutName()
    {
        return $this->statutName;
    }
}

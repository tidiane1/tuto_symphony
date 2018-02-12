<?php

namespace SNT\immobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurEntite
 *
 * @ORM\Table(name="utilisateur_entite")
 * @ORM\Entity(repositoryClass="SNT\immobilierBundle\Repository\UtilisateurEntiteRepository")
 */
class UtilisateurEntite
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
     * @ORM\Column(name="nomcomplet", type="string", length=50, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=30, unique=false)
     */
    private $pwd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaiss", type="datetime")
     */
    private $datenaiss;
   /**
   * @ORM\ManyToMany(targetEntity="SNT\immobilierBundle\Entity\RoleEntite")
   */
  private $roles;

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
     * Set nomcomplet
     *
     * @param string $nomcomplet
     *
     * @return UtilisateurEntite
     */
    public function setNomcomplet($nomcomplet)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get nomcomplet
     *
     * @return string
     */
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return UtilisateurEntite
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return UtilisateurEntite
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set datenaiss
     *
     * @param \DateTime $datenaiss
     *
     * @return UtilisateurEntite
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    /**
     * Get datenaiss
     *
     * @return \DateTime
     */
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add role
     *
     * @param \SNT\immobilierBundle\Entity\RoleEntite $role
     *
     * @return UtilisateurEntite
     */
    public function addRole(\SNT\immobilierBundle\Entity\RoleEntite $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \SNT\immobilierBundle\Entity\RoleEntite $role
     */
    public function removeRole(\SNT\immobilierBundle\Entity\RoleEntite $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }
}

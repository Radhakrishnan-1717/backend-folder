<?php

namespace App\Entity;

use App\Repository\Usertable6Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable6Repository::class)
 */
class Usertable6
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userfirstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usersecondname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userlastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userlocation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usergender;

    /**
     * @ORM\OneToOne(targetEntity=Userprofessionaldata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userprofessionaldata;

    /**
     * @ORM\OneToOne(targetEntity=Userpersonaldata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userpersonaldata;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserfirstname(): ?string
    {
        return $this->userfirstname;
    }

    public function setUserfirstname(string $userfirstname): self
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    public function getUsersecondname(): ?string
    {
        return $this->usersecondname;
    }

    public function setUsersecondname(?string $usersecondname): self
    {
        $this->usersecondname = $usersecondname;

        return $this;
    }

    public function getUserlastname(): ?string
    {
        return $this->userlastname;
    }

    public function setUserlastname(string $userlastname): self
    {
        $this->userlastname = $userlastname;

        return $this;
    }

    public function getUserlocation(): ?string
    {
        return $this->userlocation;
    }

    public function setUserlocation(string $userlocation): self
    {
        $this->userlocation = $userlocation;

        return $this;
    }

    public function getUsergender(): ?string
    {
        return $this->usergender;
    }

    public function setUsergender(string $usergender): self
    {
        $this->usergender = $usergender;

        return $this;
    }

    public function getUserprofessionaldata(): ?Userprofessionaldata
    {
        return $this->userprofessionaldata;
    }

    public function setUserprofessionaldata(Userprofessionaldata $userprofessionaldata): self
    {
        // set the owning side of the relation if necessary
        if ($userprofessionaldata->getUserid() !== $this) {
            $userprofessionaldata->setUserid($this);
        }

        $this->userprofessionaldata = $userprofessionaldata;

        return $this;
    }

    public function getUserpersonaldata(): ?Userpersonaldata
    {
        return $this->userpersonaldata;
    }

    public function setUserpersonaldata(Userpersonaldata $userpersonaldata): self
    {
        // set the owning side of the relation if necessary
        if ($userpersonaldata->getUserid() !== $this) {
            $userpersonaldata->setUserid($this);
        }

        $this->userpersonaldata = $userpersonaldata;

        return $this;
    }
}

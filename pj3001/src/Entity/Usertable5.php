<?php

namespace App\Entity;

use App\Repository\Usertable5Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable5Repository::class)
 */
class Usertable5
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
    private $username;

    /**
     * @ORM\Column(type="integer")
     */
    private $userage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userphonenumber;

    /**
     * @ORM\OneToOne(targetEntity=Userpersonaldata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userroles;

    /**
     * @ORM\OneToOne(targetEntity=Userprofessional::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userdob;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUserage(): ?int
    {
        return $this->userage;
    }

    public function setUserage(int $userage): self
    {
        $this->userage = $userage;

        return $this;
    }

    public function getUserphonenumber(): ?string
    {
        return $this->userphonenumber;
    }

    public function setUserphonenumber(string $userphonenumber): self
    {
        $this->userphonenumber = $userphonenumber;

        return $this;
    }

    public function getUserroles(): ?Userpersonaldata
    {
        return $this->userroles;
    }

    public function setUserroles(?Userpersonaldata $userroles): self
    {
        // unset the owning side of the relation if necessary
        if ($userroles === null && $this->userroles !== null) {
            $this->userroles->setUserid(null);
        }

        // set the owning side of the relation if necessary
        if ($userroles !== null && $userroles->getUserid() !== $this) {
            $userroles->setUserid($this);
        }

        $this->userroles = $userroles;

        return $this;
    }

    public function getUserdob(): ?Userprofessional
    {
        return $this->userdob;
    }

    public function setUserdob(Userprofessional $userdob): self
    {
        // set the owning side of the relation if necessary
        if ($userdob->getUserid() !== $this) {
            $userdob->setUserid($this);
        }

        $this->userdob = $userdob;

        return $this;
    }
}

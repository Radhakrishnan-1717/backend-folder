<?php

namespace App\Entity;

use App\Repository\Usertable20Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable20Repository::class)
 */
class Usertable20
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
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Useremailid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Usernumber;

    /**
     * @ORM\OneToOne(targetEntity=Userperdata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userperdata;

    /**
     * @ORM\OneToOne(targetEntity=Userprofdata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userprofdata;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getUseremailid(): ?string
    {
        return $this->Useremailid;
    }

    public function setUseremailid(string $Useremailid): self
    {
        $this->Useremailid = $Useremailid;

        return $this;
    }

    public function getUsernumber(): ?string
    {
        return $this->Usernumber;
    }

    public function setUsernumber(string $Usernumber): self
    {
        $this->Usernumber = $Usernumber;

        return $this;
    }

    public function getUserperdata(): ?Userperdata
    {
        return $this->userperdata;
    }

    public function setUserperdata(Userperdata $userperdata): self
    {
        // set the owning side of the relation if necessary
        if ($userperdata->getUserid() !== $this) {
            $userperdata->setUserid($this);
        }

        $this->userperdata = $userperdata;

        return $this;
    }

    public function getUserprofdata(): ?Userprofdata
    {
        return $this->userprofdata;
    }

    public function setUserprofdata(Userprofdata $userprofdata): self
    {
        // set the owning side of the relation if necessary
        if ($userprofdata->getUserid() !== $this) {
            $userprofdata->setUserid($this);
        }

        $this->userprofdata = $userprofdata;

        return $this;
    }
}

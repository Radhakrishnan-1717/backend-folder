<?php

namespace App\Entity;

use App\Repository\Usertable19Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable19Repository::class)
 */
class Usertable19
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
    private $Userphonenumber;

    /**
     * @ORM\OneToOne(targetEntity=Userprofdata::class, mappedBy="Userid", cascade={"persist", "remove"})
     */
    private $userprofdata;

    /**
     * @ORM\OneToOne(targetEntity=Userperdata::class, mappedBy="Userid", cascade={"persist", "remove"})
     */
    private $userperdata;

    /**
     * @ORM\OneToOne(targetEntity=Usercountrydata::class, mappedBy="Userid", cascade={"persist", "remove"})
     */
    private $usercountrydata;

    /**
     * @ORM\OneToOne(targetEntity=Userstatedata::class, mappedBy="Userid", cascade={"persist", "remove"})
     */
    private $userstatedata;

    /**
     * @ORM\OneToOne(targetEntity=Usercity::class, mappedBy="Userid", cascade={"persist", "remove"})
     */
    private $usercity;

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

    public function getUserphonenumber(): ?string
    {
        return $this->Userphonenumber;
    }

    public function setUserphonenumber(string $Userphonenumber): self
    {
        $this->Userphonenumber = $Userphonenumber;

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

    public function getUsercountrydata(): ?Usercountrydata
    {
        return $this->usercountrydata;
    }

    public function setUsercountrydata(Usercountrydata $usercountrydata): self
    {
        // set the owning side of the relation if necessary
        if ($usercountrydata->getUserid() !== $this) {
            $usercountrydata->setUserid($this);
        }

        $this->usercountrydata = $usercountrydata;

        return $this;
    }

    public function getUserstatedata(): ?Userstatedata
    {
        return $this->userstatedata;
    }

    public function setUserstatedata(Userstatedata $userstatedata): self
    {
        // set the owning side of the relation if necessary
        if ($userstatedata->getUserid() !== $this) {
            $userstatedata->setUserid($this);
        }

        $this->userstatedata = $userstatedata;

        return $this;
    }

    public function getUsercity(): ?Usercity
    {
        return $this->usercity;
    }

    public function setUsercity(Usercity $usercity): self
    {
        // set the owning side of the relation if necessary
        if ($usercity->getUserid() !== $this) {
            $usercity->setUserid($this);
        }

        $this->usercity = $usercity;

        return $this;
    }
}

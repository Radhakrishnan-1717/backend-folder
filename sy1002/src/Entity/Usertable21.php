<?php

namespace App\Entity;

use App\Repository\Usertable21Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable21Repository::class)
 */
class Usertable21
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
     * @ORM\OneToMany(targetEntity=Userdepartments::class, mappedBy="userid")
     */
    private $userdepartments;

    public function __construct()
    {
        $this->userdepartments = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Userdepartments>
     */
    public function getUserdepartments(): Collection
    {
        return $this->userdepartments;
    }

    public function addUserdepartment(Userdepartments $userdepartment): self
    {
        if (!$this->userdepartments->contains($userdepartment)) {
            $this->userdepartments[] = $userdepartment;
            $userdepartment->setUserid($this);
        }

        return $this;
    }

    public function removeUserdepartment(Userdepartments $userdepartment): self
    {
        if ($this->userdepartments->removeElement($userdepartment)) {
            // set the owning side to null (unless already changed)
            if ($userdepartment->getUserid() === $this) {
                $userdepartment->setUserid(null);
            }
        }

        return $this;
    }
}

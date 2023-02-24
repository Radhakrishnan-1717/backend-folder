<?php

namespace App\Entity;

use App\Repository\Usertable22Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable22Repository::class)
 */
class Usertable22
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
    private $Usermailid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Usernumber;

    /**
     * @ORM\OneToMany(targetEntity=Userdepartment::class, mappedBy="userid")
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

    public function getUsermailid(): ?string
    {
        return $this->Usermailid;
    }

    public function setUsermailid(string $Usermailid): self
    {
        $this->Usermailid = $Usermailid;

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

    /**
     * @return Collection<int, Userdepartment>
     */
    public function getUserdepartments(): Collection
    {
        return $this->userdepartments;
    }

        /**
     * @return Collection<int, Userdepartment>
     */
    public function setUserdepartments(): Collection
    {
        return $this->userdepartments;
    }

    public function addUserdepartment(Userdepartment $userdepartment): self
    {
        if (!$this->userdepartments->contains($userdepartment)) {
            $this->userdepartments[] = $userdepartment;
            $userdepartment->setUserid($this);
        }

        return $this;
    }

    public function removeUserdepartment(Userdepartment $userdepartment): self
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

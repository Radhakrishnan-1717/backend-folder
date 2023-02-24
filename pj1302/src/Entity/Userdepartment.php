<?php

namespace App\Entity;

use App\Repository\UserdepartmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserdepartmentRepository::class)
 */
class Userdepartment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Usertable23::class, mappedBy="userdepartment", orphanRemoval=true)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userdepartmenttitle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Userdepartmentstatus;

    public function __construct()
    {
        $this->userid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Usertable23>
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Usertable23 $userid): self
    {
        if (!$this->userid->contains($userid)) {
            $this->userid[] = $userid;
            $userid->setUserdepartment($this);
        }

        return $this;
    }

    public function removeUserid(Usertable23 $userid): self
    {
        if ($this->userid->removeElement($userid)) {
            // set the owning side to null (unless already changed)
            if ($userid->getUserdepartment() === $this) {
                $userid->setUserdepartment(null);
            }
        }

        return $this;
    }

    public function getUserdepartmenttitle(): ?string
    {
        return $this->Userdepartmenttitle;
    }

    public function setUserdepartmenttitle(string $Userdepartmenttitle): self
    {
        $this->Userdepartmenttitle = $Userdepartmenttitle;

        return $this;
    }

    public function isUserdepartmentstatus(): ?bool
    {
        return $this->Userdepartmentstatus;
    }

    public function setUserdepartmentstatus(bool $Userdepartmentstatus): self
    {
        $this->Userdepartmentstatus = $Userdepartmentstatus;

        return $this;
    }
}

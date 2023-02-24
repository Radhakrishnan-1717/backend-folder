<?php

namespace App\Entity;

use App\Repository\StudentschoolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentschoolRepository::class)
 */
class Studentschool
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Usertable24::class, mappedBy="studentschool", orphanRemoval=true)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Schoolname;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Schoolstatus;

    public function __construct()
    {
        $this->userid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Usertable24>
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Usertable24 $userid): self
    {
        if (!$this->userid->contains($userid)) {
            $this->userid[] = $userid;
            $userid->setStudentschool($this);
        }

        return $this;
    }

    public function removeUserid(Usertable24 $userid): self
    {
        if ($this->userid->removeElement($userid)) {
            // set the owning side to null (unless already changed)
            if ($userid->getStudentschool() === $this) {
                $userid->setStudentschool(null);
            }
        }

        return $this;
    }

    public function getSchoolname(): ?string
    {
        return $this->Schoolname;
    }

    public function setSchoolname(string $Schoolname): self
    {
        $this->Schoolname = $Schoolname;

        return $this;
    }

    public function isSchoolstatus(): ?bool
    {
        return $this->Schoolstatus;
    }

    public function setSchoolstatus(bool $Schoolstatus): self
    {
        $this->Schoolstatus = $Schoolstatus;

        return $this;
    }
}

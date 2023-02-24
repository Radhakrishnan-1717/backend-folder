<?php

namespace App\Entity;

use App\Repository\StudentdepartmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentdepartmentRepository::class)
 */
class Studentdepartment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Usertable26::class, mappedBy="studentdepartment", orphanRemoval=true)
     */
    private $Departmenttitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Studentdepname;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Studentdepstatus;

    public function __construct()
    {
        $this->Departmenttitle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Usertable26>
     */
    public function getDepartmenttitle(): Collection
    {
        return $this->Departmenttitle;
    }

    public function addDepartmenttitle(Usertable26 $departmenttitle): self
    {
        if (!$this->Departmenttitle->contains($departmenttitle)) {
            $this->Departmenttitle[] = $departmenttitle;
            $departmenttitle->setStudentdepartment($this);
        }

        return $this;
    }

    public function removeDepartmenttitle(Usertable26 $departmenttitle): self
    {
        if ($this->Departmenttitle->removeElement($departmenttitle)) {
            // set the owning side to null (unless already changed)
            if ($departmenttitle->getStudentdepartment() === $this) {
                $departmenttitle->setStudentdepartment(null);
            }
        }

        return $this;
    }

    public function getStudentdepname(): ?string
    {
        return $this->Studentdepname;
    }

    public function setStudentdepname(string $Studentdepname): self
    {
        $this->Studentdepname = $Studentdepname;

        return $this;
    }

    public function isStudentdepstatus(): ?bool
    {
        return $this->Studentdepstatus;
    }

    public function setStudentdepstatus(bool $Studentdepstatus): self
    {
        $this->Studentdepstatus = $Studentdepstatus;

        return $this;
    }
}

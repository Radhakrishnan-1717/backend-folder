<?php

namespace App\Entity;

use App\Repository\MoviedepartmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MoviedepartmentRepository::class)
 */
class Moviedepartment
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
    private $Editingdepartment;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cameradepartment;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Artdepartment;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sounddepartment;

    /**
     * @ORM\ManyToOne(targetEntity=Movie::class, inversedBy="Movieid")
     * @ORM\JoinColumn(nullable=false)
     */
    private $movie;

    /**
     * @ORM\ManyToMany(targetEntity=Departmentemployee::class, mappedBy="employeeid")
     */
    private $departmentemployees;

    public function __construct()
    {
        $this->departmentemployees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEditingdepartment(): ?string
    {
        return $this->Editingdepartment;
    }

    public function setEditingdepartment(string $Editingdepartment): self
    {
        $this->Editingdepartment = $Editingdepartment;

        return $this;
    }

    public function getCameradepartment(): ?string
    {
        return $this->Cameradepartment;
    }

    public function setCameradepartment(string $Cameradepartment): self
    {
        $this->Cameradepartment = $Cameradepartment;

        return $this;
    }

    public function getArtdepartment(): ?string
    {
        return $this->Artdepartment;
    }

    public function setArtdepartment(string $Artdepartment): self
    {
        $this->Artdepartment = $Artdepartment;

        return $this;
    }

    public function getSounddepartment(): ?string
    {
        return $this->Sounddepartment;
    }

    public function setSounddepartment(string $Sounddepartment): self
    {
        $this->Sounddepartment = $Sounddepartment;

        return $this;
    }

    public function getMovie(): ?Movie
    {
        return $this->movie;
    }

    public function setMovie(?Movie $movie): self
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * @return Collection<int, Departmentemployee>
     */
    public function getDepartmentemployees(): Collection
    {
        return $this->departmentemployees;
    }

    public function addDepartmentemployee(Departmentemployee $departmentemployee): self
    {
        if (!$this->departmentemployees->contains($departmentemployee)) {
            $this->departmentemployees[] = $departmentemployee;
            $departmentemployee->addEmployeeid($this);
        }

        return $this;
    }

    public function removeDepartmentemployee(Departmentemployee $departmentemployee): self
    {
        if ($this->departmentemployees->removeElement($departmentemployee)) {
            $departmentemployee->removeEmployeeid($this);
        }

        return $this;
    }
}

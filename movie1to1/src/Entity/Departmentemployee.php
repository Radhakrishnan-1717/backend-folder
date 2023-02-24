<?php

namespace App\Entity;

use App\Repository\DepartmentemployeeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartmentemployeeRepository::class)
 */
class Departmentemployee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Moviedepartment::class, inversedBy="departmentemployees")
     */
    private $employeeid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Employeename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Employeerole;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Employeemailid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Employeephonenumber;

    public function __construct()
    {
        $this->employeeid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Moviedepartment>
     */
    public function getEmployeeid(): Collection
    {
        return $this->employeeid;
    }

    public function addEmployeeid(Moviedepartment $employeeid): self
    {
        if (!$this->employeeid->contains($employeeid)) {
            $this->employeeid[] = $employeeid;
        }

        return $this;
    }

    public function removeEmployeeid(Moviedepartment $employeeid): self
    {
        $this->employeeid->removeElement($employeeid);

        return $this;
    }

    public function getEmployeename(): ?string
    {
        return $this->Employeename;
    }

    public function setEmployeename(string $Employeename): self
    {
        $this->Employeename = $Employeename;

        return $this;
    }

    public function getEmployeerole(): ?string
    {
        return $this->Employeerole;
    }

    public function setEmployeerole(string $Employeerole): self
    {
        $this->Employeerole = $Employeerole;

        return $this;
    }

    public function getEmployeemailid(): ?string
    {
        return $this->Employeemailid;
    }

    public function setEmployeemailid(string $Employeemailid): self
    {
        $this->Employeemailid = $Employeemailid;

        return $this;
    }

    public function getEmployeephonenumber(): ?string
    {
        return $this->Employeephonenumber;
    }

    public function setEmployeephonenumber(string $Employeephonenumber): self
    {
        $this->Employeephonenumber = $Employeephonenumber;

        return $this;
    }
}

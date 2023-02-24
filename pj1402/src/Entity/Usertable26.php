<?php

namespace App\Entity;

use App\Repository\Usertable26Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable26Repository::class)
 */
class Usertable26
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
    private $studentname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Studentmailid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Studentphonenumber;

    /**
     * @ORM\ManyToOne(targetEntity=Studentdepartment::class, inversedBy="Departmenttitle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $studentdepartment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentname(): ?string
    {
        return $this->studentname;
    }

    public function setStudentname(string $studentname): self
    {
        $this->studentname = $studentname;

        return $this;
    }

    public function getStudentmailid(): ?string
    {
        return $this->Studentmailid;
    }

    public function setStudentmailid(string $Studentmailid): self
    {
        $this->Studentmailid = $Studentmailid;

        return $this;
    }

    public function getStudentphonenumber(): ?string
    {
        return $this->Studentphonenumber;
    }

    public function setStudentphonenumber(string $Studentphonenumber): self
    {
        $this->Studentphonenumber = $Studentphonenumber;

        return $this;
    }

    public function getStudentdepartment(): ?Studentdepartment
    {
        return $this->studentdepartment;
    }

    public function setStudentdepartment(?Studentdepartment $studentdepartment): self
    {
        $this->studentdepartment = $studentdepartment;

        return $this;
    }
}

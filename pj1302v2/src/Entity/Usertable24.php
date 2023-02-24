<?php

namespace App\Entity;

use App\Repository\Usertable24Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable24Repository::class)
 */
class Usertable24
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
    private $Studentname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Studentnumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Studentmailid;

    /**
     * @ORM\ManyToOne(targetEntity=Studentschool::class, inversedBy="userid")
     * @ORM\JoinColumn(nullable=false)
     */
    private $studentschool;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentname(): ?string
    {
        return $this->Studentname;
    }

    public function setStudentname(string $Studentname): self
    {
        $this->Studentname = $Studentname;

        return $this;
    }

    public function getStudentnumber(): ?string
    {
        return $this->Studentnumber;
    }

    public function setStudentnumber(string $Studentnumber): self
    {
        $this->Studentnumber = $Studentnumber;

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

    public function getStudentschool(): ?Studentschool
    {
        return $this->studentschool;
    }

    public function setStudentschool(?Studentschool $studentschool): self
    {
        $this->studentschool = $studentschool;

        return $this;
    }
}

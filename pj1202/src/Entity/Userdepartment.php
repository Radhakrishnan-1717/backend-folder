<?php

namespace App\Entity;

use App\Repository\UserdepartmentRepository;
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
     * @ORM\ManyToOne(targetEntity=Usertable22::class, inversedBy="userdepartments")
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable22
    {
        return $this->userid;
    }

    public function setUserid(?Usertable22 $userid): self
    {
        $this->userid = $userid;

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

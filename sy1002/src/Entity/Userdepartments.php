<?php

namespace App\Entity;

use App\Repository\UserdepartmentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserdepartmentsRepository::class)
 */
class Userdepartments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Usertable21::class, inversedBy="userdepartments")
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userdepartmenttitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userdepartmentstatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable21
    {
        return $this->userid;
    }

    public function setUserid(?Usertable21 $userid): self
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

    public function getUserdepartmentstatus(): ?string
    {
        return $this->Userdepartmentstatus;
    }

    public function setUserdepartmentstatus(string $Userdepartmentstatus): self
    {
        $this->Userdepartmentstatus = $Userdepartmentstatus;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\Usertable23Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable23Repository::class)
 */
class Usertable23
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
    private $Userphonenumber;

    /**
     * @ORM\ManyToOne(targetEntity=Userdepartment::class, inversedBy="userid")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userdepartment;

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

    public function getUserphonenumber(): ?string
    {
        return $this->Userphonenumber;
    }

    public function setUserphonenumber(string $Userphonenumber): self
    {
        $this->Userphonenumber = $Userphonenumber;

        return $this;
    }

    public function getUserdepartment(): ?Userdepartment
    {
        return $this->userdepartment;
    }

    public function setUserdepartment(?Userdepartment $userdepartment): self
    {
        $this->userdepartment = $userdepartment;

        return $this;
    }
}

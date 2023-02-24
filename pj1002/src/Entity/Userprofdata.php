<?php

namespace App\Entity;

use App\Repository\UserprofdataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserprofdataRepository::class)
 */
class Userprofdata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable20::class, inversedBy="userprofdata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userskill;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userrole;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userexp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable20
    {
        return $this->userid;
    }

    public function setUserid(Usertable20 $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUserskill(): ?string
    {
        return $this->Userskill;
    }

    public function setUserskill(string $Userskill): self
    {
        $this->Userskill = $Userskill;

        return $this;
    }

    public function getUserrole(): ?string
    {
        return $this->Userrole;
    }

    public function setUserrole(string $Userrole): self
    {
        $this->Userrole = $Userrole;

        return $this;
    }

    public function getUserexp(): ?string
    {
        return $this->Userexp;
    }

    public function setUserexp(string $Userexp): self
    {
        $this->Userexp = $Userexp;

        return $this;
    }
}

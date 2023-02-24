<?php

namespace App\Entity;

use App\Repository\UserprofessionaldataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserprofessionaldataRepository::class)
 */
class Userprofessionaldata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable6::class, inversedBy="userprofessionaldata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userexp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userrole;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userskill;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable6
    {
        return $this->userid;
    }

    public function setUserid(Usertable6 $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUserexp(): ?string
    {
        return $this->userexp;
    }

    public function setUserexp(string $userexp): self
    {
        $this->userexp = $userexp;

        return $this;
    }

    public function getUserrole(): ?string
    {
        return $this->userrole;
    }

    public function setUserrole(string $userrole): self
    {
        $this->userrole = $userrole;

        return $this;
    }

    public function getUserskill(): ?string
    {
        return $this->userskill;
    }

    public function setUserskill(string $userskill): self
    {
        $this->userskill = $userskill;

        return $this;
    }
}

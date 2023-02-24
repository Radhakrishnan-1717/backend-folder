<?php

namespace App\Entity;

use App\Repository\UserpersonaldataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserpersonaldataRepository::class)
 */
class Userpersonaldata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable5::class, inversedBy="userroles", cascade={"persist", "remove"})
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userrole;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userexp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable5
    {
        return $this->userid;
    }

    public function setUserid(?Usertable5 $userid): self
    {
        $this->userid = $userid;

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

    public function getUserexp(): ?string
    {
        return $this->userexp;
    }

    public function setUserexp(string $userexp): self
    {
        $this->userexp = $userexp;

        return $this;
    }
}

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
     * @ORM\OneToOne(targetEntity=Usertable6::class, inversedBy="userpersonaldata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userdob;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usermaritalstatus;

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

    public function getUserdob(): ?string
    {
        return $this->userdob;
    }

    public function setUserdob(string $userdob): self
    {
        $this->userdob = $userdob;

        return $this;
    }

    public function isUsermaritalstatus(): ?bool
    {
        return $this->usermaritalstatus;
    }

    public function setUsermaritalstatus(bool $usermaritalstatus): self
    {
        $this->usermaritalstatus = $usermaritalstatus;

        return $this;
    }
}

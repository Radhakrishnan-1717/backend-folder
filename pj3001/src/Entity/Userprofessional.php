<?php

namespace App\Entity;

use App\Repository\UserprofessionalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserprofessionalRepository::class)
 */
class Userprofessional
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable5::class, inversedBy="userdob", cascade={"persist", "remove"})
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
    private $userrmaritalstatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable5
    {
        return $this->userid;
    }

    public function setUserid(Usertable5 $userid): self
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

    public function isUserrmaritalstatus(): ?bool
    {
        return $this->userrmaritalstatus;
    }

    public function setUserrmaritalstatus(bool $userrmaritalstatus): self
    {
        $this->userrmaritalstatus = $userrmaritalstatus;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\UserprodataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserprodataRepository::class)
 */
class Userprodata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable8::class, inversedBy="userprodata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userskill;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable8
    {
        return $this->userid;
    }

    public function setUserid(Usertable8 $userid): self
    {
        $this->userid = $userid;

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

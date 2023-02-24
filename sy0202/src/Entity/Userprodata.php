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
     * @ORM\OneToOne(targetEntity=Usertable9::class, inversedBy="userprodata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable9
    {
        return $this->userid;
    }

    public function setUserid(Usertable9 $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUserage(): ?string
    {
        return $this->userage;
    }

    public function setUserage(string $userage): self
    {
        $this->userage = $userage;

        return $this;
    }
}

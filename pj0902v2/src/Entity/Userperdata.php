<?php

namespace App\Entity;

use App\Repository\UserperdataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserperdataRepository::class)
 */
class Userperdata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable19::class, inversedBy="userperdata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userfathername;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Usermothername;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable19
    {
        return $this->Userid;
    }

    public function setUserid(Usertable19 $Userid): self
    {
        $this->Userid = $Userid;

        return $this;
    }

    public function getUserfathername(): ?string
    {
        return $this->Userfathername;
    }

    public function setUserfathername(string $Userfathername): self
    {
        $this->Userfathername = $Userfathername;

        return $this;
    }

    public function getUsermothername(): ?string
    {
        return $this->Usermothername;
    }

    public function setUsermothername(string $Usermothername): self
    {
        $this->Usermothername = $Usermothername;

        return $this;
    }
}

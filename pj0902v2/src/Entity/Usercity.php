<?php

namespace App\Entity;

use App\Repository\UsercityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsercityRepository::class)
 */
class Usercity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable19::class, inversedBy="usercity", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userstate;

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

    public function getUserstate(): ?string
    {
        return $this->Userstate;
    }

    public function setUserstate(string $Userstate): self
    {
        $this->Userstate = $Userstate;

        return $this;
    }
}

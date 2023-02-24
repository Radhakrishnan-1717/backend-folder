<?php

namespace App\Entity;

use App\Repository\UservideoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UservideoRepository::class)
 */
class Uservideo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Usertable8::class, inversedBy="uservideos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uservideotitle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable8
    {
        return $this->userid;
    }

    public function setUserid(?Usertable8 $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUservideotitle(): ?string
    {
        return $this->uservideotitle;
    }

    public function setUservideotitle(string $uservideotitle): self
    {
        $this->uservideotitle = $uservideotitle;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\Usertable11Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable11Repository::class)
 */
class Usertable11
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userage;

    /**
     * @ORM\ManyToOne(targetEntity=Uservideo::class, inversedBy="userid")
     * @ORM\JoinColumn(nullable=false)
     */
    private $uservideo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getUservideo(): ?Uservideo
    {
        return $this->uservideo;
    }

    public function setUservideo(?Uservideo $uservideo): self
    {
        $this->uservideo = $uservideo;

        return $this;
    }
}

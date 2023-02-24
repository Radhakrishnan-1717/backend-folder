<?php

namespace App\Entity;

use App\Repository\UsertableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsertableRepository::class)
 */
class Usertable
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
    private $useremailid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userphonenumber;

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

    public function getUseremailid(): ?string
    {
        return $this->useremailid;
    }

    public function setUseremailid(string $useremailid): self
    {
        $this->useremailid = $useremailid;

        return $this;
    }

    public function getUserphonenumber(): ?string
    {
        return $this->userphonenumber;
    }

    public function setUserphonenumber(string $userphonenumber): self
    {
        $this->userphonenumber = $userphonenumber;

        return $this;
    }
}

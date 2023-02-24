<?php

namespace App\Entity;

use App\Repository\Usertable15Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable15Repository::class)
 */
class Usertable15
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

    public function getUserage(): ?string
    {
        return $this->userage;
    }

    public function setUserage(string $userage): self
    {
        $this->userage = $userage;

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

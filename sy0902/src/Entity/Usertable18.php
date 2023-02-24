<?php

namespace App\Entity;

use App\Repository\Usertable18Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable18Repository::class)
 */
class Usertable18
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
    private $usernumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userphoto;

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

    public function getUsernumber(): ?string
    {
        return $this->usernumber;
    }

    public function setUsernumber(string $usernumber): self
    {
        $this->usernumber = $usernumber;

        return $this;
    }

    public function getUserphoto(): ?string
    {
        return $this->userphoto;
    }

    public function setUserphoto(string $userphoto): self
    {
        $this->userphoto = $userphoto;

        return $this;
    }
}

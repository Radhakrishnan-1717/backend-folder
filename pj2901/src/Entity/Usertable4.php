<?php

namespace App\Entity;

use App\Repository\Usertable4Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable4Repository::class)
 */
class Usertable4
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
    private $usernumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userplace;

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

    public function getUsernumber(): ?string
    {
        return $this->usernumber;
    }

    public function setUsernumber(string $usernumber): self
    {
        $this->usernumber = $usernumber;

        return $this;
    }

    public function getUserplace(): ?string
    {
        return $this->userplace;
    }

    public function setUserplace(string $userplace): self
    {
        $this->userplace = $userplace;

        return $this;
    }
}

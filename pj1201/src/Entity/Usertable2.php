<?php

namespace App\Entity;

use App\Repository\Usertable2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable2Repository::class)
 */
class Usertable2
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
    private $userphonenumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userlocation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usermail;

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

    public function getUserphonenumber(): ?string
    {
        return $this->userphonenumber;
    }

    public function setUserphonenumber(string $userphonenumber): self
    {
        $this->userphonenumber = $userphonenumber;

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

    public function getUserlocation(): ?string
    {
        return $this->userlocation;
    }

    public function setUserlocation(string $userlocation): self
    {
        $this->userlocation = $userlocation;

        return $this;
    }

    public function getUsermail(): ?string
    {
        return $this->usermail;
    }

    public function setUsermail(string $usermail): self
    {
        $this->usermail = $usermail;

        return $this;
    }
}

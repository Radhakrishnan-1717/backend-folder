<?php

namespace App\Entity;

use App\Repository\UserdbRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserdbRepository::class)
 */
class Userdb
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
    private $userfirstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usersecondname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userlastname;

    /**
     * @ORM\Column(type="integer")
     */
    private $userage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userlocation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserfirstname(): ?string
    {
        return $this->userfirstname;
    }

    public function setUserfirstname(string $userfirstname): self
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    public function getUsersecondname(): ?string
    {
        return $this->usersecondname;
    }

    public function setUsersecondname(string $usersecondname): self
    {
        $this->usersecondname = $usersecondname;

        return $this;
    }

    public function getUserlastname(): ?string
    {
        return $this->userlastname;
    }

    public function setUserlastname(string $userlastname): self
    {
        $this->userlastname = $userlastname;

        return $this;
    }

    public function getUserage(): ?int
    {
        return $this->userage;
    }

    public function setUserage(int $userage): self
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
}

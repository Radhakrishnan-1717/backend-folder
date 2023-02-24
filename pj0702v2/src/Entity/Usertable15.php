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
    private $randomname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $randomage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $randomplace;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRandomname(): ?string
    {
        return $this->randomname;
    }

    public function setRandomname(string $randomname): self
    {
        $this->randomname = $randomname;

        return $this;
    }

    public function getRandomage(): ?string
    {
        return $this->randomage;
    }

    public function setRandomage(string $randomage): self
    {
        $this->randomage = $randomage;

        return $this;
    }

    public function getRandomplace(): ?string
    {
        return $this->randomplace;
    }

    public function setRandomplace(string $randomplace): self
    {
        $this->randomplace = $randomplace;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\Usertable17Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable17Repository::class)
 */
class Usertable17
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
    private $customername;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customerage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customerphonenumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomername(): ?string
    {
        return $this->customername;
    }

    public function setCustomername(string $customername): self
    {
        $this->customername = $customername;

        return $this;
    }

    public function getCustomerage(): ?string
    {
        return $this->customerage;
    }

    public function setCustomerage(string $customerage): self
    {
        $this->customerage = $customerage;

        return $this;
    }

    public function getCustomerphonenumber(): ?string
    {
        return $this->customerphonenumber;
    }

    public function setCustomerphonenumber(string $customerphonenumber): self
    {
        $this->customerphonenumber = $customerphonenumber;

        return $this;
    }
}

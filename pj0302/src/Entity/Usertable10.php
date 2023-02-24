<?php

namespace App\Entity;

use App\Repository\Usertable10Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable10Repository::class)
 */
class Usertable10
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
     * @ORM\ManyToMany(targetEntity=Userproject::class, mappedBy="userid")
     */
    private $userprojects;

    public function __construct()
    {
        $this->userprojects = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Userproject>
     */
    public function getUserprojects(): Collection
    {
        return $this->userprojects;
    }

    public function addUserproject(Userproject $userproject): self
    {
        if (!$this->userprojects->contains($userproject)) {
            $this->userprojects[] = $userproject;
            $userproject->addUserid($this);
        }

        return $this;
    }

    public function removeUserproject(Userproject $userproject): self
    {
        if ($this->userprojects->removeElement($userproject)) {
            $userproject->removeUserid($this);
        }

        return $this;
    }
}

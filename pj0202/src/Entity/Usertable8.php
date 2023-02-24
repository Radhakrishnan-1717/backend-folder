<?php

namespace App\Entity;

use App\Repository\Usertable8Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable8Repository::class)
 */
class Usertable8
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
     * @ORM\Column(type="integer")
     */
    private $userage;

    /**
     * @ORM\OneToOne(targetEntity=Userprodata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userprodata;

    /**
     * @ORM\OneToMany(targetEntity=Uservideo::class, mappedBy="userid", orphanRemoval=true)
     */
    private $uservideos;

    public function __construct()
    {
        $this->uservideos = new ArrayCollection();
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

    public function getUserage(): ?int
    {
        return $this->userage;
    }

    public function setUserage(int $userage): self
    {
        $this->userage = $userage;

        return $this;
    }

    public function getUserprodata(): ?Userprodata
    {
        return $this->userprodata;
    }

    public function setUserprodata(Userprodata $userprodata): self
    {
        // set the owning side of the relation if necessary
        if ($userprodata->getUserid() !== $this) {
            $userprodata->setUserid($this);
        }

        $this->userprodata = $userprodata;

        return $this;
    }

    /**
     * @return Collection<int, Uservideo>
     */
    public function getUservideos(): Collection
    {
        return $this->uservideos;
    }

    public function addUservideo(Uservideo $uservideo): self
    {
        if (!$this->uservideos->contains($uservideo)) {
            $this->uservideos[] = $uservideo;
            $uservideo->setUserid($this);
        }

        return $this;
    }

    public function removeUservideo(Uservideo $uservideo): self
    {
        if ($this->uservideos->removeElement($uservideo)) {
            // set the owning side to null (unless already changed)
            if ($uservideo->getUserid() === $this) {
                $uservideo->setUserid(null);
            }
        }

        return $this;
    }
}

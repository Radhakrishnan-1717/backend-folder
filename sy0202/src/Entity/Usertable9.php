<?php

namespace App\Entity;

use App\Repository\Usertable9Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable9Repository::class)
 */
class Usertable9
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
     * @ORM\OneToOne(targetEntity=Userprodata::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $userprodata;

    /**
     * @ORM\OneToMany(targetEntity=Uservideo::class, mappedBy="userid", orphanRemoval=true)
     */
    private $video;

    public function __construct()
    {
        $this->video = new ArrayCollection();
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
    public function getVideo(): Collection
    {
        return $this->video;
    }

    public function addVideo(Uservideo $video): self
    {
        if (!$this->video->contains($video)) {
            $this->video[] = $video;
            $video->setUserid($this);
        }

        return $this;
    }

    public function removeVideo(Uservideo $video): self
    {
        if ($this->video->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getUserid() === $this) {
                $video->setUserid(null);
            }
        }

        return $this;
    }
}

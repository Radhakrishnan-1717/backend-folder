<?php

namespace App\Entity;

use App\Repository\UservideoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UservideoRepository::class)
 */
class Uservideo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Usertable11::class, mappedBy="uservideo", orphanRemoval=true)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uservideotitle;

    public function __construct()
    {
        $this->userid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Usertable11>
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Usertable11 $userid): self
    {
        if (!$this->userid->contains($userid)) {
            $this->userid[] = $userid;
            $userid->setUservideo($this);
        }

        return $this;
    }

    public function removeUserid(Usertable11 $userid): self
    {
        if ($this->userid->removeElement($userid)) {
            // set the owning side to null (unless already changed)
            if ($userid->getUservideo() === $this) {
                $userid->setUservideo(null);
            }
        }

        return $this;
    }

    public function getUservideotitle(): ?string
    {
        return $this->uservideotitle;
    }

    public function setUservideotitle(string $uservideotitle): self
    {
        $this->uservideotitle = $uservideotitle;

        return $this;
    }
}

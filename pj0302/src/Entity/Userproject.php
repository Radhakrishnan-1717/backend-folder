<?php

namespace App\Entity;

use App\Repository\UserprojectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserprojectRepository::class)
 */
class Userproject
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Usertable10::class, inversedBy="userprojects")
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userprojecttitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userprojectdesc;

    public function __construct()
    {
        $this->userid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Usertable10>
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Usertable10 $userid): self
    {
        if (!$this->userid->contains($userid)) {
            $this->userid[] = $userid;
        }

        return $this;
    }

    public function removeUserid(Usertable10 $userid): self
    {
        $this->userid->removeElement($userid);

        return $this;
    }

    public function getUserprojecttitle(): ?string
    {
        return $this->userprojecttitle;
    }

    public function setUserprojecttitle(string $userprojecttitle): self
    {
        $this->userprojecttitle = $userprojecttitle;

        return $this;
    }

    public function getUserprojectdesc(): ?string
    {
        return $this->userprojectdesc;
    }

    public function setUserprojectdesc(string $userprojectdesc): self
    {
        $this->userprojectdesc = $userprojectdesc;

        return $this;
    }
}

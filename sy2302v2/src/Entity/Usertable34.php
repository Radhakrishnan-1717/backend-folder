<?php

namespace App\Entity;

use App\Repository\Usertable34Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable34Repository::class)
 */
class Usertable34
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
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Useremailid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Userphonenumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getUseremailid(): ?string
    {
        return $this->Useremailid;
    }

    public function setUseremailid(string $Useremailid): self
    {
        $this->Useremailid = $Useremailid;

        return $this;
    }

    public function getUserphonenumber(): ?string
    {
        return $this->Userphonenumber;
    }

    public function setUserphonenumber(string $Userphonenumber): self
    {
        $this->Userphonenumber = $Userphonenumber;

        return $this;
    }
}

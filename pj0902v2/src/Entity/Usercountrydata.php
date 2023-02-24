<?php

namespace App\Entity;

use App\Repository\UsercountrydataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsercountrydataRepository::class)
 */
class Usercountrydata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable19::class, inversedBy="usercountrydata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Usercounty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?Usertable19
    {
        return $this->Userid;
    }

    public function setUserid(Usertable19 $Userid): self
    {
        $this->Userid = $Userid;

        return $this;
    }

    public function getUsercounty(): ?string
    {
        return $this->Usercounty;
    }

    public function setUsercounty(string $Usercounty): self
    {
        $this->Usercounty = $Usercounty;

        return $this;
    }
}

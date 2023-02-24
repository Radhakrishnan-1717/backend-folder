<?php

namespace App\Entity;

use App\Repository\CustomerpersdataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerpersdataRepository::class)
 */
class Customerpersdata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable7::class, inversedBy="customerpersdata", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $customerid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customerrole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerid(): ?Usertable7
    {
        return $this->customerid;
    }

    public function setCustomerid(Usertable7 $customerid): self
    {
        $this->customerid = $customerid;

        return $this;
    }

    public function getCustomerrole(): ?string
    {
        return $this->customerrole;
    }

    public function setCustomerrole(string $customerrole): self
    {
        $this->customerrole = $customerrole;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\CustomerprofdataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerprofdataRepository::class)
 */
class Customerprofdata
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Usertable7::class, inversedBy="customerprofdata", cascade={"persist", "remove"})
     */
    private $customerid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customermaritalstatus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customerdob;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerid(): ?Usertable7
    {
        return $this->customerid;
    }

    public function setCustomerid(?Usertable7 $customerid): self
    {
        $this->customerid = $customerid;

        return $this;
    }

    public function getCustomermaritalstatus(): ?string
    {
        return $this->customermaritalstatus;
    }

    public function setCustomermaritalstatus(string $customermaritalstatus): self
    {
        $this->customermaritalstatus = $customermaritalstatus;

        return $this;
    }

    public function getCustomerdob(): ?string
    {
        return $this->customerdob;
    }

    public function setCustomerdob(string $customerdob): self
    {
        $this->customerdob = $customerdob;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\Usertable7Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Usertable7Repository::class)
 */
class Usertable7
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
    private $customernumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customergender;

    /**
     * @ORM\OneToOne(targetEntity=Customerprofdata::class, mappedBy="customerid", cascade={"persist", "remove"})
     */
    private $customerprofdata;

    /**
     * @ORM\OneToOne(targetEntity=Customerpersdata::class, mappedBy="customerid", cascade={"persist", "remove"})
     */
    private $customerpersdata;

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

    public function getCustomernumber(): ?string
    {
        return $this->customernumber;
    }

    public function setCustomernumber(string $customernumber): self
    {
        $this->customernumber = $customernumber;

        return $this;
    }

    public function getCustomergender(): ?string
    {
        return $this->customergender;
    }

    public function setCustomergender(string $customergender): self
    {
        $this->customergender = $customergender;

        return $this;
    }

    public function getCustomerprofdata(): ?Customerprofdata
    {
        return $this->customerprofdata;
    }

    public function setCustomerprofdata(?Customerprofdata $customerprofdata): self
    {
        // unset the owning side of the relation if necessary
        if ($customerprofdata === null && $this->customerprofdata !== null) {
            $this->customerprofdata->setCustomerid(null);
        }

        // set the owning side of the relation if necessary
        if ($customerprofdata !== null && $customerprofdata->getCustomerid() !== $this) {
            $customerprofdata->setCustomerid($this);
        }

        $this->customerprofdata = $customerprofdata;

        return $this;
    }

    public function getCustomerpersdata(): ?Customerpersdata
    {
        return $this->customerpersdata;
    }

    public function setCustomerpersdata(Customerpersdata $customerpersdata): self
    {
        // set the owning side of the relation if necessary
        if ($customerpersdata->getCustomerid() !== $this) {
            $customerpersdata->setCustomerid($this);
        }

        $this->customerpersdata = $customerpersdata;

        return $this;
    }
}

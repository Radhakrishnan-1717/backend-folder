<?php

namespace App\Entity;

use App\Repository\MoviedetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MoviedetailsRepository::class)
 */
class Moviedetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Movie::class, inversedBy="moviedetails", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Movieid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Director;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Budget;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Box_office;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieid(): ?Movie
    {
        return $this->Movieid;
    }

    public function setMovieid(Movie $Movieid): self
    {
        $this->Movieid = $Movieid;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->Director;
    }

    public function setDirector(string $Director): self
    {
        $this->Director = $Director;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->Budget;
    }

    public function setBudget(string $Budget): self
    {
        $this->Budget = $Budget;

        return $this;
    }

    public function getBoxOffice(): ?string
    {
        return $this->Box_office;
    }

    public function setBoxOffice(string $Box_office): self
    {
        $this->Box_office = $Box_office;

        return $this;
    }
}

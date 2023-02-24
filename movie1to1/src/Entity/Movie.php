<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 */
class Movie
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
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Release_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Language;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Country;

    /**
     * @ORM\OneToOne(targetEntity=Moviedetails::class, mappedBy="Movieid", cascade={"persist", "remove"})
     */
    private $moviedetails;

    /**
     * @ORM\OneToMany(targetEntity=Moviesongs::class, mappedBy="Songid", orphanRemoval=true)
     */
    private $moviesongs;

    /**
     * @ORM\OneToMany(targetEntity=Moviedepartment::class, mappedBy="movie", orphanRemoval=true)
     */
    private $Movieid;

    public function __construct()
    {
        $this->moviesongs = new ArrayCollection();
        $this->Movieid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getReleaseDate(): ?string
    {
        return $this->Release_date;
    }

    public function setReleaseDate(string $Release_date): self
    {
        $this->Release_date = $Release_date;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    public function setLanguage(string $Language): self
    {
        $this->Language = $Language;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getMoviedetails(): ?Moviedetails
    {
        return $this->moviedetails;
    }

    public function setMoviedetails(Moviedetails $moviedetails): self
    {
        // set the owning side of the relation if necessary
        if ($moviedetails->getMovieid() !== $this) {
            $moviedetails->setMovieid($this);
        }

        $this->moviedetails = $moviedetails;

        return $this;
    }

    /**
     * @return Collection<int, Moviesongs>
     */
    public function getMoviesongs(): Collection
    {
        return $this->moviesongs;
    }

    public function addMoviesong(Moviesongs $moviesong): self
    {
        if (!$this->moviesongs->contains($moviesong)) {
            $this->moviesongs[] = $moviesong;
            $moviesong->setSongid($this);
        }

        return $this;
    }

    public function removeMoviesong(Moviesongs $moviesong): self
    {
        if ($this->moviesongs->removeElement($moviesong)) {
            // set the owning side to null (unless already changed)
            if ($moviesong->getSongid() === $this) {
                $moviesong->setSongid(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Moviedepartment>
     */
    public function getMovieid(): Collection
    {
        return $this->Movieid;
    }

    public function addMovieid(Moviedepartment $movieid): self
    {
        if (!$this->Movieid->contains($movieid)) {
            $this->Movieid[] = $movieid;
            $movieid->setMovie($this);
        }

        return $this;
    }

    public function removeMovieid(Moviedepartment $movieid): self
    {
        if ($this->Movieid->removeElement($movieid)) {
            // set the owning side to null (unless already changed)
            if ($movieid->getMovie() === $this) {
                $movieid->setMovie(null);
            }
        }

        return $this;
    }
}

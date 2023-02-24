<?php

namespace App\Entity;

use App\Repository\MoviesongsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MoviesongsRepository::class)
 */
class Moviesongs
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
    private $Songname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Singer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Songruntime;

    /**
     * @ORM\ManyToOne(targetEntity=Movie::class, inversedBy="moviesongs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Songid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSongname(): ?string
    {
        return $this->Songname;
    }

    public function setSongname(string $Songname): self
    {
        $this->Songname = $Songname;

        return $this;
    }

    public function getSinger(): ?string
    {
        return $this->Singer;
    }

    public function setSinger(string $Singer): self
    {
        $this->Singer = $Singer;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getSongruntime(): ?string
    {
        return $this->Songruntime;
    }

    public function setSongruntime(string $Songruntime): self
    {
        $this->Songruntime = $Songruntime;

        return $this;
    }

    public function getSongid(): ?Movie
    {
        return $this->Songid;
    }

    public function setSongid(?Movie $Songid): self
    {
        $this->Songid = $Songid;

        return $this;
    }
}

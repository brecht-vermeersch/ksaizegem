<?php

namespace App\Entity;

use App\Repository\GeledingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeledingRepository::class)]
class Geleding
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'smallint')]
    private $rangschikking;

    #[ORM\Column(type: 'string', length: 255)]
    private $naam;

    #[ORM\Column(type: 'string', length: 255)]
    private $afkorting;

    #[ORM\Column(type: 'string', length: 255)]
    private $leeftijdsgroep;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $gsm;

    #[ORM\Column(type: 'text')]
    private $beschrijving;

    #[ORM\Column(type: 'string', length: 255)]
    private $icoon;

    #[ORM\Column(type: 'string', length: 255)]
    private $foto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRangschikking(): ?int
    {
        return $this->rangschikking;
    }

    public function setRangschikking(int $rangschikking): self
    {
        $this->rangschikking = $rangschikking;

        return $this;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getAfkorting(): ?string
    {
        return $this->afkorting;
    }

    public function setAfkorting(string $afkorting): self
    {
        $this->afkorting = $afkorting;

        return $this;
    }

    public function getLeeftijdsgroep(): ?string
    {
        return $this->leeftijdsgroep;
    }

    public function setLeeftijdsgroep(string $leeftijdsgroep): self
    {
        $this->leeftijdsgroep = $leeftijdsgroep;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGsm(): ?string
    {
        return $this->gsm;
    }

    public function setGsm(string $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getBeschrijving(): ?string
    {
        return $this->beschrijving;
    }

    public function setBeschrijving(string $beschrijving): self
    {
        $this->beschrijving = $beschrijving;

        return $this;
    }

    public function getIcoon(): ?string
    {
        return $this->icoon;
    }

    public function setIcoon(string $icoon): self
    {
        $this->icoon = $icoon;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }
}

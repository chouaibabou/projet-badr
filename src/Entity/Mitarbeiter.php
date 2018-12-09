<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MitarbeiterRepository")
 */
class Mitarbeiter
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nachname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vorname;

    /**
     * @ORM\Column(type="integer")
     */
    private $geburtsdatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefon_nummer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNachname(): ?string
    {
        return $this->nachname;
    }

    public function setNachname(string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getGeburtsdatum(): ?int
    {
        return $this->geburtsdatum;
    }

    public function setGeburtsdatum(int $geburtsdatum): self
    {
        $this->geburtsdatum = $geburtsdatum;

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

    public function getTelefonNummer(): ?string
    {
        return $this->telefon_nummer;
    }

    public function setTelefonNummer(string $telefon_nummer): self
    {
        $this->telefon_nummer = $telefon_nummer;

        return $this;
    }
}

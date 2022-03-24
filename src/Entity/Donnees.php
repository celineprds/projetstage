<?php

namespace App\Entity;

use App\Repository\DonneesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DonneesRepository::class)
 */
class Donnees
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timestart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timeend;

    /**
     * @ORM\Column(type="integer")
     */
    private $page;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getTimestart(): ?\DateTimeInterface
    {
        return $this->timestart;
    }

    public function setTimestart(\DateTimeInterface $timestart): self
    {
        $this->timestart = $timestart;

        return $this;
    }

    public function getTimeend(): ?\DateTimeInterface
    {
        return $this->timeend;
    }

    public function setTimeend(\DateTimeInterface $timeend): self
    {
        $this->timeend = $timeend;

        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }
}

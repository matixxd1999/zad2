<?php

namespace App\Entity;

use App\Repository\MswRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MswRepository::class)]
class Msw
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $rcp;

    #[ORM\Column(type: 'string', length: 20)]
    private $inicial;

    #[ORM\Column(type: 'integer')]
    private $ilosc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRcp(): ?int
    {
        return $this->rcp;
    }

    public function setRcp(int $rcp): self
    {
        $this->rcp = $rcp;

        return $this;
    }

    public function getInicial(): ?string
    {
        return $this->inicial;
    }

    public function setInicial(string $inicial): self
    {
        $this->inicial = $inicial;

        return $this;
    }

    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }

    public function setIlosc(int $ilosc): self
    {
        $this->ilosc = $ilosc;

        return $this;
    }
}

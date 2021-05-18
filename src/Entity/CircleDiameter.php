<?php

namespace App\Entity;

use App\Repository\CircleDiameterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CircleDiameterRepository::class)
 */
class CircleDiameter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $r;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $result;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getR(): ?float
    {
        return $this->r;
    }

    public function setR(?float $r): self
    {
        $this->r = $r;

        return $this;
    }

    public function getResult(): ?float
    {
        return $this->result;
    }

    public function setResult(?float $result): self
    {
        $this->result = $result;

        return $this;
    }
}

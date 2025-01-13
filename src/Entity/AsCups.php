<?php

namespace App\Entity;

use App\Repository\AsCupsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsCupsRepository::class)]
class AsCups
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seccion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $capitulo = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $codigo_cups = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descripcion_cups = null;

    #[ORM\OneToMany(mappedBy: "cups", targetEntity: AsConsultasProcedimientos::class)]
    private Collection $consultasProcedimientos;

    public function __construct()
    {
        $this->consultasProcedimientos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeccion(): ?string
    {
        return $this->seccion;
    }

    public function setSeccion(?string $seccion): static
    {
        $this->seccion = $seccion;

        return $this;
    }

    public function getCapitulo(): ?string
    {
        return $this->capitulo;
    }

    public function setCapitulo(?string $capitulo): static
    {
        $this->capitulo = $capitulo;

        return $this;
    }

    public function getCodigoCups(): ?string
    {
        return $this->codigo_cups;
    }

    public function setCodigoCups(?string $codigo_cups): static
    {
        $this->codigo_cups = $codigo_cups;

        return $this;
    }

    public function getConsultasProcedimientos(): Collection
    {
        return $this->consultasProcedimientos;
    }

    public function addConsultaProcedimiento(AsConsultasProcedimientos $consulta): self
    {
        if (!$this->consultasProcedimientos->contains($consulta)) {
            $this->consultasProcedimientos->add($consulta);
            $consulta->setCups($this);
        }
        return $this;
    }

    public function removeConsultaProcedimiento(AsConsultasProcedimientos $consulta): self
    {
        if ($this->consultasProcedimientos->removeElement($consulta)) {
            if ($consulta->getCups() === $this) {
                $consulta->setCups(null);
            }
        }
        return $this;
    }

    public function getDescripcionCups(): ?string
    {
        return $this->descripcion_cups;
    }

    public function setDescripcionCups(?string $descripcion_cups): static
    {
        $this->descripcion_cups = $descripcion_cups;

        return $this;
    }
}

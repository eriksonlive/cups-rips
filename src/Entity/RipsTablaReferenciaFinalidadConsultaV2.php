<?php

namespace App\Entity;

use App\Repository\RipsTablaReferenciaFinalidadConsultaV2Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RipsTablaReferenciaFinalidadConsultaV2Repository::class)]
class RipsTablaReferenciaFinalidadConsultaV2
{
    #[ORM\Id]
    #[ORM\Column(length: 250)]
    private ?string $codigo = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $nombre = null;

    #[ORM\OneToMany(mappedBy: "finalidad", targetEntity: AsConsultasProcedimientos::class)]
    private Collection $consultasProcedimientos;

    public function __construct()
    {
        $this->consultasProcedimientos = new ArrayCollection();
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): static
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): static
    {
        $this->nombre = $nombre;

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
            $consulta->setFinalidad($this);
        }
        return $this;
    }

    public function removeConsultaProcedimiento(AsConsultasProcedimientos $consulta): self
    {
        if ($this->consultasProcedimientos->removeElement($consulta)) {
            if ($consulta->getFinalidad() === $this) {
                $consulta->setFinalidad(null);
            }
        }
        return $this;
    }
}

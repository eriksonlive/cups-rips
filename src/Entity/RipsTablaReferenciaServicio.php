<?php

namespace App\Entity;

use App\Repository\RipsTablaReferenciaServicioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RipsTablaReferenciaServicioRepository::class)]
class RipsTablaReferenciaServicio
{
    #[ORM\Id]
    #[ORM\Column(length: 250)]
    private ?string $codigo = null;

    #[ORM\Column(length: 250)]
    private ?string $nombre = null;

    #[ORM\Column(length: 250)]
    private ?string $grupo_codigo = null;

    #[ORM\Column(length: 250)]
    private ?string $grupo_nombre = null;

    #[ORM\OneToMany(mappedBy: "servicio_rips_code", targetEntity: AsConsultasProcedimientos::class)]
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

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getGrupoCodigo(): ?string
    {
        return $this->grupo_codigo;
    }

    public function setGrupoCodigo(string $grupo_codigo): static
    {
        $this->grupo_codigo = $grupo_codigo;

        return $this;
    }

    public function getGrupoNombre(): ?string
    {
        return $this->grupo_nombre;
    }

    public function setGrupoNombre(string $grupo_nombre): static
    {
        $this->grupo_nombre = $grupo_nombre;

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
            $consulta->setServicioRipsCode($this);
        }
        return $this;
    }

    public function removeConsultaProcedimiento(AsConsultasProcedimientos $consulta): self
    {
        if ($this->consultasProcedimientos->removeElement($consulta)) {
            if ($consulta->getServicioRipsCode() === $this) {
                $consulta->setServicioRipsCode(null);
            }
        }
        return $this;
    }
}

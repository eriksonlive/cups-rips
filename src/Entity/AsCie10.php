<?php

namespace App\Entity;

use App\Repository\AsCie10Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsCie10Repository::class)]
class AsCie10
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "bigint")]
    private ?int $id = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $cie_10 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre_ingles = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sistema = null;

    #[ORM\OneToMany(mappedBy: "diagnostico_defaults", targetEntity: AsConsultasProcedimientos::class)]
    private Collection $consultasProcedimientos;

    public function __construct()
    {
        $this->consultasProcedimientos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCie10(): ?string
    {
        return $this->cie_10;
    }

    public function setCie10(?string $cie_10): static
    {
        $this->cie_10 = $cie_10;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getNombreIngles(): ?string
    {
        return $this->nombre_ingles;
    }

    public function setNombreIngles(?string $nombre_ingles): static
    {
        $this->nombre_ingles = $nombre_ingles;

        return $this;
    }

    public function getSistema(): ?string
    {
        return $this->sistema;
    }

    public function setSistema(?string $sistema): static
    {
        $this->sistema = $sistema;

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
            $consulta->setDiagnosticoDefaults($this);
        }
        return $this;
    }

    public function removeConsultaProcedimiento(AsConsultasProcedimientos $consulta): self
    {
        if ($this->consultasProcedimientos->removeElement($consulta)) {
            if ($consulta->getDiagnosticoDefaults() === $this) {
                $consulta->setDiagnosticoDefaults(null);
            }
        }
        return $this;
    }
}

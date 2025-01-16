<?php

namespace App\Entity;

use App\Repository\AsConsultasProcedimientosRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AsConsultasProcedimientosRepository::class)]
#[ORM\HasLifecycleCallbacks]
class AsConsultasProcedimientos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[Assert\NotBlank(["message" => "El campo CUPS no puede estar vacío."])]
    #[ORM\ManyToOne(targetEntity: AsCups::class, fetch: "EAGER", inversedBy: 'consultasProcedimientos')]
    #[ORM\JoinColumn(name: "cups", referencedColumnName: "id", nullable: false, onDelete: "CASCADE")]
    private ?AsCups $cups = null;

    #[Assert\NotBlank(["message" => "El campo Tipo Servicio no puede estar vacío."])]
    #[ORM\Column(length: 250, nullable: true)]
    private ?string $tipo_servicio = null;

    // #[Assert\NotBlank]
    #[ORM\Column(nullable: true)]
    private ?bool $informe_oportunidad = null;

    #[Assert\NotBlank(["message" => "El campo Tipo Cita no puede estar vacío."])]
    #[ORM\Column(nullable: true)]
    private ?int $tipo_cita = null;

    #[Assert\NotBlank(["message" => "El campo Diagnostico Defaults no puede estar vacío."])]
    #[ORM\ManyToOne(targetEntity: AsCie10::class, fetch: "EAGER", inversedBy: 'consultasProcedimientos')]
    #[ORM\JoinColumn(name: "diagnostico_defaults", referencedColumnName: "id", nullable: false, onDelete: "CASCADE")]
    private ?AsCie10 $diagnostico_defaults = null;

    #[Assert\NotBlank(["message" => "El campo Finalidad no puede estar vacío."])]
    #[ORM\ManyToOne(targetEntity: RipsTablaReferenciaFinalidadConsultaV2::class, fetch: 'EAGER', inversedBy: 'consultasProcedimientos')]
    #[ORM\JoinColumn(name: 'finalidad', referencedColumnName: 'codigo', nullable: true)]
    private ?RipsTablaReferenciaFinalidadConsultaV2 $finalidad = null;

    #[Assert\NotBlank(["message" => "El campo Causa Externa no puede estar vacío."])]
    #[ORM\ManyToOne(targetEntity: RipsTablaReferenciaCausaExternaV2::class, fetch: 'EAGER', inversedBy: 'consultasProcedimientos')]
    #[ORM\JoinColumn(name: 'causa_externa', referencedColumnName: 'codigo', nullable: true)]
    private ?RipsTablaReferenciaCausaExternaV2 $causa_externa = null;

    #[Assert\NotBlank(["message" => "El campo Codigo Servicio no puede estar vacío."])]
    #[ORM\ManyToOne(targetEntity: RipsTablaReferenciaServicio::class, fetch: "EAGER", inversedBy: 'consultasProcedimientos')]
    #[ORM\JoinColumn(name: "servicio_rips_code", referencedColumnName: "codigo", nullable: false, onDelete: "CASCADE")]
    private ?RipsTablaReferenciaServicio $servicio_rips_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $created_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $created_at = null;

    #[Assert\NotBlank(["message" => "El campo Tipo Diágnostico no puede estar vacío."])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tipo_diagnostico = null;

    public function hydrate(array $data): self
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCups(): ?AsCups
    {
        return $this->cups;
    }

    public function setCups(?AsCups $cups): self
    {
        $this->cups = $cups;
        return $this;
    }

    public function getTipoServicio(): ?string
    {
        return $this->tipo_servicio;
    }

    public function setTipoServicio(?string $tipo_servicio): static
    {
        $this->tipo_servicio = $tipo_servicio;

        return $this;
    }

    public function isInformeOportunidad(): ?bool
    {
        return $this->informe_oportunidad;
    }

    public function setInformeOportunidad(?bool $informe_oportunidad): static
    {
        $this->informe_oportunidad = $informe_oportunidad;

        return $this;
    }

    public function getTipoCita(): ?int
    {
        return $this->tipo_cita;
    }

    public function setTipoCita(?int $tipo_cita): static
    {
        $this->tipo_cita = $tipo_cita;

        return $this;
    }

    public function getDiagnosticoDefaults(): ?AsCie10
    {
        return $this->diagnostico_defaults;
    }

    public function setDiagnosticoDefaults(?AsCie10 $diagnostico_defaults): static
    {
        $this->diagnostico_defaults = $diagnostico_defaults;

        return $this;
    }

    public function getFinalidad(): ?RipsTablaReferenciaFinalidadConsultaV2
    {
        return $this->finalidad;
    }

    public function setFinalidad(?RipsTablaReferenciaFinalidadConsultaV2 $finalidad): static
    {
        $this->finalidad = $finalidad;

        return $this;
    }

    public function getCausaExterna(): ?RipsTablaReferenciaCausaExternaV2
    {
        return $this->causa_externa;
    }

    public function setCausaExterna(?RipsTablaReferenciaCausaExternaV2 $causa_externa): static
    {
        $this->causa_externa = $causa_externa;

        return $this;
    }

    public function getServicioRipsCode(): ?RipsTablaReferenciaServicio
    {
        return $this->servicio_rips_code;
    }

    public function setServicioRipsCode(?RipsTablaReferenciaServicio $servicio_rips_code): static
    {
        $this->servicio_rips_code = $servicio_rips_code;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    public function setCreatedBy(?string $created_by): static
    {
        $this->created_by = $created_by;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    #[ORM\PrePersist]
    public function setCreatedAt(): static
    {
        $this->created_at = new \DateTimeImmutable();

        return $this;
    }

    public function getTipoDiagnostico(): ?string
    {
        return $this->tipo_diagnostico;
    }

    public function setTipoDiagnostico(?string $tipo_diagnostico): static
    {
        $this->tipo_diagnostico = $tipo_diagnostico;

        return $this;
    }
}

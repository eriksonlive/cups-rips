<?php

namespace App\Service;

use App\Repository\AsConsultasProcedimientosRepository;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ValidationServices
{
    private ValidatorInterface $validator;
    private AsConsultasProcedimientosRepository $consultas;

    public function __construct(ValidatorInterface $validator, AsConsultasProcedimientosRepository $consultas)
    {
        $this->validator = $validator;
        $this->consultas = $consultas;
    }

    public function validateAndAssignRelations(
        object $entity,
        array $data,
        array $relations,
        array $simpleFields,
        ?int $currentId = null
    ) {

        if (isset($data['cups'])) {
            $existingRecord = $this->consultas->findOneBy(['cups' => $data['cups']]);
    
            // Verificamos si existe un registro diferente al actual con el mismo CUPS
            if ($existingRecord && $existingRecord->getId() !== $currentId) {
                return ['errors' => ['cups' => 'El CUPS ya está registrado en otro registro.']];
            }
        }

        // Iteramos sobre las relaciones
        foreach ($relations as $field => [$repository, $method]) {
            if (isset($data[$field]) && !empty($data[$field])) {
                $relatedEntity = $repository->find($data[$field]);
                if (!$relatedEntity) {
                    return ['errors' => [$field => "El valor de $field no es válido."]];
                }
                $entity->$method($relatedEntity); // Asignamos la entidad relacionada
            }
        }

        // Iteramos sobre los campos simples
        foreach ($simpleFields as $field => $method) {
            if (isset($data[$field])) {
                $entity->$method($data[$field]);
            }
        }

        // Validamos la entidad
        $errors = $this->validator->validate($entity);

        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $field = str_replace(['[', ']'], '', $error->getPropertyPath());
                $errorMessages[$field][] = $error->getMessage();
            }
            return ['errors' => $errorMessages];
        }

        return ['success' => true];
    }
}

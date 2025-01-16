<?php

namespace App\Service;

use Symfony\Component\Validator\Validator\ValidatorInterface;

class ValidationServices
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function validateAndAssignRelations(
        object $entity,
        array $data,
        array $relations,
        array $simpleFields
    ) {
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

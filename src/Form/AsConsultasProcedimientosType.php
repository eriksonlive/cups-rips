<?php

namespace App\Form;

use App\Entity\AsConsultasProcedimientos;
use App\Repository\AsCie10Repository;
use App\Repository\RipsTablaReferenciaCausaExternaV2Repository;
use App\Repository\RipsTablaReferenciaFinalidadConsultaV2Repository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AsConsultasProcedimientosType extends AbstractType
{
    private AsCie10Repository $asCie10;
    private RipsTablaReferenciaCausaExternaV2Repository $causaRepository;
    private RipsTablaReferenciaFinalidadConsultaV2Repository $finalidadRepository;

    public function __construct(
        AsCie10Repository $asCie,
        RipsTablaReferenciaCausaExternaV2Repository $causaRepository,
        RipsTablaReferenciaFinalidadConsultaV2Repository $finalidadRepository
    ) {
        $this->asCie10 = $asCie;
        $this->causaRepository = $causaRepository;
        $this->finalidadRepository = $finalidadRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('informe_oportunidad', CheckboxType::class, [
                'label' => 'Informe Oportunidad',
                'label_attr' => [
                    'class' => 'text-gray-500',
                ],
                'attr' => [
                    'class' => 'hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none',
                ],
            ])
            ->add('tipo_cita', ChoiceType::class, [
                'label' => 'Tipo Cita',
                'choices' => [
                    'Consulta' => 1,
                    'Procedimiento' => 2,
                ],
                'label_attr' => [
                    'class' => 'block text-sm text-gray-700 capitalize dark:text-gray-200',
                ],
                'attr' => [
                    'class' => 'block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40',
                ],
                'required' => true,
                'placeholder' => 'Seleccione una opción...'
            ])
            ->add('diagnostico_defaults', ChoiceType::class, [
                'label' => 'Diagnóstico',
                'choice_loader' => new CallbackChoiceLoader(function () {
                    // Obtener las opciones desde tu repositorio o API
                    $choices = $this->asCie10->findLastTen(); // Modifica según tu caso
                    return $choices;
                }),
                'choice_label' => fn($diagnostico) => $diagnostico->getNombre(), // Nombre para mostrar
                'choice_value' => fn($diagnostico) => $diagnostico ? $diagnostico->getCie10() : null, // Valor que se usa en el formulario
                'label_attr' => [
                    'class' => 'block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2',
                ],
                'attr' => [
                    'class' => 'choices-autocomplete block w-full px-3 py-0 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40',
                    'data-url' => $options['data_url'],
                    'data-placeholder' => 'Seleccione un diagnóstico...',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Debe seleccionar un diagnóstico.']),
                ],
                'placeholder' => 'Seleccione un diagnóstico...',
            ])
            ->add('tipo_diagnostico', ChoiceType::class, [
                'label' => 'Tipo Diagnóstico',
                'choices' => [
                    'impresion diagnostica' => 'impresion diagnostica',
                    'confirmado nuevo' => 'Confirmado Nuevo',
                    'confirmado repetido' => 'Confirmado Repetido'
                ],
                'label_attr' => [
                    'class' => 'block text-sm text-gray-700 capitalize dark:text-gray-200',
                ],
                'attr' => [
                    'class' => 'block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40',
                ],
                'placeholder' => 'Seleccione un tipo diagnóstico...',
                'required' => true
            ])
            ->add('finalidad', ChoiceType::class, [
                'label' => 'Finalidad',
                'choice_loader' => new CallbackChoiceLoader(function () {
                    // Obtener las opciones desde tu repositorio o API
                    $choices = $this->finalidadRepository->findAll(); // Modifica según tu caso
                    return $choices;
                }),
                'choice_label' => fn($diagnostico) => $diagnostico->getNombre(), // Nombre para mostrar
                'choice_value' => fn($diagnostico) => $diagnostico ? $diagnostico->getCodigo() : null, // Valor que se usa en el formulario
                'label_attr' => [
                    'class' => 'block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2'
                ],
                'attr' => [
                    'class' => 'choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40',
                    'data-url' => $options['data_url_finalidad'],
                    'data-placeholder' => 'Seleccione un diagnóstico...',
                ],
                'placeholder' => 'Seleccione una finalidad...',
                'required' => true
            ])
            ->add('causa_externa', ChoiceType::class, [
                'label' => 'Causa Externa',
                'choice_loader' => new CallbackChoiceLoader(function () {
                    // Obtener las opciones desde tu repositorio o API
                    $choices = $this->causaRepository->findAll(); // Modifica según tu caso
                    return $choices;
                }),
                'choice_label' => fn($diagnostico) => $diagnostico->getNombre(), // Nombre para mostrar
                'choice_value' => fn($diagnostico) => $diagnostico ? $diagnostico->getCodigo() : null, // Valor que se usa en el formulario
                'label_attr' => [
                    'class' => 'block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2'
                ],
                'attr' => [
                    'class' => 'choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40',
                    'data-url' => $options['data_url_causa'],
                    'data-placeholder' => 'Seleccione un diagnóstico...',
                ],
                'placeholder' => 'Seleccione una causa externa...',
                'required' => true
            ])
            ->add('crear', SubmitType::class, [
                'label' => 'Crear',
                'attr' => [
                    'class' => 'px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AsConsultasProcedimientos::class,
            'data_url' => null,
            'data_url_causa' => null,
            'data_url_finalidad' => null
        ]);
    }
}

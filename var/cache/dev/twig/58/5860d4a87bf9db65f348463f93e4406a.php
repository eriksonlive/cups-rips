<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* forms/form-create-update.html.twig */
class __TwigTemplate_3c9c55a4a5c4c4e892af3f8fddc14e93 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modal_title' => [$this, 'block_modal_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "components/modal-component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form-create-update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form-create-update.html.twig"));

        $this->parent = $this->loadTemplate("components/modal-component.html.twig", "forms/form-create-update.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_title"));

        // line 4
        yield "\t<div x-text=\"update ? 'Actualizar Cups': 'Crear Cups'\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "\t<form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_as_consult");
        yield "\" x-data=\"formHandler()\" @submit.prevent=\"!itemId ? submitForm : updateData\" data-update=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_as_consult", ["id" => "id"]);
        yield "\" data-getid=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_as_consult_by_id", ["id" => "id"]);
        yield "\" @modal-close.window=\"handleModalClose();\">
\t\t<div class=\"mt-5 grid grid-cols-2 gap-4\" @form-update.window=\"handleExample(\$event)\" data-groups=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["groupedData"]) || array_key_exists("groupedData", $context) ? $context["groupedData"] : (function () { throw new RuntimeError('Variable "groupedData" does not exist.', 9, $this->source); })())), "html_attr");
        yield "\">
\t\t\t<div class=\"col-span-2\">
\t\t\t\t<label for=\"cups\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Cups</label>
\t\t\t\t<select
\t\t\t\t\tid=\"cups\" name=\"cups\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_list_as_cups");
        yield "\" x-bind:data-default=\"initialState.cups\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.cups\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.cups\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"tipo_cita\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo cita</label>
\t\t\t\t<select id=\"tipo_cita\" x-bind:value=\"initialState.tipoCita\" name=\"tipo_cita\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t<option value=\"1\">Consulta</option>
\t\t\t\t\t<option value=\"2\">Procedimiento</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.tipo_cita\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.tipo_cita\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"mt-6 space-y-5\">
\t\t\t\t<div class=\"flex items-center space-x-3 cursor-pointer\" x-model=\"show\" @click=\"show =!show\">
\t\t\t\t\t<input type=\"hidden\" name=\"informe_oportunidad\" value=\"false\"/>
\t\t\t\t\t<div class=\"relative w-10 h-5 transition duration-200 ease-linear rounded-full\" :class=\"[show ? 'bg-indigo-500' : 'bg-gray-300']\">
\t\t\t\t\t\t<label for=\"show\" @click=\"show =!show\" class=\"absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer\" :class=\"[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']\"></label>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"informe_oportunidad\" :checked=\"show\" :value=\"show ? 'true' : 'false'\" class=\"hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none\"/>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"text-gray-500\">Informe Oportunidad</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<!-- Primer select: Grupos -->
\t\t\t\t<label for=\"tipo_servicio\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Grupo Servicio</label>
\t\t\t\t<select id=\"tipo_servicio\" name=\"tipo_servicio\" x-model=\"selectedGroup\" @change=\"updateServices()\" x-bind:value=\"initialState.grupo\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione un grupo</option>
\t\t\t\t\t<template x-for=\"(group, groupCode) in groups\" :key=\"groupCode\">
\t\t\t\t\t\t<option :value=\"groupCode\" x-text=\"group.nombre\"></option>
\t\t\t\t\t</template>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.tipo_servicio\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.tipo_servicio\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"servicio_rips_code\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Codigo Servicio</label>
\t\t\t\t<select id=\"servicio_rips_code\" name=\"servicio_rips_code\" x-model=\"initialState.servicio\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" :disabled=\"!services.length\">
\t\t\t\t\t<option value=\"\" disabled selected x-show=\"!services.length\">Seleccione un servicio</option>
\t\t\t\t\t<template x-for=\"service in services\" :key=\"service.codigo\">
\t\t\t\t\t\t<option :value=\"service.codigo\" x-text=\"service.nombre\"></option>
\t\t\t\t\t</template>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.servicio_rips_code\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.servicio_rips_code\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"diagnostico_defaults\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Diagnostico por defecto</label>
\t\t\t\t<select
\t\t\t\t\tid=\"diagnostico_defaults\" name=\"diagnostico_defaults\" x-bind:data-default=\"initialState.diag\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_list_diagnostic");
        yield "\">
\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.diagnostico_defaults\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.diagnostico_defaults\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"tipo_diagnostico\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo Diagnóstico</label>
\t\t\t\t<select id=\"tipo_diagnostico\" name=\"tipo_diagnostico\" x-model=\"initialState.tipoDiag\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t<option value=\"01\">Impresión diagnóstica</option>
\t\t\t\t\t<option value=\"02\">Confirmado Nuevo</option>
\t\t\t\t\t<option value=\"03\">Confirmado Repetido</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.tipo_diagnostico\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.tipo_diagnostico\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"causa_externa\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Causa Externa</label>
\t\t\t\t<select
\t\t\t\t\tid=\"causa_externa\" name=\"causa_externa\" x-bind:data-default=\"initialState.causa\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_list_external_cause");
        yield "\">
\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.causa_externa\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.causa_externa\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"finalidad\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Finalidad</label>
\t\t\t\t<select id=\"finalidad\" name=\"finalidad\" data-url=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_list_finality");
        yield "\" x-bind:data-default=\"initialState.finalidad\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.finalidad\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.finalidad\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"flex justify-end mt-6 col-span-2\">
\t\t\t\t<button type=\"submit\" x-text=\"!itemId ? 'Crear' : 'Actualizar'\" class=\"px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\"></button>
\t\t\t</div>
\t\t</div>
\t</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/form-create-update.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  226 => 112,  212 => 101,  184 => 76,  118 => 13,  111 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'components/modal-component.html.twig' %}

{% block modal_title %}
\t<div x-text=\"update ? 'Actualizar Cups': 'Crear Cups'\"></div>
{% endblock %}

{% block body %}
\t<form method=\"post\" action=\"{{ path('create_as_consult') }}\" x-data=\"formHandler()\" @submit.prevent=\"!itemId ? submitForm : updateData\" data-update=\"{{ path('update_as_consult', {'id': 'id'}) }}\" data-getid=\"{{ path('get_as_consult_by_id', {'id': 'id'}) }}\" @modal-close.window=\"handleModalClose();\">
\t\t<div class=\"mt-5 grid grid-cols-2 gap-4\" @form-update.window=\"handleExample(\$event)\" data-groups=\"{{ groupedData|json_encode|e('html_attr') }}\">
\t\t\t<div class=\"col-span-2\">
\t\t\t\t<label for=\"cups\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Cups</label>
\t\t\t\t<select
\t\t\t\t\tid=\"cups\" name=\"cups\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('get_list_as_cups') }}\" x-bind:data-default=\"initialState.cups\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.cups\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.cups\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"tipo_cita\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo cita</label>
\t\t\t\t<select id=\"tipo_cita\" x-bind:value=\"initialState.tipoCita\" name=\"tipo_cita\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t<option value=\"1\">Consulta</option>
\t\t\t\t\t<option value=\"2\">Procedimiento</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.tipo_cita\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.tipo_cita\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"mt-6 space-y-5\">
\t\t\t\t<div class=\"flex items-center space-x-3 cursor-pointer\" x-model=\"show\" @click=\"show =!show\">
\t\t\t\t\t<input type=\"hidden\" name=\"informe_oportunidad\" value=\"false\"/>
\t\t\t\t\t<div class=\"relative w-10 h-5 transition duration-200 ease-linear rounded-full\" :class=\"[show ? 'bg-indigo-500' : 'bg-gray-300']\">
\t\t\t\t\t\t<label for=\"show\" @click=\"show =!show\" class=\"absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer\" :class=\"[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']\"></label>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"informe_oportunidad\" :checked=\"show\" :value=\"show ? 'true' : 'false'\" class=\"hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none\"/>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"text-gray-500\">Informe Oportunidad</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<!-- Primer select: Grupos -->
\t\t\t\t<label for=\"tipo_servicio\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Grupo Servicio</label>
\t\t\t\t<select id=\"tipo_servicio\" name=\"tipo_servicio\" x-model=\"selectedGroup\" @change=\"updateServices()\" x-bind:value=\"initialState.grupo\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione un grupo</option>
\t\t\t\t\t<template x-for=\"(group, groupCode) in groups\" :key=\"groupCode\">
\t\t\t\t\t\t<option :value=\"groupCode\" x-text=\"group.nombre\"></option>
\t\t\t\t\t</template>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.tipo_servicio\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.tipo_servicio\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"servicio_rips_code\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Codigo Servicio</label>
\t\t\t\t<select id=\"servicio_rips_code\" name=\"servicio_rips_code\" x-model=\"initialState.servicio\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" :disabled=\"!services.length\">
\t\t\t\t\t<option value=\"\" disabled selected x-show=\"!services.length\">Seleccione un servicio</option>
\t\t\t\t\t<template x-for=\"service in services\" :key=\"service.codigo\">
\t\t\t\t\t\t<option :value=\"service.codigo\" x-text=\"service.nombre\"></option>
\t\t\t\t\t</template>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.servicio_rips_code\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.servicio_rips_code\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"diagnostico_defaults\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Diagnostico por defecto</label>
\t\t\t\t<select
\t\t\t\t\tid=\"diagnostico_defaults\" name=\"diagnostico_defaults\" x-bind:data-default=\"initialState.diag\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('get_list_diagnostic') }}\">
\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.diagnostico_defaults\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.diagnostico_defaults\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"tipo_diagnostico\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo Diagnóstico</label>
\t\t\t\t<select id=\"tipo_diagnostico\" name=\"tipo_diagnostico\" x-model=\"initialState.tipoDiag\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t<option value=\"01\">Impresión diagnóstica</option>
\t\t\t\t\t<option value=\"02\">Confirmado Nuevo</option>
\t\t\t\t\t<option value=\"03\">Confirmado Repetido</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.tipo_diagnostico\" class=\"text-red-500 text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.tipo_diagnostico\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"causa_externa\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Causa Externa</label>
\t\t\t\t<select
\t\t\t\t\tid=\"causa_externa\" name=\"causa_externa\" x-bind:data-default=\"initialState.causa\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('get_list_external_cause') }}\">
\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.causa_externa\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.causa_externa\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"finalidad\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Finalidad</label>
\t\t\t\t<select id=\"finalidad\" name=\"finalidad\" data-url=\"{{ path('get_list_finality') }}\" x-bind:data-default=\"initialState.finalidad\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t</select>
\t\t\t\t<div x-show=\"errors.finalidad\" class=\"text-red-500 mt-[-20px] text-[14px]\">
\t\t\t\t\t<p x-text=\"errors.finalidad\"></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"flex justify-end mt-6 col-span-2\">
\t\t\t\t<button type=\"submit\" x-text=\"!itemId ? 'Crear' : 'Actualizar'\" class=\"px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\"></button>
\t\t\t</div>
\t\t</div>
\t</form>
{% endblock %}
", "forms/form-create-update.html.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\forms\\form-create-update.html.twig");
    }
}

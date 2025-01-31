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

/* cups-rips/cups-rips-view.html.twig */
class __TwigTemplate_5776df35e7de7c841f8c8a38a1b010c7 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cups-rips/cups-rips-view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cups-rips/cups-rips-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cups-rips/cups-rips-view.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Componentes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
\t";
        // line 8
        yield from $this->loadTemplate("forms/form-create-update.html.twig", "cups-rips/cups-rips-view.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "\t";
        yield from $this->loadTemplate("components/alert-component.html.twig", "cups-rips/cups-rips-view.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "\t<div>
\t\t<!-- component -->
\t\t<div x-data=\"dataHandler()\" class=\"-my-2 py-2 overflow-x-hidden\" data-get=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_as_consults");
        yield "\" data-delete=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_as_consult", ["id" => "id"]);
        yield "\">
\t\t\t<div class=\"align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12\">
\t\t\t\t<h2 class=\"text-[30px] font-bold mt-6 mb-10\">Listado CUPS - RIPS</h2>
\t\t\t\t<form id=\"form-filter\" method=\"get\" @submit.prevent=\"filterChange()\" class=\"flex flex-row\">
\t\t\t\t\t<div class=\"inline-flex items-center basis-1/4\">
\t\t\t\t\t\t<div class=\"inline-flex items-center mr-3\">
\t\t\t\t\t\t\t<label class=\"font-bold\">Cód. Cups</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inline-flex border rounded w-8/12 h-12 bg-transparent\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap items-stretch w-full h-full mb-6 relative\">
\t\t\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t\t\t<span class=\"flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"18\" class=\"w-4 lg:w-auto\" viewbox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.9993 16.9993L13.1328 13.1328\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"codigo_cups\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-md lg:text-md text-gray-500 font-thin\" placeholder=\"Search\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inline-flex items-center basis-1/3\">
\t\t\t\t\t\t<div class=\"inline-flex items-center mx-3 w-40\">
\t\t\t\t\t\t\t<label class=\"font-bold text-wrap\">Descripción Cups</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inline-flex border rounded w-8/12 h-12 bg-transparent\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap items-stretch w-full h-full mb-6 relative\">
\t\t\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t\t\t<span class=\"flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"18\" class=\"w-4 lg:w-auto\" viewbox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.9993 16.9993L13.1328 13.1328\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"descripcion_cups\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-md lg:text-md text-gray-500 font-thin\" placeholder=\"Search\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inline-flex mx-3 w-1/3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"border rounded p-3 w-20 h-fit bg-green-500 text-white shadow-sm\">Filtrar</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"flex flex-row my-4\">

\t\t\t\t\t<button x-data @click=\"\$dispatch('modal-open', {update: false}); \$dispatch('form-update')\" class=\"rounded border p-2 bg-blue-500 text-white hover:bg-blue-400 mr-3\">Nuevo</button>

\t\t\t\t\t<button onclick=\"window.location.href='/export';\" class=\"flex items-center justify-center px-3 py-2 mr-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 rounded dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50\">
\t\t\t\t\t\t<svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>

\t\t\t\t\t\t<span>Exportar</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div @reload.window=\"reload(); loading = true\" class=\"align-middle inline-block min-w-full shadow overflow-x-auto pb-4 bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg\">
\t\t\t\t<table class=\"min-w-fit\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\"></th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">ID</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Cód Cups</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Descripción Cups</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Tipo</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Informe Oportunidad</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Diágnostico</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Finalidad</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Causa Externa</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Codigo servicio Rips</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Tipo de diagnostico</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Creado Por</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Creado En</th>
\t\t\t\t\t\t\t";
        // line 89
        yield "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"bg-white\">
\t\t\t\t\t\t<template x-if=\"loading\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"13\" class=\"text-center py-4\">
\t\t\t\t\t\t\t\t\tCargando...
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</template>
\t\t\t\t\t\t<template x-if=\"!loading && data.length\">
\t\t\t\t\t\t\t<template x-for=\"item in data.filter(Boolean)\" :key=\"item.id\">
\t\t\t\t\t\t\t\t<tr id=\"item.id\">
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button @click=\"\$dispatch('form-update', {id: item.id});\" class=\"border rounded p-1 m-1 bg-orange-500 text-white border-orange-500\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button @click=\"deleteChange(item.id)\" class=\"border rounded p-1 m-1 bg-red-500 text-white border-red-500\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-gray-800\" x-text=\"item.id\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-blue-900\" x-text=\"item.code_cups\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\" x-text=\"item.description_cups\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\" x-text=\"item.tipo_cita\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t\t<span class=\"relative inline-block px-3 py-1 font-semibold leading-tight\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden class=\"absolute inset-0 opacity-50 rounded-full\" :class=\"{'text-green-900 bg-green-200': item.informe_oportunidad, 'text-red-900 bg-red-200': !item.informe_oportunidad}\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span x-text=\"item.informe_oportunidad\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.diagnostico_defaults\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.finalidad\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.causa_externa\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.servicio_rips_code\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.tipo_diagnostico\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.created_by\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.created_at\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</template>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p class=\"text-sm leading-5 text-blue-700\">
\t\t\t\t\t\t\tMostrando
\t\t\t\t\t\t\t<span class=\"font-medium\" x-text=\"offset + 1\"></span>
\t\t\t\t\t\t\ta
\t\t\t\t\t\t\t<span class=\"font-medium\" x-text=\"Math.min(offset + itemsPerPage, totalCount)\"></span>
\t\t\t\t\t\t\tde
\t\t\t\t\t\t\t<span class=\"font-medium\" x-text=\"totalCount\"></span>
\t\t\t\t\t\t\tresultados
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"relative z-0 inline-flex shadow-sm\">
\t\t\t\t\t\t\t<!-- Botón de página anterior -->
\t\t\t\t\t\t\t<button @click=\"changePage(currentPage - 1)\" :disabled=\"currentPage === 1\" class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttransition ease-in-out duration-150\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<!-- Páginas -->
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<template x-for=\"page in visiblePages\" :key=\"page\">
\t\t\t\t\t\t\t\t\t<button @click=\"changePage(page)\" :class=\"{'bg-blue-500 text-white': page === currentPage, 'bg-white text-blue-700': page !== currentPage}\" class=\"-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium hover:bg-gray-100 transition ease-in-out duration-150\">
\t\t\t\t\t\t\t\t\t\t<span x-text=\"page\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Botón de siguiente página -->
\t\t\t\t\t\t\t<button @click=\"changePage(currentPage + 1)\" :disabled=\"currentPage === totalPages\" class=\"-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttransition ease-in-out duration-150\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "cups-rips/cups-rips-view.html.twig";
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
        return array (  194 => 89,  113 => 12,  109 => 10,  106 => 9,  104 => 8,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Componentes
{% endblock %}

{% block body %}

\t{% include 'forms/form-create-update.html.twig' %}
\t{% include 'components/alert-component.html.twig' %}
\t<div>
\t\t<!-- component -->
\t\t<div x-data=\"dataHandler()\" class=\"-my-2 py-2 overflow-x-hidden\" data-get=\"{{ path('get_as_consults') }}\" data-delete=\"{{ path('delete_as_consult', {'id': 'id'}) }}\">
\t\t\t<div class=\"align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12\">
\t\t\t\t<h2 class=\"text-[30px] font-bold mt-6 mb-10\">Listado CUPS - RIPS</h2>
\t\t\t\t<form id=\"form-filter\" method=\"get\" @submit.prevent=\"filterChange()\" class=\"flex flex-row\">
\t\t\t\t\t<div class=\"inline-flex items-center basis-1/4\">
\t\t\t\t\t\t<div class=\"inline-flex items-center mr-3\">
\t\t\t\t\t\t\t<label class=\"font-bold\">Cód. Cups</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inline-flex border rounded w-8/12 h-12 bg-transparent\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap items-stretch w-full h-full mb-6 relative\">
\t\t\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t\t\t<span class=\"flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"18\" class=\"w-4 lg:w-auto\" viewbox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.9993 16.9993L13.1328 13.1328\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"codigo_cups\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-md lg:text-md text-gray-500 font-thin\" placeholder=\"Search\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inline-flex items-center basis-1/3\">
\t\t\t\t\t\t<div class=\"inline-flex items-center mx-3 w-40\">
\t\t\t\t\t\t\t<label class=\"font-bold text-wrap\">Descripción Cups</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inline-flex border rounded w-8/12 h-12 bg-transparent\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap items-stretch w-full h-full mb-6 relative\">
\t\t\t\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t\t\t\t<span class=\"flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"18\" class=\"w-4 lg:w-auto\" viewbox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.9993 16.9993L13.1328 13.1328\" stroke=\"#455A64\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"descripcion_cups\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-md lg:text-md text-gray-500 font-thin\" placeholder=\"Search\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inline-flex mx-3 w-1/3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"border rounded p-3 w-20 h-fit bg-green-500 text-white shadow-sm\">Filtrar</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"flex flex-row my-4\">

\t\t\t\t\t<button x-data @click=\"\$dispatch('modal-open', {update: false}); \$dispatch('form-update')\" class=\"rounded border p-2 bg-blue-500 text-white hover:bg-blue-400 mr-3\">Nuevo</button>

\t\t\t\t\t<button onclick=\"window.location.href='/export';\" class=\"flex items-center justify-center px-3 py-2 mr-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 rounded dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50\">
\t\t\t\t\t\t<svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>

\t\t\t\t\t\t<span>Exportar</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div @reload.window=\"reload(); loading = true\" class=\"align-middle inline-block min-w-full shadow overflow-x-auto pb-4 bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg\">
\t\t\t\t<table class=\"min-w-fit\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider\"></th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">ID</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Cód Cups</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Descripción Cups</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Tipo</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Informe Oportunidad</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Diágnostico</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Finalidad</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Causa Externa</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Codigo servicio Rips</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Tipo de diagnostico</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Creado Por</th>
\t\t\t\t\t\t\t<th class=\"px-3 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-blue-500 tracking-wider\">Creado En</th>
\t\t\t\t\t\t\t{# <th class=\"px-3 py-3 border-b-2 border-gray-300\"></th> #}
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"bg-white\">
\t\t\t\t\t\t<template x-if=\"loading\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"13\" class=\"text-center py-4\">
\t\t\t\t\t\t\t\t\tCargando...
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</template>
\t\t\t\t\t\t<template x-if=\"!loading && data.length\">
\t\t\t\t\t\t\t<template x-for=\"item in data.filter(Boolean)\" :key=\"item.id\">
\t\t\t\t\t\t\t\t<tr id=\"item.id\">
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button @click=\"\$dispatch('form-update', {id: item.id});\" class=\"border rounded p-1 m-1 bg-orange-500 text-white border-orange-500\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button @click=\"deleteChange(item.id)\" class=\"border rounded p-1 m-1 bg-red-500 text-white border-red-500\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-gray-800\" x-text=\"item.id\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-blue-900\" x-text=\"item.code_cups\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\" x-text=\"item.description_cups\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\" x-text=\"item.tipo_cita\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t\t<span class=\"relative inline-block px-3 py-1 font-semibold leading-tight\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden class=\"absolute inset-0 opacity-50 rounded-full\" :class=\"{'text-green-900 bg-green-200': item.informe_oportunidad, 'text-red-900 bg-red-200': !item.informe_oportunidad}\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span x-text=\"item.informe_oportunidad\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.diagnostico_defaults\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.finalidad\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.causa_externa\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.servicio_rips_code\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.tipo_diagnostico\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.created_by\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\" x-text=\"item.created_at\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</template>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p class=\"text-sm leading-5 text-blue-700\">
\t\t\t\t\t\t\tMostrando
\t\t\t\t\t\t\t<span class=\"font-medium\" x-text=\"offset + 1\"></span>
\t\t\t\t\t\t\ta
\t\t\t\t\t\t\t<span class=\"font-medium\" x-text=\"Math.min(offset + itemsPerPage, totalCount)\"></span>
\t\t\t\t\t\t\tde
\t\t\t\t\t\t\t<span class=\"font-medium\" x-text=\"totalCount\"></span>
\t\t\t\t\t\t\tresultados
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"relative z-0 inline-flex shadow-sm\">
\t\t\t\t\t\t\t<!-- Botón de página anterior -->
\t\t\t\t\t\t\t<button @click=\"changePage(currentPage - 1)\" :disabled=\"currentPage === 1\" class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttransition ease-in-out duration-150\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<!-- Páginas -->
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<template x-for=\"page in visiblePages\" :key=\"page\">
\t\t\t\t\t\t\t\t\t<button @click=\"changePage(page)\" :class=\"{'bg-blue-500 text-white': page === currentPage, 'bg-white text-blue-700': page !== currentPage}\" class=\"-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium hover:bg-gray-100 transition ease-in-out duration-150\">
\t\t\t\t\t\t\t\t\t\t<span x-text=\"page\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Botón de siguiente página -->
\t\t\t\t\t\t\t<button @click=\"changePage(currentPage + 1)\" :disabled=\"currentPage === totalPages\" class=\"-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttransition ease-in-out duration-150\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "cups-rips/cups-rips-view.html.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\cups-rips\\cups-rips-view.html.twig");
    }
}

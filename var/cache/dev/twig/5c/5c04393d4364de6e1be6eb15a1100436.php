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

/* components/modal.html.twig */
class __TwigTemplate_eb8dbdb0bc3e147ccdb4265e5c595b73 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modal.html.twig"));

        // line 1
        yield "<div x-data=\"{ modelOpen: false}\" @open-modal.window=\"modelOpen=true\">
\t<button @click=\"modelOpen=!modelOpen\" class=\"flex items-center justify-center px-3 py-2 mr-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t<path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"/>
\t\t</svg>

\t\t<span>Crear</span>
\t</button>

\t<div x-show=\"modelOpen\" class=\"fixed inset-0 z-50 overflow-y-auto\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
\t\t<div class=\"flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0\">
\t\t\t<div x-cloak @click=\"modelOpen = false\" x-show=\"modelOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40\" aria-hidden=\"true\"></div>

\t\t\t<div x-cloak x-show=\"modelOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" class=\"inline-block w-full max-w-xl p-8 my-20 text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl\">
\t\t\t\t<div class=\"flex items-center justify-between space-x-4\">
\t\t\t\t\t<h1 class=\"text-xl font-medium text-gray-800 \">Nuevo CUPS-RIPS</h1>

\t\t\t\t\t<button @click=\"modelOpen = false\" class=\"text-gray-600 focus:outline-none hover:text-gray-700\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<p class=\"mt-2 text-sm text-gray-500 \">
\t\t\t\t\tAdd your teammate to your team and start work to get things done
\t\t\t\t</p>

\t\t\t\t<form method=\"post\" action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_example_create");
        yield "\">

\t\t\t\t\t<div class=\"mt-5 grid grid-cols-2 gap-4\" x-data=\"formHandler()\" data-groups=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["groupedData"]) || array_key_exists("groupedData", $context) ? $context["groupedData"] : (function () { throw new RuntimeError('Variable "groupedData" does not exist.', 31, $this->source); })())), "html_attr");
        yield "\">
\t\t\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t\t\t<label for=\"cups\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Cups</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"cups\" name=\"cups\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cups");
        yield "\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cups", [], "array", true, true, false, 39)) {
            // line 40
            yield "\t\t\t\t\t\t\t\t<div class=\"text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 41, $this->source); })()), "cups", [], "array", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 42
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 46
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"tipo_cita\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo cita</label>
\t\t\t\t\t\t\t<select id=\"tipo_cita\" name=\"tipo_cita\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Consulta</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Procedimiento</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "tipo_cita", [], "array", true, true, false, 55)) {
            // line 56
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 57, $this->source); })()), "tipo_cita", [], "array", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 58
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 62
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-6 space-y-5\">
\t\t\t\t\t\t\t<div class=\"flex items-center space-x-3 cursor-pointer\" x-data=\"{ show: true }\" @click=\"show =!show\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"informe_oportunidad\" value=\"false\"/>
\t\t\t\t\t\t\t\t<div class=\"relative w-10 h-5 transition duration-200 ease-linear rounded-full\" :class=\"[show ? 'bg-indigo-500' : 'bg-gray-300']\">
\t\t\t\t\t\t\t\t\t<label for=\"show\" @click=\"show =!show\" class=\"absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer\" :class=\"[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']\"></label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"informe_oportunidad\" :checked=\"show\" :value=\"show ? 'true' : 'false'\" class=\"hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<p class=\"text-gray-500\">Informe Oportunidad</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<!-- Primer select: Grupos -->
\t\t\t\t\t\t\t<label for=\"grupo\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Grupo Servicio</label>
\t\t\t\t\t\t\t<select id=\"grupo\" name=\"grupo\" x-model=\"selectedGroup\" @change=\"updateServices()\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione un grupo</option>
\t\t\t\t\t\t\t\t<template x-for=\"(group, groupCode) in groups\" :key=\"groupCode\">
\t\t\t\t\t\t\t\t\t<option :value=\"groupCode\" x-text=\"group.nombre\"></option>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "grupo", [], "array", true, true, false, 85)) {
            // line 86
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 87, $this->source); })()), "grupo", [], "array", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 88
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 92
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"servicio\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Codigo Servicio</label>
\t\t\t\t\t\t\t<select id=\"servicio\" name=\"servicio\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" :disabled=\"!services.length\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected x-show=\"!services.length\">Seleccione un servicio</option>
\t\t\t\t\t\t\t\t<template x-for=\"service in services\" :key=\"service.codigo\">
\t\t\t\t\t\t\t\t\t<option :value=\"service.codigo\" x-text=\"service.nombre\"></option>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 102
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "servicio", [], "array", true, true, false, 102)) {
            // line 103
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 104, $this->source); })()), "servicio", [], "array", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 105
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 109
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"diag\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Diagnostico por defecto</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"diag\" name=\"diag\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("diagnostico_suggestions");
        yield "\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 118
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "diag", [], "array", true, true, false, 118)) {
            // line 119
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 120, $this->source); })()), "diag", [], "array", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 121
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 125
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"tipo_diag\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo Diagnóstico</label>
\t\t\t\t\t\t\t<select id=\"tipo_diag\" name=\"tipo_diag\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t\t<option value=\"01\">Impresión diagnóstica</option>
\t\t\t\t\t\t\t\t<option value=\"02\">Confirmado Nuevo</option>
\t\t\t\t\t\t\t\t<option value=\"03\">Confirmado Repetido</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 135
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "tipo_diag", [], "array", true, true, false, 135)) {
            // line 136
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 137, $this->source); })()), "tipo_diag", [], "array", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 138
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 142
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"causa_externa\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Causa Externa</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"causa_externa\" name=\"causa_externa\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("causa_externa");
        yield "\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "causa_externa", [], "array", true, true, false, 151)) {
            // line 152
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 153, $this->source); })()), "causa_externa", [], "array", false, false, false, 153));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 154
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 158
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"finalidad\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Finalidad</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"finalidad\" name=\"finalidad\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finalidad_data");
        yield "\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "finalidad", [], "array", true, true, false, 167)) {
            // line 168
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 169, $this->source); })()), "finalidad", [], "array", false, false, false, 169));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 170
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 174
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex justify-end mt-6 col-span-2\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\">
\t\t\t\t\t\t\t\tCrear
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

 <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('formHandler', () => ({
            // Select anidado
            groups: JSON.parse(document.querySelector('[data-groups]').getAttribute('data-groups')),
            selectedGroup: '',
            services: [],
            // Datos para cupsData
            codigoCups: '',
            nombreCups: '',
            cupsList: [], // Simulación de datos de CUPS
            updateServices() {
                this.services = this.selectedGroup ? this.groups[this.selectedGroup].items : [];
            },
        }));
    });

\t// document.addEventListener('DOMContentLoaded', () => {
\t// \tfunction initializeChoicesAutocomplete(selector) {
\t// \t\tconst elements = document.querySelectorAll(selector);

\t// \t\telements.forEach((selectElement) => {
\t// \t\t\tif (!selectElement) return;

\t// \t\t\tconst url = selectElement.dataset.url; // URL del backend
\t// \t\t\tconst placeholder = selectElement.dataset.placeholder || 'Buscar...';

\t// \t\t\t// Inicializa Choices.js
\t// \t\t\tlet choicesInstance = new Choices(selectElement, {
\t// \t\t\t\tsearchEnabled: true,
\t// \t\t\t\tsearchPlaceholderValue: placeholder,
\t// \t\t\t\tshouldSort: false,
\t// \t\t\t\tremoveItemButton: true, // Si es necesario permitir remover elementos
\t// \t\t\t});

\t// \t\t\tselectElement._choicesInstance = choicesInstance; // Guardar la instancia en el elemento

\t// \t\t\t// Función para actualizar las opciones basándose en el valor predeterminado
\t// \t\t\tconst updateChoicesWithDefault = (defaultValue) => {
\t// \t\t\t\tif (!defaultValue || !url) return;

\t// \t\t\t\tfetch(`\${url}?q=\${defaultValue}`)
\t// \t\t\t\t\t.then((response) => response.json())
\t// \t\t\t\t\t.then((data) => {
\t// \t\t\t\t\t\tchoicesInstance.clearChoices();
\t// \t\t\t\t\t\tchoicesInstance.setChoices(
\t// \t\t\t\t\t\t\tdata.map((item) => ({
\t// \t\t\t\t\t\t\t\tvalue: item.id,
\t// \t\t\t\t\t\t\t\tlabel: item.text,
\t// \t\t\t\t\t\t\t})),
\t// \t\t\t\t\t\t\t'value',
\t// \t\t\t\t\t\t\t'label',
\t// \t\t\t\t\t\t\ttrue
\t// \t\t\t\t\t\t);

\t// \t\t\t\t\t\t// Selecciona automáticamente el valor predeterminado si coincide
\t// \t\t\t\t\t\tif (data.some((item) => item.id === defaultValue)) {
\t// \t\t\t\t\t\t\tchoicesInstance.setChoiceByValue(defaultValue);
\t// \t\t\t\t\t\t}
\t// \t\t\t\t\t})
\t// \t\t\t\t\t.catch((error) => console.error('Error al cargar opciones iniciales:', error));
\t// \t\t\t};

\t// \t\t\t// Observar cambios en el atributo data-default
\t// \t\t\tconst observer = new MutationObserver((mutations) => {
\t// \t\t\t\tmutations.forEach((mutation) => {
\t// \t\t\t\t\tif (mutation.attributeName === 'data-default') {
\t// \t\t\t\t\t\tconst newDefaultValue = selectElement.dataset.default;
\t// \t\t\t\t\t\tupdateChoicesWithDefault(newDefaultValue); // Actualizar las opciones
\t// \t\t\t\t\t}
\t// \t\t\t\t});
\t// \t\t\t});

\t// \t\t\tobserver.observe(selectElement, { attributes: true }); // Observar atributos del elemento

\t// \t\t\t// Inicializar con el valor actual de data-default si existe
\t// \t\t\tconst defaultValue = selectElement.dataset.default;
\t// \t\t\tif (defaultValue) {
\t// \t\t\t\tupdateChoicesWithDefault(defaultValue);
\t// \t\t\t}

\t// \t\t\t// Gestionar la búsqueda dinámica en el evento input
\t// \t\t\tselectElement.addEventListener('input', async (event) => {
\t// \t\t\t\tconst query = event.target.value; // Captura el valor de entrada
\t// \t\t\t\tif (query.length < 3) {
\t// \t\t\t\t\tchoicesInstance.clearChoices();
\t// \t\t\t\t\treturn;
\t// \t\t\t\t}

\t// \t\t\t\ttry {
\t// \t\t\t\t\tconst response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
\t// \t\t\t\t\tconst data = await response.json();

\t// \t\t\t\t\t// Limpiar opciones actuales y cargar las nuevas
\t// \t\t\t\t\tchoicesInstance.clearChoices();
\t// \t\t\t\t\tchoicesInstance.setChoices(
\t// \t\t\t\t\t\tdata.map((item) => ({
\t// \t\t\t\t\t\t\tvalue: item.id,
\t// \t\t\t\t\t\t\tlabel: item.text,
\t// \t\t\t\t\t\t})),
\t// \t\t\t\t\t\t'value',
\t// \t\t\t\t\t\t'label',
\t// \t\t\t\t\t\ttrue
\t// \t\t\t\t\t);
\t// \t\t\t\t} catch (error) {
\t// \t\t\t\t\tconsole.error('Error al cargar los datos:', error);
\t// \t\t\t\t}
\t// \t\t\t});
\t// \t\t});
\t// \t}

\t// \t// Inicializar Choices.js para selectores específicos
\t// \tinitializeChoicesAutocomplete('.choices-autocomplete');
\t// \tinitializeChoicesAutocomplete('.codigo-autocomplete');
\t// });

</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/modal.html.twig";
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
        return array (  375 => 174,  371 => 172,  362 => 170,  358 => 169,  355 => 168,  353 => 167,  346 => 163,  339 => 158,  335 => 156,  326 => 154,  322 => 153,  319 => 152,  317 => 151,  310 => 147,  303 => 142,  299 => 140,  290 => 138,  286 => 137,  283 => 136,  281 => 135,  269 => 125,  265 => 123,  256 => 121,  252 => 120,  249 => 119,  247 => 118,  240 => 114,  233 => 109,  229 => 107,  220 => 105,  216 => 104,  213 => 103,  211 => 102,  199 => 92,  195 => 90,  186 => 88,  182 => 87,  179 => 86,  177 => 85,  152 => 62,  148 => 60,  139 => 58,  135 => 57,  132 => 56,  130 => 55,  119 => 46,  115 => 44,  106 => 42,  102 => 41,  99 => 40,  97 => 39,  90 => 35,  83 => 31,  78 => 29,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div x-data=\"{ modelOpen: false}\" @open-modal.window=\"modelOpen=true\">
\t<button @click=\"modelOpen=!modelOpen\" class=\"flex items-center justify-center px-3 py-2 mr-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t<path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"/>
\t\t</svg>

\t\t<span>Crear</span>
\t</button>

\t<div x-show=\"modelOpen\" class=\"fixed inset-0 z-50 overflow-y-auto\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
\t\t<div class=\"flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0\">
\t\t\t<div x-cloak @click=\"modelOpen = false\" x-show=\"modelOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40\" aria-hidden=\"true\"></div>

\t\t\t<div x-cloak x-show=\"modelOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" class=\"inline-block w-full max-w-xl p-8 my-20 text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl\">
\t\t\t\t<div class=\"flex items-center justify-between space-x-4\">
\t\t\t\t\t<h1 class=\"text-xl font-medium text-gray-800 \">Nuevo CUPS-RIPS</h1>

\t\t\t\t\t<button @click=\"modelOpen = false\" class=\"text-gray-600 focus:outline-none hover:text-gray-700\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<p class=\"mt-2 text-sm text-gray-500 \">
\t\t\t\t\tAdd your teammate to your team and start work to get things done
\t\t\t\t</p>

\t\t\t\t<form method=\"post\" action=\"{{ path('app_example_create') }}\">

\t\t\t\t\t<div class=\"mt-5 grid grid-cols-2 gap-4\" x-data=\"formHandler()\" data-groups=\"{{ groupedData|json_encode|e('html_attr') }}\">
\t\t\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t\t\t<label for=\"cups\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Cups</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"cups\" name=\"cups\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('cups') }}\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['cups'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t{% for error in errors['cups'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"tipo_cita\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo cita</label>
\t\t\t\t\t\t\t<select id=\"tipo_cita\" name=\"tipo_cita\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Consulta</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Procedimiento</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['tipo_cita'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t{% for error in errors['tipo_cita'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-6 space-y-5\">
\t\t\t\t\t\t\t<div class=\"flex items-center space-x-3 cursor-pointer\" x-data=\"{ show: true }\" @click=\"show =!show\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"informe_oportunidad\" value=\"false\"/>
\t\t\t\t\t\t\t\t<div class=\"relative w-10 h-5 transition duration-200 ease-linear rounded-full\" :class=\"[show ? 'bg-indigo-500' : 'bg-gray-300']\">
\t\t\t\t\t\t\t\t\t<label for=\"show\" @click=\"show =!show\" class=\"absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer\" :class=\"[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']\"></label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"informe_oportunidad\" :checked=\"show\" :value=\"show ? 'true' : 'false'\" class=\"hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none\"/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<p class=\"text-gray-500\">Informe Oportunidad</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<!-- Primer select: Grupos -->
\t\t\t\t\t\t\t<label for=\"grupo\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Grupo Servicio</label>
\t\t\t\t\t\t\t<select id=\"grupo\" name=\"grupo\" x-model=\"selectedGroup\" @change=\"updateServices()\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione un grupo</option>
\t\t\t\t\t\t\t\t<template x-for=\"(group, groupCode) in groups\" :key=\"groupCode\">
\t\t\t\t\t\t\t\t\t<option :value=\"groupCode\" x-text=\"group.nombre\"></option>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['grupo'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t{% for error in errors['grupo'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"servicio\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Codigo Servicio</label>
\t\t\t\t\t\t\t<select id=\"servicio\" name=\"servicio\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" :disabled=\"!services.length\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected x-show=\"!services.length\">Seleccione un servicio</option>
\t\t\t\t\t\t\t\t<template x-for=\"service in services\" :key=\"service.codigo\">
\t\t\t\t\t\t\t\t\t<option :value=\"service.codigo\" x-text=\"service.nombre\"></option>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['servicio'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t{% for error in errors['servicio'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"diag\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Diagnostico por defecto</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"diag\" name=\"diag\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('diagnostico_suggestions') }}\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['diag'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t{% for error in errors['diag'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"tipo_diag\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo Diagnóstico</label>
\t\t\t\t\t\t\t<select id=\"tipo_diag\" name=\"tipo_diag\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t\t<option value=\"01\">Impresión diagnóstica</option>
\t\t\t\t\t\t\t\t<option value=\"02\">Confirmado Nuevo</option>
\t\t\t\t\t\t\t\t<option value=\"03\">Confirmado Repetido</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['tipo_diag'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t{% for error in errors['tipo_diag'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"causa_externa\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Causa Externa</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"causa_externa\" name=\"causa_externa\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('causa_externa') }}\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['causa_externa'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t{% for error in errors['causa_externa'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"finalidad\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Finalidad</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"finalidad\" name=\"finalidad\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('finalidad_data') }}\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% if errors['finalidad'] is defined %}
\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t{% for error in errors['finalidad'] %}
\t\t\t\t\t\t\t\t\t\t<p>{{ error }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex justify-end mt-6 col-span-2\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\">
\t\t\t\t\t\t\t\tCrear
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

 <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('formHandler', () => ({
            // Select anidado
            groups: JSON.parse(document.querySelector('[data-groups]').getAttribute('data-groups')),
            selectedGroup: '',
            services: [],
            // Datos para cupsData
            codigoCups: '',
            nombreCups: '',
            cupsList: [], // Simulación de datos de CUPS
            updateServices() {
                this.services = this.selectedGroup ? this.groups[this.selectedGroup].items : [];
            },
        }));
    });

\t// document.addEventListener('DOMContentLoaded', () => {
\t// \tfunction initializeChoicesAutocomplete(selector) {
\t// \t\tconst elements = document.querySelectorAll(selector);

\t// \t\telements.forEach((selectElement) => {
\t// \t\t\tif (!selectElement) return;

\t// \t\t\tconst url = selectElement.dataset.url; // URL del backend
\t// \t\t\tconst placeholder = selectElement.dataset.placeholder || 'Buscar...';

\t// \t\t\t// Inicializa Choices.js
\t// \t\t\tlet choicesInstance = new Choices(selectElement, {
\t// \t\t\t\tsearchEnabled: true,
\t// \t\t\t\tsearchPlaceholderValue: placeholder,
\t// \t\t\t\tshouldSort: false,
\t// \t\t\t\tremoveItemButton: true, // Si es necesario permitir remover elementos
\t// \t\t\t});

\t// \t\t\tselectElement._choicesInstance = choicesInstance; // Guardar la instancia en el elemento

\t// \t\t\t// Función para actualizar las opciones basándose en el valor predeterminado
\t// \t\t\tconst updateChoicesWithDefault = (defaultValue) => {
\t// \t\t\t\tif (!defaultValue || !url) return;

\t// \t\t\t\tfetch(`\${url}?q=\${defaultValue}`)
\t// \t\t\t\t\t.then((response) => response.json())
\t// \t\t\t\t\t.then((data) => {
\t// \t\t\t\t\t\tchoicesInstance.clearChoices();
\t// \t\t\t\t\t\tchoicesInstance.setChoices(
\t// \t\t\t\t\t\t\tdata.map((item) => ({
\t// \t\t\t\t\t\t\t\tvalue: item.id,
\t// \t\t\t\t\t\t\t\tlabel: item.text,
\t// \t\t\t\t\t\t\t})),
\t// \t\t\t\t\t\t\t'value',
\t// \t\t\t\t\t\t\t'label',
\t// \t\t\t\t\t\t\ttrue
\t// \t\t\t\t\t\t);

\t// \t\t\t\t\t\t// Selecciona automáticamente el valor predeterminado si coincide
\t// \t\t\t\t\t\tif (data.some((item) => item.id === defaultValue)) {
\t// \t\t\t\t\t\t\tchoicesInstance.setChoiceByValue(defaultValue);
\t// \t\t\t\t\t\t}
\t// \t\t\t\t\t})
\t// \t\t\t\t\t.catch((error) => console.error('Error al cargar opciones iniciales:', error));
\t// \t\t\t};

\t// \t\t\t// Observar cambios en el atributo data-default
\t// \t\t\tconst observer = new MutationObserver((mutations) => {
\t// \t\t\t\tmutations.forEach((mutation) => {
\t// \t\t\t\t\tif (mutation.attributeName === 'data-default') {
\t// \t\t\t\t\t\tconst newDefaultValue = selectElement.dataset.default;
\t// \t\t\t\t\t\tupdateChoicesWithDefault(newDefaultValue); // Actualizar las opciones
\t// \t\t\t\t\t}
\t// \t\t\t\t});
\t// \t\t\t});

\t// \t\t\tobserver.observe(selectElement, { attributes: true }); // Observar atributos del elemento

\t// \t\t\t// Inicializar con el valor actual de data-default si existe
\t// \t\t\tconst defaultValue = selectElement.dataset.default;
\t// \t\t\tif (defaultValue) {
\t// \t\t\t\tupdateChoicesWithDefault(defaultValue);
\t// \t\t\t}

\t// \t\t\t// Gestionar la búsqueda dinámica en el evento input
\t// \t\t\tselectElement.addEventListener('input', async (event) => {
\t// \t\t\t\tconst query = event.target.value; // Captura el valor de entrada
\t// \t\t\t\tif (query.length < 3) {
\t// \t\t\t\t\tchoicesInstance.clearChoices();
\t// \t\t\t\t\treturn;
\t// \t\t\t\t}

\t// \t\t\t\ttry {
\t// \t\t\t\t\tconst response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
\t// \t\t\t\t\tconst data = await response.json();

\t// \t\t\t\t\t// Limpiar opciones actuales y cargar las nuevas
\t// \t\t\t\t\tchoicesInstance.clearChoices();
\t// \t\t\t\t\tchoicesInstance.setChoices(
\t// \t\t\t\t\t\tdata.map((item) => ({
\t// \t\t\t\t\t\t\tvalue: item.id,
\t// \t\t\t\t\t\t\tlabel: item.text,
\t// \t\t\t\t\t\t})),
\t// \t\t\t\t\t\t'value',
\t// \t\t\t\t\t\t'label',
\t// \t\t\t\t\t\ttrue
\t// \t\t\t\t\t);
\t// \t\t\t\t} catch (error) {
\t// \t\t\t\t\tconsole.error('Error al cargar los datos:', error);
\t// \t\t\t\t}
\t// \t\t\t});
\t// \t\t});
\t// \t}

\t// \t// Inicializar Choices.js para selectores específicos
\t// \tinitializeChoicesAutocomplete('.choices-autocomplete');
\t// \tinitializeChoicesAutocomplete('.codigo-autocomplete');
\t// });

</script>
", "components/modal.html.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\components\\modal.html.twig");
    }
}

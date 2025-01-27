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

/* components/modalUpdate.html.twig */
class __TwigTemplate_68ac93049acb05e2e408923e75328c05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modalUpdate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modalUpdate.html.twig"));

        // line 1
        yield "<div x-data=\"formHandler()\" @open-modal-update.window=\"handleExample(\$event)\" x-cloak>

\t<div x-show=\"modalOpenUpdate\" class=\"fixed inset-0 z-50 overflow-y-auto\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
\t\t<div class=\"flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0\">
\t\t\t<div x-cloak @click=\"modalOpenUpdate = false\" x-show=\"modalOpenUpdate\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40\" aria-hidden=\"true\"></div>

\t\t\t<div x-cloak x-show=\"modalOpenUpdate\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" class=\"inline-block w-full max-w-xl p-8 my-20 text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl\">
\t\t\t\t<div class=\"flex items-center justify-between space-x-4\">
\t\t\t\t\t<h1 class=\"text-xl font-medium text-gray-800 \">Actualizar CUPS-RIPS</h1>

\t\t\t\t\t<button @click=\"modalOpenUpdate = false\" class=\"text-gray-600 focus:outline-none hover:text-gray-700\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<form method=\"post\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_example_update");
        yield "\">

\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"PATCH\">
\t\t\t\t\t<input type=\"hidden\" name=\"id\" x-bind:value=\"itemId\">

\t\t\t\t\t<div class=\"mt-5 grid grid-cols-2 gap-4\" data-groups=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["groupedData"]) || array_key_exists("groupedData", $context) ? $context["groupedData"] : (function () { throw new RuntimeError('Variable "groupedData" does not exist.', 23, $this->source); })())), "html_attr");
        yield "\">
\t\t\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t\t\t<label for=\"cups\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Cups</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"cups\" name=\"cups\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cups");
        yield "\" x-bind:data-default=\"cups\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cups", [], "array", true, true, false, 31)) {
            // line 32
            yield "\t\t\t\t\t\t\t\t<div class=\"text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 33, $this->source); })()), "cups", [], "array", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 34
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 38
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"tipo_cita\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo cita</label>
\t\t\t\t\t\t\t<select id=\"tipo_cita\" x-bind:value=\"tipoCita\" name=\"tipo_cita\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Consulta</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Procedimiento</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "tipo_cita", [], "array", true, true, false, 47)) {
            // line 48
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 49, $this->source); })()), "tipo_cita", [], "array", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 50
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 54
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-6 space-y-5\">
\t\t\t\t\t\t\t<div class=\"flex items-center space-x-3 cursor-pointer\" x-model=\"show\" @click=\"show =!show\">
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
\t\t\t\t\t\t\t<select id=\"grupo\" name=\"grupo\" x-model=\"selectedGroup\" @change=\"updateServices()\" x-bind:value=\"grupo\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione un grupo</option>
\t\t\t\t\t\t\t\t<template x-for=\"(group, groupCode) in groups\" :key=\"groupCode\">
\t\t\t\t\t\t\t\t\t<option :value=\"groupCode\" x-text=\"group.nombre\"></option>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "grupo", [], "array", true, true, false, 77)) {
            // line 78
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 79, $this->source); })()), "grupo", [], "array", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 80
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 84
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"servicio\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200\">Codigo Servicio</label>
\t\t\t\t\t\t\t<select id=\"servicio\" name=\"servicio\" x-bind:value=\"servicio\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" :disabled=\"!services.length\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected x-show=\"!services.length\">Seleccione un servicio</option>
\t\t\t\t\t\t\t\t<template x-for=\"service in services\" :key=\"service.codigo\">
\t\t\t\t\t\t\t\t\t<option :value=\"service.codigo\" x-text=\"service.nombre\"></option>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "servicio", [], "array", true, true, false, 94)) {
            // line 95
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 96, $this->source); })()), "servicio", [], "array", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 97
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 101
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"diag\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Diagnostico por defecto</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"diag\" name=\"diag\" x-bind:data-default=\"diag\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_list_diagnostic");
        yield "\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "diag", [], "array", true, true, false, 110)) {
            // line 111
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 112, $this->source); })()), "diag", [], "array", false, false, false, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 113
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 117
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"tipo_diag\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Tipo Diagnóstico</label>
\t\t\t\t\t\t\t<select id=\"tipo_diag\" name=\"tipo_diag\" x-bind:value=\"tipoDiag\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t\t<option value=\"01\">Impresión diagnóstica</option>
\t\t\t\t\t\t\t\t<option value=\"02\">Confirmado Nuevo</option>
\t\t\t\t\t\t\t\t<option value=\"03\">Confirmado Repetido</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 127
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "tipo_diag", [], "array", true, true, false, 127)) {
            // line 128
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500\">
\t\t\t\t\t\t\t\t\t";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 129, $this->source); })()), "tipo_diag", [], "array", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 130
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 134
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"causa_externa\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Causa Externa</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"causa_externa\" name=\"causa_externa\" x-bind:data-default=\"causa\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("causa_externa");
        yield "\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "causa_externa", [], "array", true, true, false, 143)) {
            // line 144
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 145, $this->source); })()), "causa_externa", [], "array", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 150
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"finalidad\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Finalidad</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"finalidad\" name=\"finalidad\" x-bind:data-default=\"finalidad\" data-url=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finalidad_data");
        yield "\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
\t\t\t\t\t\t\t\t<!-- Reemplaza con tu URL de búsqueda -->
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Seleccione una opción</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "finalidad", [], "array", true, true, false, 159)) {
            // line 160
            yield "\t\t\t\t\t\t\t\t<div class=\"error text-red-500 mt-[-20px]\">
\t\t\t\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 161, $this->source); })()), "finalidad", [], "array", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 162
                yield "\t\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 166
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex justify-end mt-6 col-span-2\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded dark:bg-green-600 dark:hover:bg-green-700 dark:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50\">
\t\t\t\t\t\t\t\tActualizar
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
\t\t\tmodalOpenUpdate: false,
            groups: JSON.parse(document.querySelector('[data-groups]').getAttribute('data-groups')),
            selectedGroup: '',
            services: [],
\t\t\turl: '/edit',
\t\t\tcups: null,
\t\t\tdiag: null,
\t\t\tcausa: null,
\t\t\tfinalidad: null,
\t\t\tservicio: null,
\t\t\ttipoCita: null,
\t\t\ttipoDiag: null,
\t\t\tshow: true,
            // Datos para cupsData
            codigoCups: '',
            nombreCups: '',
            cupsList: [], // Simulación de datos de CUPS
\t\t\titemId: null,
            updateServices() {
                this.services = this.selectedGroup ? this.groups[this.selectedGroup].items : [];
            },
\t\t\thandleExample(event){
\t\t\t\tthis.modalOpenUpdate = true;
\t\t\t\tthis.itemId = event.detail?.id;
\t\t\t},
\t\t\tinit() {
\t\t\t\tthis.\$watch('itemId', () => {
\t\t\t\t\tthis.loadChoicesData();
\t\t\t\t});
\t\t\t},
\t\t\tloadChoicesData() {
\t\t\t\tif (this.url && this.itemId) {
\t\t\t\t\tfetch(`\${this.url}/\${this.itemId}`)
\t\t\t\t\t.then(response => response.json())
\t\t\t\t\t.then(data => {
\t\t\t\t\t\tthis.tipoCita = data.tipo_cita;
\t\t\t\t\t\tthis.cups = data.cups;
\t\t\t\t\t\tthis.diag = data.diag;
\t\t\t\t\t\tthis.causa = data.causa_externa;
\t\t\t\t\t\tthis.finalidad = data.finalidad;
\t\t\t\t\t\tthis.grupo = data.grupo;
\t\t\t\t\t\tthis.selectedGroup = data.grupo;
\t\t\t\t\t\tthis.updateServices();
\t\t\t\t\t\tthis.servicio = data.servicio;
\t\t\t\t\t\tthis.tipoDiag = data.tipo_diag;
\t\t\t\t\t\tthis.show = data.informe;
\t\t\t\t\t})
\t\t\t\t\t.catch(error => console.error('Error al cargar opciones iniciales:', error));
\t\t\t\t}
\t\t\t},
        }));
    });

    // document.addEventListener('DOMContentLoaded', () => {
    //     function initializeChoicesAutocomplete(selector) {
    //         const elements = document.querySelectorAll(selector);

    //         elements.forEach((selectElement) => {
    //             if (selectElement) {
    //                 const defaultValue = selectElement.dataset.default; // Este es el valor de 'data-default'
    //                 const choices = new Choices(selectElement, {
    //                     searchEnabled: true,
    //                     searchPlaceholderValue: selectElement.dataset.placeholder || 'Buscar...',
    //                     shouldSort: false,
    //                 });

    //                 // Escuchar el evento de búsqueda
    //                 selectElement.addEventListener('search', async (event) => {
    //                     const query = event.detail.value; // Lo que el usuario escribe
    //                     const url = selectElement.dataset.url;

    //                     if (query.length < 3) {
    //                         choices.clearChoices();
    //                         return;
    //                     }

    //                     try {
    //                         const response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
    //                         const data = await response.json();

    //                         // Limpiar y añadir las nuevas opciones
    //                         choices.clearChoices();
    //                         choices.setChoices(
    //                             data.map((item) => ({
    //                                 value: item.id,
    //                                 label: selector !== '.choices-autocomplete' ? item.id + ': ' + item.text : item.text,
    //                             })),
    //                             'value',
    //                             'label',
    //                             true
    //                         );

    //                         // Seleccionar el valor predeterminado si existe
    //                         if (defaultValue && data.some((item) => item.id === defaultValue)) {
    //                             choices.setChoiceByValue(defaultValue);
    //                         }
    //                     } catch (error) {
    //                         console.error('Error al cargar los datos:', error);
    //                     }
    //                 });

    //                 // Realizar una búsqueda inicial con un término vacío para cargar opciones por defecto
    //                 const url = selectElement.dataset.url;
    //                 if (defaultValue && url) {
    //                     fetch(`\${url}?q=\${defaultValue}`)
    //                         .then((response) => response.json())
    //                         .then((data) => {
    //                             // Agregar opciones iniciales
    //                             choices.clearChoices();
    //                             choices.setChoices(
    //                                 data.map((item) => ({
    //                                     value: item.id,
    //                                     label: selector !== '.choices-autocomplete' ? item.id + ': ' + item.text : item.text,
    //                                 })),
    //                                 'value',
    //                                 'label',
    //                                 true
    //                             );

    //                             // Seleccionar el valor predeterminado si está disponible
    //                             if (data.some((item) => item.id === defaultValue)) {
    //                                 choices.setChoiceByValue(defaultValue);
    //                             }
    //                         })
    //                         .catch((error) => console.error('Error al cargar opciones iniciales:', error));
    //                 }
    //             }
    //         });
    //     }

    //     // Inicializa Choices para todos los elementos con la clase 'choices-autocomplete'
    //     initializeChoicesAutocomplete('.choices-autocomplete');
    //     initializeChoicesAutocomplete('.codigo-autocomplete');
    // });

\t// document.addEventListener('DOMContentLoaded', () => {
\t// \tfunction initializeChoicesAutocomplete(selector) {
\t// \t\tconst elements = document.querySelectorAll(selector);

\t// \t\telements.forEach((selectElement) => {
\t// \t\t\tif (!selectElement) return;

\t// \t\t\tconst defaultValue = selectElement.dataset.default; // Obtén el valor predeterminado
\t// \t\t\tconst url = selectElement.dataset.url; // URL del backend
\t// \t\t\tconst placeholder = selectElement.dataset.placeholder || 'Buscar...';

\t// \t\t\t// Inicializa Choices.js
\t// \t\t\tconst choices = new Choices(selectElement, {
\t// \t\t\t\tsearchEnabled: true,
\t// \t\t\t\tsearchPlaceholderValue: placeholder,
\t// \t\t\t\tshouldSort: false,
\t// \t\t\t\tremoveItemButton: true, // Si es necesario permitir remover elementos
\t// \t\t\t});

\t// \t\t\t// Si hay un valor predeterminado, cargarlo al inicio
\t// \t\t\tif (defaultValue && url) {
\t// \t\t\t\tfetch(`\${url}?q=\${defaultValue}`)
\t// \t\t\t\t\t.then((response) => response.json())
\t// \t\t\t\t\t.then((data) => {
\t// \t\t\t\t\t\t// Carga inicial con datos relacionados al valor predeterminado
\t// \t\t\t\t\t\tchoices.setChoices(
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
\t// \t\t\t\t\t\t\tchoices.setChoiceByValue(defaultValue);
\t// \t\t\t\t\t\t}
\t// \t\t\t\t\t})
\t// \t\t\t\t\t.catch((error) => console.error('Error al cargar opciones iniciales:', error));
\t// \t\t\t}

\t// \t\t\t// Gestionar la búsqueda dinámica en el evento input
\t// \t\t\tselectElement.addEventListener('input', async (event) => {
\t// \t\t\t\tconst query = event.target.value; // Captura el valor de entrada
\t// \t\t\t\tif (query.length < 3) {
\t// \t\t\t\t\tchoices.clearChoices();
\t// \t\t\t\t\treturn;
\t// \t\t\t\t}

\t// \t\t\t\ttry {
\t// \t\t\t\t\tconst response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
\t// \t\t\t\t\tconst data = await response.json();

\t// \t\t\t\t\t// Limpiar opciones actuales y cargar las nuevas
\t// \t\t\t\t\tchoices.clearChoices();
\t// \t\t\t\t\tchoices.setChoices(
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

\tdocument.addEventListener('DOMContentLoaded', () => {
\t\tfunction initializeChoicesAutocomplete(selector) {
\t\t\tconst elements = document.querySelectorAll(selector);

\t\t\telements.forEach((selectElement) => {
\t\t\t\tif (!selectElement) return;

\t\t\t\tconst url = selectElement.dataset.url; // URL del backend
\t\t\t\tconst placeholder = selectElement.dataset.placeholder || 'Buscar...';

\t\t\t\t// Inicializa Choices.js
\t\t\t\tlet choicesInstance = new Choices(selectElement, {
\t\t\t\t\tsearchEnabled: true,
\t\t\t\t\tsearchPlaceholderValue: placeholder,
\t\t\t\t\tshouldSort: false,
\t\t\t\t\tremoveItemButton: true, // Si es necesario permitir remover elementos
\t\t\t\t});

\t\t\t\tselectElement._choicesInstance = choicesInstance; // Guardar la instancia en el elemento

\t\t\t\t// Función para actualizar las opciones basándose en el valor predeterminado
\t\t\t\tconst updateChoicesWithDefault = (defaultValue) => {
\t\t\t\t\tif (!defaultValue || !url) return;

\t\t\t\t\tfetch(`\${url}?q=\${defaultValue}`)
\t\t\t\t\t\t.then((response) => response.json())
\t\t\t\t\t\t.then((data) => {
\t\t\t\t\t\t\tchoicesInstance.clearChoices();

\t\t\t\t\t\t\tchoicesInstance.setChoices(
\t\t\t\t\t\t\t\tdata.map((item) => ({
\t\t\t\t\t\t\t\t\tvalue: item.id,
\t\t\t\t\t\t\t\t\tlabel: selector !== '.choices-autocomplete' ? item?.id + ': ' + item.text : item.text,
\t\t\t\t\t\t\t\t})),
\t\t\t\t\t\t\t\t'value',
\t\t\t\t\t\t\t\t'label',
\t\t\t\t\t\t\t\ttrue
\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t// Selecciona automáticamente el valor predeterminado si coincide
\t\t\t\t\t\t\tif (data.some((item) => item?.id === defaultValue)) {
\t\t\t\t\t\t\t\tchoicesInstance.setChoiceByValue(defaultValue);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t.catch((error) => console.error('Error al cargar opciones iniciales:', error));
\t\t\t\t};

\t\t\t\t// Observar cambios en el atributo data-default
\t\t\t\tconst observer = new MutationObserver((mutations) => {
\t\t\t\t\tmutations.forEach((mutation) => {
\t\t\t\t\t\tif (mutation.attributeName === 'data-default') {
\t\t\t\t\t\t\tconst newDefaultValue = selectElement.dataset.default;
\t\t\t\t\t\t\tupdateChoicesWithDefault(newDefaultValue); // Actualizar las opciones
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\tobserver.observe(selectElement, { attributes: true }); // Observar atributos del elemento

\t\t\t\t// Inicializar con el valor actual de data-default si existe
\t\t\t\tconst defaultValue = selectElement.dataset.default;
\t\t\t\tif (defaultValue) {
\t\t\t\t\tupdateChoicesWithDefault(defaultValue);
\t\t\t\t}

\t\t\t\t// Gestionar la búsqueda dinámica en el evento input
\t\t\t\tselectElement.addEventListener('search', async (event) => {
                        const query = event.detail.value; // Lo que el usuario escribe
                        const url = selectElement.dataset.url;

                        if (query.length < 2) {
                            choicesInstance.clearChoices();
                            return;
                        }

                        try {
                            const response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
                            const data = await response.json();
                            // Limpiar y añadir las nuevas opciones
                            choicesInstance.clearChoices();
                            choicesInstance.setChoices(
                                data.map((item) => ({
                                    value: item.id,
                                    label: selector !== '.choices-autocomplete' ? item?.id + ': ' + item.text + '' : item.text,
                                })),
                                'value',
                                'label',
                                true
                            );

                            // Seleccionar el valor predeterminado si existe
                            if (defaultValue && data.some((item) => item.id === defaultValue)) {
                                choicesInstance.setChoiceByValue(defaultValue);
                            }
                        } catch (error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
\t\t\t});
\t\t}

\t\t// Inicializar Choices.js para selectores específicos
\t\tinitializeChoicesAutocomplete('.choices-autocomplete');
\t\tinitializeChoicesAutocomplete('.codigo-autocomplete');
\t});

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
        return "components/modalUpdate.html.twig";
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
        return array (  367 => 166,  363 => 164,  354 => 162,  350 => 161,  347 => 160,  345 => 159,  338 => 155,  331 => 150,  327 => 148,  318 => 146,  314 => 145,  311 => 144,  309 => 143,  302 => 139,  295 => 134,  291 => 132,  282 => 130,  278 => 129,  275 => 128,  273 => 127,  261 => 117,  257 => 115,  248 => 113,  244 => 112,  241 => 111,  239 => 110,  232 => 106,  225 => 101,  221 => 99,  212 => 97,  208 => 96,  205 => 95,  203 => 94,  191 => 84,  187 => 82,  178 => 80,  174 => 79,  171 => 78,  169 => 77,  144 => 54,  140 => 52,  131 => 50,  127 => 49,  124 => 48,  122 => 47,  111 => 38,  107 => 36,  98 => 34,  94 => 33,  91 => 32,  89 => 31,  82 => 27,  75 => 23,  67 => 18,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div x-data=\"formHandler()\" @open-modal-update.window=\"handleExample(\$event)\" x-cloak>

\t<div x-show=\"modalOpenUpdate\" class=\"fixed inset-0 z-50 overflow-y-auto\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
\t\t<div class=\"flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0\">
\t\t\t<div x-cloak @click=\"modalOpenUpdate = false\" x-show=\"modalOpenUpdate\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40\" aria-hidden=\"true\"></div>

\t\t\t<div x-cloak x-show=\"modalOpenUpdate\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" class=\"inline-block w-full max-w-xl p-8 my-20 text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl\">
\t\t\t\t<div class=\"flex items-center justify-between space-x-4\">
\t\t\t\t\t<h1 class=\"text-xl font-medium text-gray-800 \">Actualizar CUPS-RIPS</h1>

\t\t\t\t\t<button @click=\"modalOpenUpdate = false\" class=\"text-gray-600 focus:outline-none hover:text-gray-700\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<form method=\"post\" action=\"{{ path('app_example_update') }}\">

\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"PATCH\">
\t\t\t\t\t<input type=\"hidden\" name=\"id\" x-bind:value=\"itemId\">

\t\t\t\t\t<div class=\"mt-5 grid grid-cols-2 gap-4\" data-groups=\"{{ groupedData|json_encode|e('html_attr') }}\">
\t\t\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t\t\t<label for=\"cups\" class=\"block text-sm text-gray-700 capitalize dark:text-gray-200 mb-2\">Cups</label>
\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\tid=\"cups\" name=\"cups\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('cups') }}\" x-bind:data-default=\"cups\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
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
\t\t\t\t\t\t\t<select id=\"tipo_cita\" x-bind:value=\"tipoCita\" name=\"tipo_cita\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
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
\t\t\t\t\t\t\t<div class=\"flex items-center space-x-3 cursor-pointer\" x-model=\"show\" @click=\"show =!show\">
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
\t\t\t\t\t\t\t<select id=\"grupo\" name=\"grupo\" x-model=\"selectedGroup\" @change=\"updateServices()\" x-bind:value=\"grupo\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\">
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
\t\t\t\t\t\t\t<select id=\"servicio\" name=\"servicio\" x-bind:value=\"servicio\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" :disabled=\"!services.length\">
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
\t\t\t\t\t\t\t\tid=\"diag\" name=\"diag\" x-bind:data-default=\"diag\" class=\"codigo-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('get_list_diagnostic') }}\">
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
\t\t\t\t\t\t\t<select id=\"tipo_diag\" name=\"tipo_diag\" x-bind:value=\"tipoDiag\" class=\"block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
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
\t\t\t\t\t\t\t\tid=\"causa_externa\" name=\"causa_externa\" x-bind:data-default=\"causa\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\" data-url=\"{{ path('causa_externa') }}\">
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
\t\t\t\t\t\t\t\tid=\"finalidad\" name=\"finalidad\" x-bind:data-default=\"finalidad\" data-url=\"{{ path('finalidad_data') }}\" class=\"choices-autocomplete block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40\" data-placeholder=\"Buscar descripción...\">
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
\t\t\t\t\t\t\t\tActualizar
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
\t\t\tmodalOpenUpdate: false,
            groups: JSON.parse(document.querySelector('[data-groups]').getAttribute('data-groups')),
            selectedGroup: '',
            services: [],
\t\t\turl: '/edit',
\t\t\tcups: null,
\t\t\tdiag: null,
\t\t\tcausa: null,
\t\t\tfinalidad: null,
\t\t\tservicio: null,
\t\t\ttipoCita: null,
\t\t\ttipoDiag: null,
\t\t\tshow: true,
            // Datos para cupsData
            codigoCups: '',
            nombreCups: '',
            cupsList: [], // Simulación de datos de CUPS
\t\t\titemId: null,
            updateServices() {
                this.services = this.selectedGroup ? this.groups[this.selectedGroup].items : [];
            },
\t\t\thandleExample(event){
\t\t\t\tthis.modalOpenUpdate = true;
\t\t\t\tthis.itemId = event.detail?.id;
\t\t\t},
\t\t\tinit() {
\t\t\t\tthis.\$watch('itemId', () => {
\t\t\t\t\tthis.loadChoicesData();
\t\t\t\t});
\t\t\t},
\t\t\tloadChoicesData() {
\t\t\t\tif (this.url && this.itemId) {
\t\t\t\t\tfetch(`\${this.url}/\${this.itemId}`)
\t\t\t\t\t.then(response => response.json())
\t\t\t\t\t.then(data => {
\t\t\t\t\t\tthis.tipoCita = data.tipo_cita;
\t\t\t\t\t\tthis.cups = data.cups;
\t\t\t\t\t\tthis.diag = data.diag;
\t\t\t\t\t\tthis.causa = data.causa_externa;
\t\t\t\t\t\tthis.finalidad = data.finalidad;
\t\t\t\t\t\tthis.grupo = data.grupo;
\t\t\t\t\t\tthis.selectedGroup = data.grupo;
\t\t\t\t\t\tthis.updateServices();
\t\t\t\t\t\tthis.servicio = data.servicio;
\t\t\t\t\t\tthis.tipoDiag = data.tipo_diag;
\t\t\t\t\t\tthis.show = data.informe;
\t\t\t\t\t})
\t\t\t\t\t.catch(error => console.error('Error al cargar opciones iniciales:', error));
\t\t\t\t}
\t\t\t},
        }));
    });

    // document.addEventListener('DOMContentLoaded', () => {
    //     function initializeChoicesAutocomplete(selector) {
    //         const elements = document.querySelectorAll(selector);

    //         elements.forEach((selectElement) => {
    //             if (selectElement) {
    //                 const defaultValue = selectElement.dataset.default; // Este es el valor de 'data-default'
    //                 const choices = new Choices(selectElement, {
    //                     searchEnabled: true,
    //                     searchPlaceholderValue: selectElement.dataset.placeholder || 'Buscar...',
    //                     shouldSort: false,
    //                 });

    //                 // Escuchar el evento de búsqueda
    //                 selectElement.addEventListener('search', async (event) => {
    //                     const query = event.detail.value; // Lo que el usuario escribe
    //                     const url = selectElement.dataset.url;

    //                     if (query.length < 3) {
    //                         choices.clearChoices();
    //                         return;
    //                     }

    //                     try {
    //                         const response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
    //                         const data = await response.json();

    //                         // Limpiar y añadir las nuevas opciones
    //                         choices.clearChoices();
    //                         choices.setChoices(
    //                             data.map((item) => ({
    //                                 value: item.id,
    //                                 label: selector !== '.choices-autocomplete' ? item.id + ': ' + item.text : item.text,
    //                             })),
    //                             'value',
    //                             'label',
    //                             true
    //                         );

    //                         // Seleccionar el valor predeterminado si existe
    //                         if (defaultValue && data.some((item) => item.id === defaultValue)) {
    //                             choices.setChoiceByValue(defaultValue);
    //                         }
    //                     } catch (error) {
    //                         console.error('Error al cargar los datos:', error);
    //                     }
    //                 });

    //                 // Realizar una búsqueda inicial con un término vacío para cargar opciones por defecto
    //                 const url = selectElement.dataset.url;
    //                 if (defaultValue && url) {
    //                     fetch(`\${url}?q=\${defaultValue}`)
    //                         .then((response) => response.json())
    //                         .then((data) => {
    //                             // Agregar opciones iniciales
    //                             choices.clearChoices();
    //                             choices.setChoices(
    //                                 data.map((item) => ({
    //                                     value: item.id,
    //                                     label: selector !== '.choices-autocomplete' ? item.id + ': ' + item.text : item.text,
    //                                 })),
    //                                 'value',
    //                                 'label',
    //                                 true
    //                             );

    //                             // Seleccionar el valor predeterminado si está disponible
    //                             if (data.some((item) => item.id === defaultValue)) {
    //                                 choices.setChoiceByValue(defaultValue);
    //                             }
    //                         })
    //                         .catch((error) => console.error('Error al cargar opciones iniciales:', error));
    //                 }
    //             }
    //         });
    //     }

    //     // Inicializa Choices para todos los elementos con la clase 'choices-autocomplete'
    //     initializeChoicesAutocomplete('.choices-autocomplete');
    //     initializeChoicesAutocomplete('.codigo-autocomplete');
    // });

\t// document.addEventListener('DOMContentLoaded', () => {
\t// \tfunction initializeChoicesAutocomplete(selector) {
\t// \t\tconst elements = document.querySelectorAll(selector);

\t// \t\telements.forEach((selectElement) => {
\t// \t\t\tif (!selectElement) return;

\t// \t\t\tconst defaultValue = selectElement.dataset.default; // Obtén el valor predeterminado
\t// \t\t\tconst url = selectElement.dataset.url; // URL del backend
\t// \t\t\tconst placeholder = selectElement.dataset.placeholder || 'Buscar...';

\t// \t\t\t// Inicializa Choices.js
\t// \t\t\tconst choices = new Choices(selectElement, {
\t// \t\t\t\tsearchEnabled: true,
\t// \t\t\t\tsearchPlaceholderValue: placeholder,
\t// \t\t\t\tshouldSort: false,
\t// \t\t\t\tremoveItemButton: true, // Si es necesario permitir remover elementos
\t// \t\t\t});

\t// \t\t\t// Si hay un valor predeterminado, cargarlo al inicio
\t// \t\t\tif (defaultValue && url) {
\t// \t\t\t\tfetch(`\${url}?q=\${defaultValue}`)
\t// \t\t\t\t\t.then((response) => response.json())
\t// \t\t\t\t\t.then((data) => {
\t// \t\t\t\t\t\t// Carga inicial con datos relacionados al valor predeterminado
\t// \t\t\t\t\t\tchoices.setChoices(
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
\t// \t\t\t\t\t\t\tchoices.setChoiceByValue(defaultValue);
\t// \t\t\t\t\t\t}
\t// \t\t\t\t\t})
\t// \t\t\t\t\t.catch((error) => console.error('Error al cargar opciones iniciales:', error));
\t// \t\t\t}

\t// \t\t\t// Gestionar la búsqueda dinámica en el evento input
\t// \t\t\tselectElement.addEventListener('input', async (event) => {
\t// \t\t\t\tconst query = event.target.value; // Captura el valor de entrada
\t// \t\t\t\tif (query.length < 3) {
\t// \t\t\t\t\tchoices.clearChoices();
\t// \t\t\t\t\treturn;
\t// \t\t\t\t}

\t// \t\t\t\ttry {
\t// \t\t\t\t\tconst response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
\t// \t\t\t\t\tconst data = await response.json();

\t// \t\t\t\t\t// Limpiar opciones actuales y cargar las nuevas
\t// \t\t\t\t\tchoices.clearChoices();
\t// \t\t\t\t\tchoices.setChoices(
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

\tdocument.addEventListener('DOMContentLoaded', () => {
\t\tfunction initializeChoicesAutocomplete(selector) {
\t\t\tconst elements = document.querySelectorAll(selector);

\t\t\telements.forEach((selectElement) => {
\t\t\t\tif (!selectElement) return;

\t\t\t\tconst url = selectElement.dataset.url; // URL del backend
\t\t\t\tconst placeholder = selectElement.dataset.placeholder || 'Buscar...';

\t\t\t\t// Inicializa Choices.js
\t\t\t\tlet choicesInstance = new Choices(selectElement, {
\t\t\t\t\tsearchEnabled: true,
\t\t\t\t\tsearchPlaceholderValue: placeholder,
\t\t\t\t\tshouldSort: false,
\t\t\t\t\tremoveItemButton: true, // Si es necesario permitir remover elementos
\t\t\t\t});

\t\t\t\tselectElement._choicesInstance = choicesInstance; // Guardar la instancia en el elemento

\t\t\t\t// Función para actualizar las opciones basándose en el valor predeterminado
\t\t\t\tconst updateChoicesWithDefault = (defaultValue) => {
\t\t\t\t\tif (!defaultValue || !url) return;

\t\t\t\t\tfetch(`\${url}?q=\${defaultValue}`)
\t\t\t\t\t\t.then((response) => response.json())
\t\t\t\t\t\t.then((data) => {
\t\t\t\t\t\t\tchoicesInstance.clearChoices();

\t\t\t\t\t\t\tchoicesInstance.setChoices(
\t\t\t\t\t\t\t\tdata.map((item) => ({
\t\t\t\t\t\t\t\t\tvalue: item.id,
\t\t\t\t\t\t\t\t\tlabel: selector !== '.choices-autocomplete' ? item?.id + ': ' + item.text : item.text,
\t\t\t\t\t\t\t\t})),
\t\t\t\t\t\t\t\t'value',
\t\t\t\t\t\t\t\t'label',
\t\t\t\t\t\t\t\ttrue
\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t// Selecciona automáticamente el valor predeterminado si coincide
\t\t\t\t\t\t\tif (data.some((item) => item?.id === defaultValue)) {
\t\t\t\t\t\t\t\tchoicesInstance.setChoiceByValue(defaultValue);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t.catch((error) => console.error('Error al cargar opciones iniciales:', error));
\t\t\t\t};

\t\t\t\t// Observar cambios en el atributo data-default
\t\t\t\tconst observer = new MutationObserver((mutations) => {
\t\t\t\t\tmutations.forEach((mutation) => {
\t\t\t\t\t\tif (mutation.attributeName === 'data-default') {
\t\t\t\t\t\t\tconst newDefaultValue = selectElement.dataset.default;
\t\t\t\t\t\t\tupdateChoicesWithDefault(newDefaultValue); // Actualizar las opciones
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\tobserver.observe(selectElement, { attributes: true }); // Observar atributos del elemento

\t\t\t\t// Inicializar con el valor actual de data-default si existe
\t\t\t\tconst defaultValue = selectElement.dataset.default;
\t\t\t\tif (defaultValue) {
\t\t\t\t\tupdateChoicesWithDefault(defaultValue);
\t\t\t\t}

\t\t\t\t// Gestionar la búsqueda dinámica en el evento input
\t\t\t\tselectElement.addEventListener('search', async (event) => {
                        const query = event.detail.value; // Lo que el usuario escribe
                        const url = selectElement.dataset.url;

                        if (query.length < 2) {
                            choicesInstance.clearChoices();
                            return;
                        }

                        try {
                            const response = await fetch(`\${url}?q=\${encodeURIComponent(query)}`);
                            const data = await response.json();
                            // Limpiar y añadir las nuevas opciones
                            choicesInstance.clearChoices();
                            choicesInstance.setChoices(
                                data.map((item) => ({
                                    value: item.id,
                                    label: selector !== '.choices-autocomplete' ? item?.id + ': ' + item.text + '' : item.text,
                                })),
                                'value',
                                'label',
                                true
                            );

                            // Seleccionar el valor predeterminado si existe
                            if (defaultValue && data.some((item) => item.id === defaultValue)) {
                                choicesInstance.setChoiceByValue(defaultValue);
                            }
                        } catch (error) {
                            console.error('Error al cargar los datos:', error);
                        }
                    });
\t\t\t});
\t\t}

\t\t// Inicializar Choices.js para selectores específicos
\t\tinitializeChoicesAutocomplete('.choices-autocomplete');
\t\tinitializeChoicesAutocomplete('.codigo-autocomplete');
\t});

</script>
", "components/modalUpdate.html.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\components\\modalUpdate.html.twig");
    }
}

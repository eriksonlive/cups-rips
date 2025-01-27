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

/* example/index.html copy.twig */
class __TwigTemplate_db108e57da810d04d3474cfcc1d75b45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "example/index.html copy.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "example/index.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "example/index.html copy.twig", 1);
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

        yield "Hello ExampleController!
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
\t<div>
\t\t<!-- component -->
\t\t<div class=\"-my-2 py-2 overflow-x-auto\">
\t\t\t<div class=\"align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12\">
\t\t\t\t<h2 class=\"text-[30px] font-bold mt-6 mb-10\">Listado CUPS - RIPS</h2>
\t\t\t\t<form method=\"get\" action=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\" class=\"flex flex-row\">
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
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"codigo_cups\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["codigoCups"]) || array_key_exists("codigoCups", $context) ? $context["codigoCups"] : (function () { throw new RuntimeError('Variable "codigoCups" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-xxs lg:text-xs text-gray-500 font-thin\" placeholder=\"Search\">
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
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"descripcion_cups\" value=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["descripcionCups"]) || array_key_exists("descripcionCups", $context) ? $context["descripcionCups"] : (function () { throw new RuntimeError('Variable "descripcionCups" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-xxs lg:text-xs text-gray-500 font-thin\" placeholder=\"Search\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inline-flex mx-3 w-1/3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"border rounded p-3 w-20 h-fit bg-green-500 text-white shadow-sm\">Filtrar</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"flex flex-row my-4\">
\t\t\t\t\t";
        // line 57
        yield from $this->loadTemplate("components/modal.html.twig", "example/index.html copy.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "\t\t\t\t\t<button onclick=\"window.location.href='/export';\" class=\"flex items-center justify-center px-3 py-2 mr-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 rounded dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50\">
\t\t\t\t\t\t<svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>

\t\t\t\t\t\t<span>Exportar</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg\">
\t\t\t\t<table class=\"min-w-full\">
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
        // line 85
        yield "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"bg-white\">
\t\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 89
            yield "\t\t\t\t\t\t\t<tr x-data=\"{informeoportunidad: false}\" id=\"fila-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 89), "html", null, true);
            yield "\" x-init=\"informeoportunidad = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "informeOportunidad", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "informeOportunidad", [], "any", false, false, false, 89), false)) : (false))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button @click=\"\$dispatch('open-modal-update', {id: ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 93)), "html", null, true);
            yield "});\" class=\"border rounded p-1 m-1 bg-orange-500 text-white border-orange-500\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button @click=\"eliminarDato(";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield ")\" class=\"border rounded p-1 m-1 bg-red-500 text-white border-red-500\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-gray-800\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 110), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-blue-900\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "cups", [], "any", false, false, false, 115), "codigoCups", [], "any", false, false, false, 115), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "cups", [], "any", false, false, false, 117), "descripcionCups", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">";
            // line 118
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "tipoServicio", [], "any", false, false, false, 118) == 1)) ? ("Consulta") : ("Procedimiento"));
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t<span class=\"relative inline-block px-3 py-1 font-semibold leading-tight\">
\t\t\t\t\t\t\t\t\t\t<span aria-hidden class=\"absolute inset-0 opacity-50 rounded-full\" :class=\"{'text-green-900 bg-green-200': informeoportunidad, 'text-red-900 bg-red-200': !informeoportunidad}\"></span>
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 122
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "informeOportunidad", [], "any", false, false, false, 122)) ? ("true") : ("false"));
            yield "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "diagnosticoDefaults", [], "any", false, false, false, 126), "cie10", [], "any", false, false, false, 126), "html", null, true);
            yield ":
\t\t\t\t\t\t\t\t\t";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "diagnosticoDefaults", [], "any", false, false, false, 127), "nombre", [], "any", false, false, false, 127), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "finalidad", [], "any", false, false, false, 129), "codigo", [], "any", false, false, false, 129), "html", null, true);
            yield ":
\t\t\t\t\t\t\t\t\t";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "finalidad", [], "any", false, false, false, 130), "nombre", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "causaExterna", [], "any", false, false, false, 131), "codigo", [], "any", false, false, false, 131), "html", null, true);
            yield ":
\t\t\t\t\t\t\t\t\t";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "causaExterna", [], "any", false, false, false, 132), "nombre", [], "any", false, false, false, 132), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "servicioRipsCode", [], "any", false, false, false, 133), "codigo", [], "any", false, false, false, 133), "html", null, true);
            yield ":
\t\t\t\t\t\t\t\t\t";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["value"], "servicioRipsCode", [], "any", false, false, false, 134), "nombre", [], "any", false, false, false, 134), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t";
            // line 136
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "tipoDiagnostico", [], "any", false, false, false, 136) == "01")) {
                // line 137
                yield "\t\t\t\t\t\t\t\t\t\tImpresión diagnóstica
\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["value"], "tipoDiagnostico", [], "any", false, false, false, 138) == "02")) {
                // line 139
                yield "\t\t\t\t\t\t\t\t\t\tConfirmado nuevo
\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["value"], "tipoDiagnostico", [], "any", false, false, false, 140) == "03")) {
                // line 141
                yield "\t\t\t\t\t\t\t\t\t\tConfirmado repetido
\t\t\t\t\t\t\t\t\t";
            }
            // line 143
            yield "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "createdBy", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "createdAt", [], "any", false, false, false, 145), "d-m-Y H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t";
            // line 149
            yield "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p class=\"text-sm leading-5 text-blue-700\">
\t\t\t\t\t\t\tShowing
\t\t\t\t\t\t\t<span class=\"font-medium\">
\t\t\t\t\t\t\t\t";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 158, $this->source); })()) + 1), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t<!-- Mostramos el primer elemento en la página actual -->
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tto
\t\t\t\t\t\t\t<span class=\"font-medium\">
\t\t\t\t\t\t\t\t";
        // line 163
        if ((((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 163, $this->source); })()) + (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 163, $this->source); })())) > (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 163, $this->source); })()))) {
            // line 164
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 164, $this->source); })()), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
        } else {
            // line 166
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 166, $this->source); })()) + (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 166, $this->source); })())), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 168
        yield "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tof
\t\t\t\t\t\t\t<span class=\"font-medium\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 170, $this->source); })()), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\tresults
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<nav class=\"relative z-0 inline-flex shadow-sm\">

\t\t\t\t\t\t\t";
        // line 177
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 177, $this->source); })()) > 1)) {
            // line 178
            yield "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 179, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150\" aria-label=\"Previous\" v-on:click.prevent=\"changePage(pagination.current_page - 1)\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 186
        yield "
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 188, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 189
            yield "\t\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => ($context["page"] + 1)]), "html", null, true);
            yield "\" class=\"-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary\">
\t\t\t\t\t\t\t\t\t\t";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] + 1), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 195
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 195, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 195, $this->source); })()))) {
            // line 196
            yield "\t\t\t\t\t\t\t\t<div v-if=\"pagination.current_page < pagination.last_page\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 197, $this->source); })()) + 1)]), "html", null, true);
            yield "\" class=\"-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 204
        yield "\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "flashes", ["success"], "method", false, false, false, 211));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 212
            yield "\t\t<div class=\"alert alert-success text-green-700\">
\t\t\t";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "
\t";
        // line 217
        yield from $this->loadTemplate("components/modalUpdate.html.twig", "example/index.html copy.twig", 217)->unwrap()->yield($context);
        // line 218
        yield "\t <script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\tfunction eliminarDato(id) {
\t\t\tif (confirm('¿Estás seguro de que deseas eliminar este dato?')) {
\t\t\t\t// Hacer la solicitud AJAX al controlador Symfony
\t\t\t\tfetch('/delete/' + id, {
\t\t\t\t\tmethod: 'DELETE',
\t\t\t\t\theaders: {
\t\t\t\t\t\t'Content-Type': 'application/json',
\t\t\t\t\t\t'X-Requested-With': 'XMLHttpRequest'
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.then(response => response.json())
\t\t\t\t.then(data => {
\t\t\t\t\tif (data.success) {
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t} else {
\t\t\t\t\t\talert('Hubo un error al eliminar el dato.');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t
\t\tfunction abrirModal(id) {
\t\t\t// Abre el modal
\t
\t\t\t// Hacer la solicitud AJAX para obtener los datos del formulario
\t\t\tfetch('/edit/' + id)  // Cambia esta ruta a la que devuelve los datos que quieres cargar
\t\t\t\t.then(response => response.json())
\t\t\t\t.then(data => {
\t\t\t\t\tif (data.success) {
\t\t\t\t\t\t// Rellenar los campos del formulario con los datos obtenidos
\t\t\t\t\t\tvar cupsElement = document.getElementById('cups');
\t
\t\t\t\t\t\t// Asignar el valor del atributo data-value
\t\t\t\t\t\tcupsElement.dataset.default = data.cups;
\t\t\t\t\t\tdocument.getElementById('cups').setAttribute('data-default', data.cups);
\t
\t\t\t\t\t\t// Despachar un evento personalizado con los datos obtenidos
\t\t\t\t\t\tconst event = new CustomEvent('modal-data-loaded', {
\t\t\t\t\t\t\tdetail: {
\t\t\t\t\t\t\t\tcups: data.cups
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tdocument.dispatchEvent(event);
\t\t\t\t\t} else {
\t\t\t\t\t\talert('Hubo un error al obtener los datos.');
\t\t\t\t\t}
\t\t\t});
\t\t}
\t
\t\t</script>
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
        return "example/index.html copy.twig";
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
        return array (  464 => 218,  462 => 217,  459 => 216,  450 => 213,  447 => 212,  443 => 211,  434 => 204,  424 => 197,  421 => 196,  419 => 195,  415 => 193,  406 => 190,  401 => 189,  397 => 188,  393 => 186,  383 => 179,  380 => 178,  378 => 177,  368 => 170,  364 => 168,  358 => 166,  352 => 164,  350 => 163,  342 => 158,  333 => 151,  326 => 149,  322 => 145,  318 => 144,  315 => 143,  311 => 141,  309 => 140,  306 => 139,  304 => 138,  301 => 137,  299 => 136,  294 => 134,  290 => 133,  286 => 132,  282 => 131,  278 => 130,  274 => 129,  269 => 127,  265 => 126,  258 => 122,  251 => 118,  247 => 117,  242 => 115,  234 => 110,  220 => 99,  211 => 93,  201 => 89,  197 => 88,  192 => 85,  164 => 58,  162 => 57,  149 => 47,  127 => 28,  109 => 13,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ExampleController!
{% endblock %}

{% block body %}

\t<div>
\t\t<!-- component -->
\t\t<div class=\"-my-2 py-2 overflow-x-auto\">
\t\t\t<div class=\"align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12\">
\t\t\t\t<h2 class=\"text-[30px] font-bold mt-6 mb-10\">Listado CUPS - RIPS</h2>
\t\t\t\t<form method=\"get\" action=\"{{ path('index') }}\" class=\"flex flex-row\">
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
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"codigo_cups\" value=\"{{ codigoCups }}\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-xxs lg:text-xs text-gray-500 font-thin\" placeholder=\"Search\">
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
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"descripcion_cups\" value=\"{{ descripcionCups }}\" class=\"flex-shrink flex-grow flex leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-2 relative focus:outline-none text-xxs lg:text-xs text-gray-500 font-thin\" placeholder=\"Search\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inline-flex mx-3 w-1/3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"border rounded p-3 w-20 h-fit bg-green-500 text-white shadow-sm\">Filtrar</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"flex flex-row my-4\">
\t\t\t\t\t{% include 'components/modal.html.twig' %}
\t\t\t\t\t<button onclick=\"window.location.href='/export';\" class=\"flex items-center justify-center px-3 py-2 mr-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 rounded dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50\">
\t\t\t\t\t\t<svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>

\t\t\t\t\t\t<span>Exportar</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg\">
\t\t\t\t<table class=\"min-w-full\">
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
\t\t\t\t\t\t{% for value in paginator %}
\t\t\t\t\t\t\t<tr x-data=\"{informeoportunidad: false}\" id=\"fila-{{ value.id }}\" x-init=\"informeoportunidad = {{ value.informeOportunidad|default(false)|json_encode() }}\">
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button @click=\"\$dispatch('open-modal-update', {id: {{ value.id|json_encode }}});\" class=\"border rounded p-1 m-1 bg-orange-500 text-white border-orange-500\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button @click=\"eliminarDato({{ value.id }})\" class=\"border rounded p-1 m-1 bg-red-500 text-white border-red-500\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-gray-800\">{{ value.id }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500\">
\t\t\t\t\t\t\t\t\t<div class=\"text-xs leading-5 text-blue-900\">{{ value.cups.codigoCups }}</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">{{ value.cups.descripcionCups }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">{{ value.tipoServicio == 1 ? 'Consulta': 'Procedimiento' }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t<span class=\"relative inline-block px-3 py-1 font-semibold leading-tight\">
\t\t\t\t\t\t\t\t\t\t<span aria-hidden class=\"absolute inset-0 opacity-50 rounded-full\" :class=\"{'text-green-900 bg-green-200': informeoportunidad, 'text-red-900 bg-red-200': !informeoportunidad}\"></span>
\t\t\t\t\t\t\t\t\t\t<span>{{ value.informeOportunidad ? 'true': 'false' }}</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t{{ value.diagnosticoDefaults.cie10  }}:
\t\t\t\t\t\t\t\t\t{{ value.diagnosticoDefaults.nombre }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">{{ value.finalidad.codigo }}:
\t\t\t\t\t\t\t\t\t{{ value.finalidad.nombre}}</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">{{ value.causaExterna.codigo }}:
\t\t\t\t\t\t\t\t\t{{ value.causaExterna.nombre}}</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">{{ value.servicioRipsCode.codigo }}:
\t\t\t\t\t\t\t\t\t{{ value.servicioRipsCode.nombre}}</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t{% if value.tipoDiagnostico == '01' %}
\t\t\t\t\t\t\t\t\t\tImpresión diagnóstica
\t\t\t\t\t\t\t\t\t{% elseif value.tipoDiagnostico == '02' %}
\t\t\t\t\t\t\t\t\t\tConfirmado nuevo
\t\t\t\t\t\t\t\t\t{% elseif value.tipoDiagnostico == '03' %}
\t\t\t\t\t\t\t\t\t\tConfirmado repetido
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">{{ value.createdBy }}</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-xs leading-5\">{{ value.createdAt|date('d-m-Y H:i') }}</td>
\t\t\t\t\t\t\t\t{# <td class=\"px-3 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-xs leading-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none\">View Details</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td> #}
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p class=\"text-sm leading-5 text-blue-700\">
\t\t\t\t\t\t\tShowing
\t\t\t\t\t\t\t<span class=\"font-medium\">
\t\t\t\t\t\t\t\t{{ (offset + 1) }}
\t\t\t\t\t\t\t\t<!-- Mostramos el primer elemento en la página actual -->
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tto
\t\t\t\t\t\t\t<span class=\"font-medium\">
\t\t\t\t\t\t\t\t{% if (offset + itemsPerPage) > totalCount %}
\t\t\t\t\t\t\t\t\t{{ totalCount }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ (offset + itemsPerPage) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tof
\t\t\t\t\t\t\t<span class=\"font-medium\">{{ totalCount }}</span>
\t\t\t\t\t\t\tresults
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<nav class=\"relative z-0 inline-flex shadow-sm\">

\t\t\t\t\t\t\t{% if page > 1 %}
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index', { 'page': page - 1 }) }}\" class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150\" aria-label=\"Previous\" v-on:click.prevent=\"changePage(pagination.current_page - 1)\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{% for page in 0..totalPages - 1 %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index', { 'page': page + 1 }) }}\" class=\"-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary\">
\t\t\t\t\t\t\t\t\t\t{{ page + 1 }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% if page < totalPages %}
\t\t\t\t\t\t\t\t<div v-if=\"pagination.current_page < pagination.last_page\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index', { 'page': page + 1 }) }}\" class=\"-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"h-5 w-5\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success text-green-700\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}

\t{% include 'components/modalUpdate.html.twig' %}
\t <script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\tfunction eliminarDato(id) {
\t\t\tif (confirm('¿Estás seguro de que deseas eliminar este dato?')) {
\t\t\t\t// Hacer la solicitud AJAX al controlador Symfony
\t\t\t\tfetch('/delete/' + id, {
\t\t\t\t\tmethod: 'DELETE',
\t\t\t\t\theaders: {
\t\t\t\t\t\t'Content-Type': 'application/json',
\t\t\t\t\t\t'X-Requested-With': 'XMLHttpRequest'
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.then(response => response.json())
\t\t\t\t.then(data => {
\t\t\t\t\tif (data.success) {
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t} else {
\t\t\t\t\t\talert('Hubo un error al eliminar el dato.');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t
\t\tfunction abrirModal(id) {
\t\t\t// Abre el modal
\t
\t\t\t// Hacer la solicitud AJAX para obtener los datos del formulario
\t\t\tfetch('/edit/' + id)  // Cambia esta ruta a la que devuelve los datos que quieres cargar
\t\t\t\t.then(response => response.json())
\t\t\t\t.then(data => {
\t\t\t\t\tif (data.success) {
\t\t\t\t\t\t// Rellenar los campos del formulario con los datos obtenidos
\t\t\t\t\t\tvar cupsElement = document.getElementById('cups');
\t
\t\t\t\t\t\t// Asignar el valor del atributo data-value
\t\t\t\t\t\tcupsElement.dataset.default = data.cups;
\t\t\t\t\t\tdocument.getElementById('cups').setAttribute('data-default', data.cups);
\t
\t\t\t\t\t\t// Despachar un evento personalizado con los datos obtenidos
\t\t\t\t\t\tconst event = new CustomEvent('modal-data-loaded', {
\t\t\t\t\t\t\tdetail: {
\t\t\t\t\t\t\t\tcups: data.cups
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tdocument.dispatchEvent(event);
\t\t\t\t\t} else {
\t\t\t\t\t\talert('Hubo un error al obtener los datos.');
\t\t\t\t\t}
\t\t\t});
\t\t}
\t
\t\t</script>
{% endblock %}
", "example/index.html copy.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\example\\index.html copy.twig");
    }
}

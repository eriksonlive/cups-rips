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

/* components/modal-component.html.twig */
class __TwigTemplate_421c1c466f576bcb3dd4006a9cf49fa1 extends Template
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
            'modal_title' => [$this, 'block_modal_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modal-component.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modal-component.html.twig"));

        // line 1
        yield "<div x-data=\"{ modalOpen: false, update: false }\" x-init=\"\$watch('modalOpen', (modalState) => { if (!modalState) \$dispatch('modal-close'); });\" @modal-open.window=\"modalOpen = true; update = \$event.detail.update;\" @modal-close.window=\"modalOpen = false;\">

\t<div x-show=\"modalOpen\" class=\"fixed inset-0 z-50 overflow-y-auto\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\" x-cloak style=\"display:none\">
\t\t<div class=\"flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0\">
\t\t\t<div x-cloak @click=\"modalOpen = false\" x-show=\"modalOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40\" aria-hidden=\"true\"></div>

\t\t\t<div x-cloak x-show=\"modalOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" class=\"inline-block w-full max-w-xl p-8 my-20 text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl\">
\t\t\t\t<div class=\"flex items-center justify-between space-x-4\">
\t\t\t\t\t<h1 class=\"text-xl font-medium text-gray-800 \">
\t\t\t\t\t\t";
        // line 10
        yield from $this->unwrap()->yieldBlock('modal_title', $context, $blocks);
        // line 12
        yield "\t\t\t\t\t</h1>

\t\t\t\t\t<button @click=\"modalOpen = false\" class=\"text-gray-600 focus:outline-none hover:text-gray-700\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t";
        // line 21
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 22
        yield "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
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

        yield "Modal
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/modal-component.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  115 => 21,  91 => 10,  76 => 22,  74 => 21,  63 => 12,  61 => 10,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div x-data=\"{ modalOpen: false, update: false }\" x-init=\"\$watch('modalOpen', (modalState) => { if (!modalState) \$dispatch('modal-close'); });\" @modal-open.window=\"modalOpen = true; update = \$event.detail.update;\" @modal-close.window=\"modalOpen = false;\">

\t<div x-show=\"modalOpen\" class=\"fixed inset-0 z-50 overflow-y-auto\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\" x-cloak style=\"display:none\">
\t\t<div class=\"flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0\">
\t\t\t<div x-cloak @click=\"modalOpen = false\" x-show=\"modalOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40\" aria-hidden=\"true\"></div>

\t\t\t<div x-cloak x-show=\"modalOpen\" x-transition:enter=\"transition ease-out duration-300 transform\" x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave=\"transition ease-in duration-200 transform\" x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" class=\"inline-block w-full max-w-xl p-8 my-20 text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl\">
\t\t\t\t<div class=\"flex items-center justify-between space-x-4\">
\t\t\t\t\t<h1 class=\"text-xl font-medium text-gray-800 \">
\t\t\t\t\t\t{% block modal_title %}Modal
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</h1>

\t\t\t\t\t<button @click=\"modalOpen = false\" class=\"text-gray-600 focus:outline-none hover:text-gray-700\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t{% block body %}{% endblock %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "components/modal-component.html.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\components\\modal-component.html.twig");
    }
}

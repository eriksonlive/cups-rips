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

/* components/alert-component.html.twig */
class __TwigTemplate_e05ddc7635d07c72b9367c9456f45332 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/alert-component.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/alert-component.html.twig"));

        // line 1
        yield "<div x-data=\"{ showAlert: false, success: true, error: false, message: 'Enviado Correctamente' }\" x-show=\"showAlert\" @alert.window=\"
\t        if (\$event.detail.success) {
\t            success = true;
\t            error = false;
\t            message = \$event.detail.success;
\t        } else if (\$event.detail.error) {
\t            success = false;
\t            error = true;
\t            message = \$event.detail.error;
\t        }
\t        showAlert = true;
\t        setTimeout(() => showAlert = false, 2000);
\t    \" class=\"fixed bottom-4 right-4 p-4 max-w-sm border rounded-lg shadow-md transition-opacity duration-300 ease-in-out z-50\" style=\"display: none\" :class=\"{'bg-green-100 border-green-400 text-green-700': success, 'bg-red-100 border-red-400 text-red-700': error}\">
\t<div class=\"flex items-center\">
\t\t<svg class=\"w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewbox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" :class=\"{'text-green-700': success, 'text-red-700': error}\">
\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\"></path>
\t\t</svg>
\t\t<span x-text=\"message\"></span>
\t</div>
\t<button @click=\"showAlert = false\" class=\"absolute top-2 right-2 hover:text-opacity-70\">
\t\t<svg class=\"w-4 h-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
\t\t</svg>
\t</button>
</div>
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
        return "components/alert-component.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div x-data=\"{ showAlert: false, success: true, error: false, message: 'Enviado Correctamente' }\" x-show=\"showAlert\" @alert.window=\"
\t        if (\$event.detail.success) {
\t            success = true;
\t            error = false;
\t            message = \$event.detail.success;
\t        } else if (\$event.detail.error) {
\t            success = false;
\t            error = true;
\t            message = \$event.detail.error;
\t        }
\t        showAlert = true;
\t        setTimeout(() => showAlert = false, 2000);
\t    \" class=\"fixed bottom-4 right-4 p-4 max-w-sm border rounded-lg shadow-md transition-opacity duration-300 ease-in-out z-50\" style=\"display: none\" :class=\"{'bg-green-100 border-green-400 text-green-700': success, 'bg-red-100 border-red-400 text-red-700': error}\">
\t<div class=\"flex items-center\">
\t\t<svg class=\"w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewbox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" :class=\"{'text-green-700': success, 'text-red-700': error}\">
\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\"></path>
\t\t</svg>
\t\t<span x-text=\"message\"></span>
\t</div>
\t<button @click=\"showAlert = false\" class=\"absolute top-2 right-2 hover:text-opacity-70\">
\t\t<svg class=\"w-4 h-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
\t\t</svg>
\t</button>
</div>
", "components/alert-component.html.twig", "D:\\Trabajo\\Crud Synfony\\symfony_5-components\\templates\\components\\alert-component.html.twig");
    }
}

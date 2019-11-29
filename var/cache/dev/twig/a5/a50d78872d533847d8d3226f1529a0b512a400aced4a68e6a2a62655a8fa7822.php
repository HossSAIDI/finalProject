<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profile/profile_client.html.twig */
class __TwigTemplate_10d4c1db8a0b90a6baa7871b70dfb021238608375815dea2d8a877f94ea9556b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile_client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile_client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile_client.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<aside id=\"colorlib-hero\">
\t\t\t<div class=\"flexslider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t   \t<li style=\"background-image: url(images/img_bg_5.jpg);\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner slider-text-inner2 text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Votre Profil</h2>
\t\t\t\t   \t\t\t\t\t<h1>Bonjour, ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "firstname", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t  \t</ul>
\t\t  \t</div>
\t\t</aside>
\t\t
\t\t
\t\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 room-wrap animate-box\">
\t\t\t\t\t\t<div class=\"desc text-center\">
\t\t\t\t\t\t\t<h1><i class=\"fa fa-check-square\"></i></h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-book\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_list", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\" >Mes reservations</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 room-wrap animate-box\">
\t\t\t\t\t\t<div class=\"desc text-center\">
\t\t\t\t\t\t\t<h1><i class=\"fa fa-user\"></i></h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-book\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" >Modifier mon profil</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 room-wrap animate-box\">
\t\t\t\t\t\t<div class=\"desc text-center\">
\t\t\t\t\t\t\t<h1><i class=\"fa fa-calendar\"></i></h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-book\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" >Create new reservation</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  113 => 40,  104 => 34,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}


<aside id=\"colorlib-hero\">
\t\t\t<div class=\"flexslider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t   \t<li style=\"background-image: url(images/img_bg_5.jpg);\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner slider-text-inner2 text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Votre Profil</h2>
\t\t\t\t   \t\t\t\t\t<h1>Bonjour, {{ client.firstname }}</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t  \t</ul>
\t\t  \t</div>
\t\t</aside>
\t\t
\t\t
\t\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 room-wrap animate-box\">
\t\t\t\t\t\t<div class=\"desc text-center\">
\t\t\t\t\t\t\t<h1><i class=\"fa fa-check-square\"></i></h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-book\" href=\"{{ path('reservation_list', {'id': client.id}) }}\" >Mes reservations</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 room-wrap animate-box\">
\t\t\t\t\t\t<div class=\"desc text-center\">
\t\t\t\t\t\t\t<h1><i class=\"fa fa-user\"></i></h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-book\" href=\"{{ path('client_edit', {'id': client.id}) }}\" >Modifier mon profil</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 room-wrap animate-box\">
\t\t\t\t\t\t<div class=\"desc text-center\">
\t\t\t\t\t\t\t<h1><i class=\"fa fa-calendar\"></i></h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-book\" href=\"{{ path('reservation_new', {'id': client.id}) }}\" >Create new reservation</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

{% endblock %}
", "profile/profile_client.html.twig", "/home/houssem_saidi/CSC4101/projet_final/AgVoy-Fin/templates/profile/profile_client.html.twig");
    }
}

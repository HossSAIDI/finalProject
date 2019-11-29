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

/* room_par_region/index.html.twig */
class __TwigTemplate_38edd502d014fe0effbe5d882f4dce4e082cfe61a6cab9f1abb1df266135875f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room_par_region/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room_par_region/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room_par_region/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Regions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\" style=\"background-image : url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_3.jpg"), "html", null, true);
        echo "');background-repeat:no-repeat;background-position:center center; width:100%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Découvrez nos magnifiques régions</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <h1></h1>
 
    <br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
        
        <table class=\"table table-hover\">
        \t<thead>
        \t<th>Show rooms</th>
        \t<th>Nom de la region</th>
        \t<th>Presentation</th>
        \t</thead>
        \t<tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 31
            echo "        \t
            <tr>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rooms_par_region", ["id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i></td>
                <td> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "presentation", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" style=\"margin-left: 100px\">Editer cette region</a>
                    ";
            }
            // line 40
            echo "                </td>
                <br>
               
               
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"5\">Aucune occurence trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

        ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "            <br>
            <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_new");
            echo "\">Créer une nouvelle région</a>
        ";
        }
        // line 56
        echo "
        </tbody>
\t</table> 
\t</div>   

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room_par_region/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  174 => 54,  171 => 53,  169 => 52,  165 => 50,  156 => 46,  146 => 40,  140 => 38,  138 => 37,  133 => 35,  129 => 34,  125 => 33,  121 => 31,  116 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Regions{% endblock %}

{% block body %}
\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\" style=\"background-image : url('{{ asset('assets/images/img_bg_3.jpg')}}');background-repeat:no-repeat;background-position:center center; width:100%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Découvrez nos magnifiques régions</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <h1></h1>
 
    <br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
        
        <table class=\"table table-hover\">
        \t<thead>
        \t<th>Show rooms</th>
        \t<th>Nom de la region</th>
        \t<th>Presentation</th>
        \t</thead>
        \t<tbody>
        {% for region in regions %}
        \t
            <tr>
                <td><a href=\"{{ path('rooms_par_region', {'id': region.id}) }}\"><i class=\"fa fa-eye\"></i></td>
                <td> {{ region.name }}</a></td>
                <td>{{ region.presentation }}</td>
                <td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('region_edit', {'id': region.id}) }}\" style=\"margin-left: 100px\">Editer cette region</a>
                    {% endif %}
                </td>
                <br>
               
               
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucune occurence trouvée</td>
            </tr>
        {% endfor %}


        {% if is_granted('ROLE_ADMIN') %}
            <br>
            <a href=\"{{ path('region_new') }}\">Créer une nouvelle région</a>
        {% endif %}

        </tbody>
\t</table> 
\t</div>   

    
{% endblock %}", "room_par_region/index.html.twig", "/home/houssem_saidi/CSC4101/projetFinal/AgVoy-Fin/templates/room_par_region/index.html.twig");
    }
}

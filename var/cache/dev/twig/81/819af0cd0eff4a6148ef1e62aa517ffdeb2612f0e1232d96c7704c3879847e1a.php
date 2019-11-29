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

/* region/index.html.twig */
class __TwigTemplate_daea1b4f20d853c9693d467006c0d6b4b8b705009d5e6aeb7c1cf368823d953c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "region/index.html.twig", 1);
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

\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Region index </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<br><br><br>
\t
\t<div class=\"row text-center\">
    \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
    \t\t<button class=\"btn btn-success\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_new");
        echo "\" style=\"color:black; font-size:18px;\">Créer une nouvelle région</a></button>
    \t</div>
\t</div>
\t
\t<br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
\t\t\t<table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Présentation</th>
                <th>Pays</th>
                <th>Interagir</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "presentation", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "country", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"style=\"color: blue; font-size: 16px;\">Aperçu&nbsp;&nbsp;&nbsp;</a>
                    ";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"style=\"color: green; font-size: 16px;\">Editer</a>
                    ";
            }
            // line 48
            echo "                    
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"6\">Aucune occurence trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

\t\t</div>
\t\t<div class=\"col-lg-2\"></div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "region/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  149 => 52,  141 => 48,  135 => 46,  133 => 45,  129 => 44,  124 => 42,  120 => 41,  116 => 40,  113 => 39,  108 => 38,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}


\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Region index </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<br><br><br>
\t
\t<div class=\"row text-center\">
    \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
    \t\t<button class=\"btn btn-success\"><a href=\"{{ path('region_new') }}\" style=\"color:black; font-size:18px;\">Créer une nouvelle région</a></button>
    \t</div>
\t</div>
\t
\t<br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
\t\t\t<table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Présentation</th>
                <th>Pays</th>
                <th>Interagir</th>
            </tr>
        </thead>
        <tbody>
        {% for region in regions %}
            <tr>
                <td>{{ region.name }}</td>
                <td>{{ region.presentation }}</td>
                <td>{{ region.country }}</td>
                <td>
                    <a href=\"{{ path('region_show', {'id': region.id}) }}\"style=\"color: blue; font-size: 16px;\">Aperçu&nbsp;&nbsp;&nbsp;</a>
                    {% if is_granted('ROLE_ADMIN')  %}
                    <a href=\"{{ path('region_edit', {'id': region.id}) }}\"style=\"color: green; font-size: 16px;\">Editer</a>
                    {% endif %}
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Aucune occurence trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

\t\t</div>
\t\t<div class=\"col-lg-2\"></div>
\t</div>
{% endblock %}
", "region/index.html.twig", "/home/houssem_saidi/CSC4101/projet_final/AgVoy-Fin/templates/region/index.html.twig");
    }
}

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

/* client/index.html.twig */
class __TwigTemplate_fc8758e2554ad6bff7e0596e6d0d7d15b137d7301dc8fd6d74c354fcbda921da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\" style=\"background-image : url('";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_3.jpg"), "html", null, true);
        echo "');background-repeat:no-repeat;background-position:center center; width:100%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Client index </h2>
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
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        echo "\" style=\"color:black; font-size:18px;\">Create new</a></button>
    \t</div>
\t</div>
   
\t<br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
\t\t\t<table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>FamilyName</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Country</th>
                <th>PhoneNumber</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "familyName", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "gender", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "country", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "phoneNumber", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"style=\"color: blue; font-size: 16px;\">show&nbsp;&nbsp;&nbsp;</a>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"style=\"color: green; font-size: 16px;\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 60,  160 => 56,  151 => 52,  147 => 51,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  119 => 43,  114 => 42,  89 => 20,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}


\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\" style=\"background-image : url('{{ asset('assets/images/img_bg_3.jpg')}}');background-repeat:no-repeat;background-position:center center; width:100%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Client index </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<br><br><br>
\t
\t<div class=\"row text-center\">
    \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
    \t\t<button class=\"btn btn-success\"><a href=\"{{ path('client_new') }}\" style=\"color:black; font-size:18px;\">Create new</a></button>
    \t</div>
\t</div>
   
\t<br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
\t\t\t<table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>FamilyName</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Country</th>
                <th>PhoneNumber</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td>{{ client.firstname }}</td>
                <td>{{ client.familyName }}</td>
                <td>{{ client.email }}</td>
                <td>{{ client.gender }}</td>
                <td>{{ client.country }}</td>
                <td>{{ client.phoneNumber }}</td>
                <td>
                    <a href=\"{{ path('client_show', {'id': client.id}) }}\"style=\"color: blue; font-size: 16px;\">show&nbsp;&nbsp;&nbsp;</a>
                    <a href=\"{{ path('client_edit', {'id': client.id}) }}\"style=\"color: green; font-size: 16px;\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

\t\t</div>
\t\t<div class=\"col-lg-2\"></div>
\t</div>

{% endblock %}
", "client/index.html.twig", "/home/houssem_saidi/CSC4101/projetFinal/AgVoy-Fin/templates/client/index.html.twig");
    }
}

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

/* room/index.html.twig */
class __TwigTemplate_168aace76642d8e93e02316679b91f57b31a00e08bba3745f2e2e1ac808a24ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\"  style=\"background-image : url('";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_3.jpg"), "html", null, true);
        echo "');background-repeat:no-repeat;background-position:center center; width:100%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Découvrez nos chambres</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
<br><br><br>
\t
\t<div class=\"row text-center\">
    \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
    \t ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
            // line 21
            echo "    \t\t<button class=\"btn btn-success\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_new");
            echo "\" style=\"color:black; font-size:18px;\">Créer une nouvelle Chambre</a></button>
        ";
        }
        // line 23
        echo "    
    \t</div>
\t</div>
\t
\t
\t\t<br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
\t\t\t<table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Résumé</th>
                <th>Description</th>
                <th>Capacité</th>
                <th>Superficie</th>
                <th>Prix</th>
                <th>Adresse</th>
                <th>Interagir</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 47
            echo "            <tr>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "summary", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "superficy", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "address", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_show", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Aperçu</a>
                    ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
                // line 57
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Editer cette chambre</a>
                    ";
            }
            // line 59
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <tr>
                <td colspan=\"6\">Aucune occurence trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return "room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 66,  173 => 62,  166 => 59,  160 => 57,  158 => 56,  154 => 55,  149 => 53,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  126 => 47,  121 => 46,  96 => 23,  90 => 21,  88 => 20,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}


{% block body %}

<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\"  style=\"background-image : url('{{ asset('assets/images/img_bg_3.jpg')}}');background-repeat:no-repeat;background-position:center center; width:100%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t<h2>Découvrez nos chambres</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
<br><br><br>
\t
\t<div class=\"row text-center\">
    \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
    \t {% if  is_granted('ROLE_OWNER')   %}
    \t\t<button class=\"btn btn-success\"><a href=\"{{ path('room_new') }}\" style=\"color:black; font-size:18px;\">Créer une nouvelle Chambre</a></button>
        {% endif %}
    
    \t</div>
\t</div>
\t
\t
\t\t<br><br><br>

\t<div class=\"row\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"col-lg-8\">
\t\t\t<table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Résumé</th>
                <th>Description</th>
                <th>Capacité</th>
                <th>Superficie</th>
                <th>Prix</th>
                <th>Adresse</th>
                <th>Interagir</th>
            </tr>
        </thead>
        <tbody>
        {% for room in rooms %}
            <tr>
                <td>{{ room.summary }}</td>
                <td>{{ room.description }}</td>
                <td>{{ room.capacity }}</td>
                <td>{{ room.superficy }}</td>
                <td>{{ room.price }}</td>
                <td>{{ room.address }}</td>
                <td>
                    <a href=\"{{ path('room_show', {'id': room.id}) }}\">Aperçu</a>
                    {% if  is_granted('ROLE_OWNER')   %}
                    <a href=\"{{ path('room_edit', {'id': room.id}) }}\">Editer cette chambre</a>
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
", "room/index.html.twig", "/home/houssem_saidi/CSC4101/projetFinal/AgVoy-Fin/templates/room/index.html.twig");
    }
}

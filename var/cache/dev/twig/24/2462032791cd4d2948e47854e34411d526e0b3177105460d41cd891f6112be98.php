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

/* client/_form.html.twig */
class __TwigTemplate_503d2870d8c3e0dad2129c128d0ccbb2ddaa1d44896fc4717efa7d56aaeeef6d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

<div id=\"colorlib-contact\">
\t<div class=\"container\">
\t\t<div class=\"row\">
        \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
        \t\t<h3>Describe your room</h3>
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 11), 'row');
        echo "
                        </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "familyName", [], "any", false, false, false, 17), 'row');
        echo "
                        </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
   \t\t\t\t\t\t ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gender", [], "any", false, false, false, 23), 'row');
        echo "
   \t\t\t\t\t\t </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 29), 'row');
        echo "
                        </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
  \t\t\t\t\t  ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 35), 'row');
        echo "
   
      \t<div class=\"form-group text-center\">
        \t\t\t<button class=\"btn btn-success\">";
        // line 38
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        \t\t</div>
        \t</div>
        </div>
    </div>
</div>
";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  100 => 38,  94 => 35,  85 => 29,  76 => 23,  67 => 17,  58 => 11,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form) }}

<div id=\"colorlib-contact\">
\t<div class=\"container\">
\t\t<div class=\"row\">
        \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
        \t\t<h3>Describe your room</h3>
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
                        {{ form_row(form.firstname) }}
                        </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
                        {{ form_row(form.familyName) }}
                        </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
   \t\t\t\t\t\t {{ form_row(form.gender) }}
   \t\t\t\t\t\t </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
                        {{ form_row(form.country) }}
                        </div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
  \t\t\t\t\t  {{ form_row(form.phoneNumber) }}
   
      \t<div class=\"form-group text-center\">
        \t\t\t<button class=\"btn btn-success\">{{ button_label|default('Save') }}</button>
        \t\t</div>
        \t</div>
        </div>
    </div>
</div>
{{ form_end(form) }}
", "client/_form.html.twig", "/home/houssem_saidi/CSC4101/projet_final/AgVoy-Fin/templates/client/_form.html.twig");
    }
}

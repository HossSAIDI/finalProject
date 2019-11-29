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

/* room/_form.html.twig */
class __TwigTemplate_1ea52f42bbc3af89dba063fdd6f019fe20d4b7cc2bea0660e461ef8d24490c68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

<div id=\"colorlib-contact\">
\t<div class=\"container\">
\t\t<div class=\"row\">
        \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
        \t\t<h3>Describe your room</h3>
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "summary", [], "any", false, false, false, 10), 'row');
        echo "
        \t\t\t</div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 16), 'row');
        echo "
        \t\t\t</div>
        \t\t</div>
        \t\t\t</div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
        \t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "capacity", [], "any", false, false, false, 26), 'row');
        echo "
        \t\t\t</div>
        \t\t\t<div class=\"col-md-6\">
        \t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "superficy", [], "any", false, false, false, 29), 'row');
        echo "
        \t\t\t</div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 35), 'row');
        echo "
        \t\t\t</div>
        \t\t</div>
        
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 41), 'row');
        echo "
        \t\t\t</div>
        \t\t\t<div class=\"col-md-6\">
        \t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "region", [], "any", false, false, false, 44), 'row');
        echo "
        \t\t\t</div>
        \t\t</div>
        
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageName", [], "any", false, false, false, 50), 'row');
        echo "
        \t\t\t</div>
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 53), 'row');
        echo "
    \t\t\t\t<br><br><br>
        \t\t\t\t
        \t\t
        \t\t<div class=\"form-group text-center\">
        \t\t\t<button class=\"btn btn-success\">";
        // line 58
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        \t\t</div>
        \t</div>
        </div>
    </div>
</div>
        
    
    
    
";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "room/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 68,  130 => 58,  122 => 53,  116 => 50,  107 => 44,  101 => 41,  92 => 35,  83 => 29,  77 => 26,  64 => 16,  55 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

<div id=\"colorlib-contact\">
\t<div class=\"container\">
\t\t<div class=\"row\">
        \t<div class=\"col-md-10 col-md-offset-1 animate-box\">
        \t\t<h3>Describe your room</h3>
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t{{ form_row(form.summary) }}
        \t\t\t</div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
                        {{ form_row(form.description) }}
        \t\t\t</div>
        \t\t</div>
        \t\t\t</div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
        \t\t\t\t{{ form_row(form.capacity) }}
        \t\t\t</div>
        \t\t\t<div class=\"col-md-6\">
        \t\t\t\t{{ form_row(form.superficy) }}
        \t\t\t</div>
        \t\t</div>
        \t\t
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t{{ form_row(form.address) }}
        \t\t\t</div>
        \t\t</div>
        
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
                        {{ form_row(form.price) }}
        \t\t\t</div>
        \t\t\t<div class=\"col-md-6\">
        \t\t\t\t{{ form_row(form.region) }}
        \t\t\t</div>
        \t\t</div>
        
        \t\t<div class=\"row form-group\">
        \t\t\t<div class=\"col-md-6\">
                        {{ form_row(form.imageName) }}
        \t\t\t</div>
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t{{ form_row(form.imageFile) }}
    \t\t\t\t<br><br><br>
        \t\t\t\t
        \t\t
        \t\t<div class=\"form-group text-center\">
        \t\t\t<button class=\"btn btn-success\">{{ button_label|default('Save') }}</button>
        \t\t</div>
        \t</div>
        </div>
    </div>
</div>
        
    
    
    
{{ form_end(form) }}
", "room/_form.html.twig", "/home/houssem_saidi/CSC4101/projetFinal/AgVoy-Fin/templates/room/_form.html.twig");
    }
}

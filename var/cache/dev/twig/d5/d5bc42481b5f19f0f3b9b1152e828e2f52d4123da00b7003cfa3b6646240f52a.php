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

/* base.html.twig */
class __TwigTemplate_15f89e9b638b7ba54984bd20d37a38a5fd7fe956652a7fb90f8be28c2bc5a9ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'alerts' => [$this, 'block_alerts'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
    \t<meta charset=\"utf-8\">
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    \t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    \t<meta name=\"description\" content=\"\" />
    \t<meta name=\"keywords\" content=\"\" />
    \t<meta name=\"author\" content=\"\" />
    
      <!-- Facebook and Twitter integration -->
    \t<meta property=\"og:title\" content=\"\"/>
    \t<meta property=\"og:image\" content=\"\"/>
    \t<meta property=\"og:url\" content=\"\"/>
    \t<meta property=\"og:site_name\" content=\"\"/>
    \t<meta property=\"og:description\" content=\"\"/>
    \t<meta name=\"twitter:title\" content=\"\" />
    \t<meta name=\"twitter:image\" content=\"\" />
    \t<meta name=\"twitter:url\" content=\"\" />
    \t<meta name=\"twitter:card\" content=\"\" />
    
    \t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,700\" rel=\"stylesheet\">
    \t<link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,700\" rel=\"stylesheet\">
    \t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    \t
    \t<!-- Animate.css -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    \t<!-- Icomoon Icon Fonts-->
    \t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icomoon.css"), "html", null, true);
        echo "\">
    \t<!-- Bootstrap  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    
    \t<!-- Magnific Popup -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    
    \t<!-- Flexslider  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
    
    \t<!-- Owl Carousel -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    \t
    \t<!-- Date Picker -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    \t<!-- Flaticons  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">
    
    \t<!-- Theme style  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

    \t<!-- Modernizr JS -->
    \t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- FOR IE9 below -->
    \t<!--[if lt IE 9]>
    \t<script src=\"js/respond.min.js\"></script>
    \t<![endif]-->

\t</head>
\t<body>
\t\t
\t<div class=\"colorlib-loader\"></div>

\t<div id=\"page\">
\t\t<nav class=\"colorlib-nav\" role=\"navigation\">
\t\t\t
\t\t\t<div class=\"top-menu\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div id=\"colorlib-logo\"><a href=\"/\">Couettes et café</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 text-right menu-1\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
        // line 75
        echo $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "main");
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t
\t\t";
        // line 83
        $this->displayBlock('alerts', $context, $blocks);
        // line 97
        echo " ";
        // line 98
        echo "        
        
\t\t<div class=\"row justify-content-center\">
            <div class=\"col-md-1\">
                <a href=\"javascript:history.back()\" class=\"txt1\" style=\"font-size: 18px\"><i class=\"fa fa-arrow-left\"></i>&nbsp;&nbsp;&nbsp; Go back</a>
            </div>
        \t
    \t        <div class=\"col-md-10\"></div>
            ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 106)) {
            // line 107
            echo "            \t
    \t\t\t";
            // line 108
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 108), "clients", [], "any", false, false, false, 108)) {
                // line 109
                echo "        \t\t\t<div class=\"col-md-1\">
            \t\t\t<a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 110), "clients", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" class=\"txt1\" style=\"font-size: 18px\">&nbsp;&nbsp;&nbsp; Mon profil</a>
       \t\t\t\t </div>
    \t        ";
            }
            // line 113
            echo "    \t        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 113), "users", [], "any", false, false, false, 113)) {
                // line 114
                echo "        \t\t\t<div class=\"col-md-1\">
            \t\t\t<a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 115), "users", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115)]), "html", null, true);
                echo "\" class=\"txt1\" style=\"font-size: 18px\"><i class=\"fa fa-arrow-left\"></i>&nbsp;&nbsp;&nbsp; Mon profil</a>
       \t\t\t\t </div> 
       \t\t    ";
            }
            // line 118
            echo "       \t\t";
        }
        // line 119
        echo "    \t</div>
    \t\t
   \t 
\t\t
\t\t";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "\t\t
\t\t<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
\t\t<footer id=\"colorlib-footer\" role=\"contentinfo\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Luxehotel</h4>
\t\t\t\t\t\t<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<ul class=\"colorlib-social-icons\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Quick Links</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<ul class=\"colorlib-footer-links\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Accomodation</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dining &amp; Bar</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Restaurants</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Beach &amp; Resorts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h4>Recents Blog Post</h4>
\t\t\t\t\t\t<ul class=\"colorlib-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">The Ultimate Packing List For Female Travelers</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">How These 5 People Found The Path to Their Dream Trip</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t\t<h4>Contact Information</h4>
\t\t\t\t\t\t<ul class=\"colorlib-footer-links\">
\t\t\t\t\t\t\t<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
\t\t\t\t\t\t\t<li><a href=\"tel://1234567920\">+ 1235 2355 98</a></li>
\t\t\t\t\t\t\t<li><a href=\"mailto:info@yoursite.com\">info@yoursite.com</a></li>
\t\t\t\t\t\t\t<li><a href=\"http://luxehotel.com\">luxehotel.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<small class=\"block\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart3\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
\t\t\t\t\t\t\t<small class=\"block\">Demo Images: <a href=\"http://unsplash.com/\" target=\"_blank\">Unsplash</a></small>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up2\"></i></a>
\t</div>
\t
\t";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        // line 213
        echo "\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_alerts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alerts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alerts"));

        // line 84
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 84), "flashBag", [], "any", false, false, false, 84), "all", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 85
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 86
                echo "                    ";
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 87
                echo "                    ";
                if (($context["type"] == "message")) {
                    echo " ";
                    $context["type"] = "info";
                    echo " ";
                }
                // line 88
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                            <span class=\"sr-only\">Close</span>
                        </button>
                        <p>";
                // line 93
                echo $context["message"];
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "        <!-- Bootstrap core JavaScript -->
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

\t
    \t<!-- jQuery -->
    \t<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- jQuery Easing -->
    \t<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Waypoints -->
    \t<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Flexslider -->
    \t<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Owl carousel -->
    \t<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Magnific Popup -->
    \t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Date Picker -->
    \t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Main -->
    \t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 211,  468 => 209,  463 => 207,  459 => 206,  454 => 204,  449 => 202,  444 => 200,  439 => 198,  434 => 196,  427 => 192,  423 => 191,  420 => 190,  410 => 189,  392 => 123,  382 => 97,  376 => 96,  367 => 93,  358 => 88,  351 => 87,  344 => 86,  339 => 85,  334 => 84,  324 => 83,  305 => 6,  292 => 213,  290 => 189,  223 => 124,  221 => 123,  215 => 119,  212 => 118,  206 => 115,  203 => 114,  200 => 113,  194 => 110,  191 => 109,  189 => 108,  186 => 107,  184 => 106,  174 => 98,  172 => 97,  170 => 83,  159 => 75,  134 => 53,  128 => 50,  122 => 47,  117 => 45,  111 => 42,  107 => 41,  101 => 38,  95 => 35,  89 => 32,  84 => 30,  79 => 28,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
\t<head>
    \t<meta charset=\"utf-8\">
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    \t<title>{% block title %}Bienvenue !{% endblock %}</title>
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    \t<meta name=\"description\" content=\"\" />
    \t<meta name=\"keywords\" content=\"\" />
    \t<meta name=\"author\" content=\"\" />
    
      <!-- Facebook and Twitter integration -->
    \t<meta property=\"og:title\" content=\"\"/>
    \t<meta property=\"og:image\" content=\"\"/>
    \t<meta property=\"og:url\" content=\"\"/>
    \t<meta property=\"og:site_name\" content=\"\"/>
    \t<meta property=\"og:description\" content=\"\"/>
    \t<meta name=\"twitter:title\" content=\"\" />
    \t<meta name=\"twitter:image\" content=\"\" />
    \t<meta name=\"twitter:url\" content=\"\" />
    \t<meta name=\"twitter:card\" content=\"\" />
    
    \t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,700\" rel=\"stylesheet\">
    \t<link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,700\" rel=\"stylesheet\">
    \t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    \t
    \t<!-- Animate.css -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    \t<!-- Icomoon Icon Fonts-->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icomoon.css') }}\">
    \t<!-- Bootstrap  -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.css') }}\">
    
    \t<!-- Magnific Popup -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/magnific-popup.css') }}\">
    
    \t<!-- Flexslider  -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/flexslider.css') }}\">
    
    \t<!-- Owl Carousel -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css') }}\">
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.theme.default.min.css') }}\">
    \t
    \t<!-- Date Picker -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-datepicker.css') }}\">
    \t<!-- Flaticons  -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/flaticon/font/flaticon.css') }}\">
    
    \t<!-- Theme style  -->
    \t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

    \t<!-- Modernizr JS -->
    \t<script src=\"{{ asset('assets/js/modernizr-2.6.2.min.js') }}\"></script>
    \t<!-- FOR IE9 below -->
    \t<!--[if lt IE 9]>
    \t<script src=\"js/respond.min.js\"></script>
    \t<![endif]-->

\t</head>
\t<body>
\t\t
\t<div class=\"colorlib-loader\"></div>

\t<div id=\"page\">
\t\t<nav class=\"colorlib-nav\" role=\"navigation\">
\t\t\t
\t\t\t<div class=\"top-menu\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div id=\"colorlib-logo\"><a href=\"/\">Couettes et café</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 text-right menu-1\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>{{ render_bootstrap_menu('main') }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t
\t\t{%  block alerts %}
             {% for type, messages in app.session.flashBag.all %}
                {% for message in messages %}
                    {%if type == 'error'%} {% set type = 'danger' %} {%endif%}
                    {%if type == 'message'%} {% set type = 'info' %} {%endif%}
                    <div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                            <span class=\"sr-only\">Close</span>
                        </button>
                        <p>{{ message|raw }}</p>
                    </div>
                {% endfor %}
            {% endfor %}
        {% endblock %} {# alerts #}
        
        
\t\t<div class=\"row justify-content-center\">
            <div class=\"col-md-1\">
                <a href=\"javascript:history.back()\" class=\"txt1\" style=\"font-size: 18px\"><i class=\"fa fa-arrow-left\"></i>&nbsp;&nbsp;&nbsp; Go back</a>
            </div>
        \t
    \t        <div class=\"col-md-10\"></div>
            {% if app.user %}
            \t
    \t\t\t{% if app.user.clients %}
        \t\t\t<div class=\"col-md-1\">
            \t\t\t<a href=\"{{ path('client_profile', {'id': app.user.clients.id}) }}\" class=\"txt1\" style=\"font-size: 18px\">&nbsp;&nbsp;&nbsp; Mon profil</a>
       \t\t\t\t </div>
    \t        {% endif %}
    \t        {% if app.user.users %}
        \t\t\t<div class=\"col-md-1\">
            \t\t\t<a href=\"{{ path('owner_profile', {'id': app.user.users.id}) }}\" class=\"txt1\" style=\"font-size: 18px\"><i class=\"fa fa-arrow-left\"></i>&nbsp;&nbsp;&nbsp; Mon profil</a>
       \t\t\t\t </div> 
       \t\t    {% endif %}
       \t\t{% endif %}
    \t</div>
    \t\t
   \t 
\t\t
\t\t{% block body %}{% endblock %}
\t\t
\t\t<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
\t\t<footer id=\"colorlib-footer\" role=\"contentinfo\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Luxehotel</h4>
\t\t\t\t\t\t<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<ul class=\"colorlib-social-icons\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Quick Links</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<ul class=\"colorlib-footer-links\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Accomodation</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dining &amp; Bar</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Restaurants</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Beach &amp; Resorts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h4>Recents Blog Post</h4>
\t\t\t\t\t\t<ul class=\"colorlib-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">The Ultimate Packing List For Female Travelers</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">How These 5 People Found The Path to Their Dream Trip</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t\t<h4>Contact Information</h4>
\t\t\t\t\t\t<ul class=\"colorlib-footer-links\">
\t\t\t\t\t\t\t<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
\t\t\t\t\t\t\t<li><a href=\"tel://1234567920\">+ 1235 2355 98</a></li>
\t\t\t\t\t\t\t<li><a href=\"mailto:info@yoursite.com\">info@yoursite.com</a></li>
\t\t\t\t\t\t\t<li><a href=\"http://luxehotel.com\">luxehotel.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<small class=\"block\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart3\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
\t\t\t\t\t\t\t<small class=\"block\">Demo Images: <a href=\"http://unsplash.com/\" target=\"_blank\">Unsplash</a></small>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up2\"></i></a>
\t</div>
\t
\t{% block javascripts %}
        <!-- Bootstrap core JavaScript -->
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

\t
    \t<!-- jQuery -->
    \t<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    \t<!-- jQuery Easing -->
    \t<script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>
    \t<!-- Waypoints -->
    \t<script src=\"{{ asset('assets/js/jquery.waypoints.min.js') }}\"></script>
    \t<!-- Flexslider -->
    \t<script src=\"{{ asset('assets/js/jquery.flexslider-min.js') }}\"></script>
    \t<!-- Owl carousel -->
    \t<script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
    \t<!-- Magnific Popup -->
    \t<script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\"></script>
    \t<script src=\"{{ asset('assets/js/magnific-popup-options.js') }}\"></script>
    \t<!-- Date Picker -->
    \t<script src=\"{{ asset('assets/js/bootstrap-datepicker.js') }}\"></script>
    \t<!-- Main -->
    \t<script src=\"{{ asset('assets/js/main.js') }}\"></script>
    {% endblock %}
\t</body>
</html>

", "base.html.twig", "/home/houssem_saidi/CSC4101/projet_final/AgVoy-Fin/templates/base.html.twig");
    }
}

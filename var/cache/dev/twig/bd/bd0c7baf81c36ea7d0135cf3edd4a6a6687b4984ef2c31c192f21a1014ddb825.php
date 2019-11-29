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

/* /home/home.html.twig */
class __TwigTemplate_7186588ced829b6ed2045c2dd79fa9899464698866b4061c169015bacc96d0d8 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/home.html.twig"));

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
    \t
    \t<!-- Animate.css -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    \t<!-- Icomoon Icon Fonts-->
    \t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icomoon.css"), "html", null, true);
        echo "\">
    \t<!-- Bootstrap  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    
    \t<!-- Magnific Popup -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    
    \t<!-- Flexslider  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
    
    \t<!-- Owl Carousel -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    \t
    \t<!-- Date Picker -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    \t<!-- Flaticons  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">
    
    \t<!-- Theme style  -->
    \t<link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

    \t<!-- Modernizr JS -->
    \t<script src=\"";
        // line 52
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
\t\t\t<div class=\"top-menu\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div id=\"colorlib-logo\"><a href=\"index.html\">Couette & Cafe</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 text-right menu-1\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
        // line 73
        echo $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "main");
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<aside id=\"colorlib-hero\">
\t\t\t<div class=\"flexslider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t   \t<li style=\"background-image: url(";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_5.jpg"), "html", null, true);
        echo ");\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Bienvenue à Couette et café</h2>
\t\t\t\t   \t\t\t\t\t<h1>Welcome!</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t   \t<li style=\"background-image: url(";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_1.jpg"), "html", null, true);
        echo ");\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Discover &amp; Enjoy</h2>
\t\t\t\t   \t\t\t\t\t<h1>Everything you need in couette et café</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t   \t<li style=\"background-image: url(";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_3.jpg"), "html", null, true);
        echo ");\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluids\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>You are invited</h2>
\t\t\t\t   \t\t\t\t\t<h1>We know how to please you</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t   \t<li style=\"background-image: url(";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img_bg_4.jpg"), "html", null, true);
        echo ");\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Come &amp; enjoy the unforgetable nights</h2>
\t\t\t\t   \t\t\t\t\t<h1>In the heart of couette et café</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>\t   \t
\t\t\t  \t</ul>
\t\t  \t</div>
\t\t</aside>

\t\t<div id=\"colorlib-services\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-reception\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3>24/7 chambres disponibles </h3>
\t\t\t\t\t\t\t<p>Nous somme a votre service pour toute réservation 7/7 et 24/24 </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-herbs\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3> Habitez en plein nature</h3>
\t\t\t\t\t\t\t<p>Profitez d'un séjour en plein nature sur les plages les plus belles du mondes </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-car\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3>Visitez tous les coins du monde</h3>
\t\t\t\t\t\t\t<p>Nous avons des chambres dans les 4 coins du monde, profitez d'un séjour à l'international</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-cheers\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3>Voyagez et dégustez </h3>
\t\t\t\t\t\t\t<p>Profitez de la gastronomie internationale et savourez les délices des plats des 4 coins du monde </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
\t\t\t\t\t\t<h2>S'incrire en tant que :</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<a href=\"/register_client\"><button id=\"Regionbtn\" class=\"btn btn-primary btn-demo\">Client </button></a>
\t\t\t\t\t\t<a href=\"/register\"><button id=\"Regionbtn\" class=\"btn btn-primary btn-learn\">Propriétaire</button></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
\t\t\t\t\t\t<h2>Avez vous déja un compte ?</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<a href=\"/login\"><button id=\"Regionbtn\" class=\"btn btn-success\">Se connecter</button></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<footer id=\"colorlib-footer\" role=\"contentinfo\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Couette et café</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Quick Links</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h4>Recents Blog Post</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t\t<h4>Contact Information</h4>
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
        // line 236
        $this->displayBlock('javascripts', $context, $blocks);
        // line 260
        echo "\t</body>
</html>";
        
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

    // line 236
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 237
        echo "        <!-- Bootstrap core JavaScript -->
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

\t
    \t<!-- jQuery -->
    \t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- jQuery Easing -->
    \t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Waypoints -->
    \t<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Flexslider -->
    \t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Owl carousel -->
    \t<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Magnific Popup -->
    \t<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Date Picker -->
    \t<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Main -->
    \t<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 258,  423 => 256,  418 => 254,  414 => 253,  409 => 251,  404 => 249,  399 => 247,  394 => 245,  389 => 243,  382 => 239,  378 => 238,  375 => 237,  365 => 236,  346 => 6,  335 => 260,  333 => 236,  216 => 122,  200 => 109,  184 => 96,  168 => 83,  155 => 73,  131 => 52,  125 => 49,  119 => 46,  114 => 44,  108 => 41,  104 => 40,  98 => 37,  92 => 34,  86 => 31,  81 => 29,  76 => 27,  52 => 6,  45 => 1,);
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
\t\t\t<div class=\"top-menu\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div id=\"colorlib-logo\"><a href=\"index.html\">Couette & Cafe</a></div>
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
\t\t<aside id=\"colorlib-hero\">
\t\t\t<div class=\"flexslider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t   \t<li style=\"background-image: url({{ asset('assets/images/img_bg_5.jpg') }});\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Bienvenue à Couette et café</h2>
\t\t\t\t   \t\t\t\t\t<h1>Welcome!</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t   \t<li style=\"background-image: url({{ asset('assets/images/img_bg_1.jpg') }});\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Discover &amp; Enjoy</h2>
\t\t\t\t   \t\t\t\t\t<h1>Everything you need in couette et café</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t   \t<li style=\"background-image: url({{ asset('assets/images/img_bg_3.jpg') }});\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluids\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>You are invited</h2>
\t\t\t\t   \t\t\t\t\t<h1>We know how to please you</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>
\t\t\t   \t<li style=\"background-image: url({{ asset('assets/images/img_bg_4.jpg') }});\">
\t\t\t   \t\t<div class=\"overlay\"></div>
\t\t\t   \t\t<div class=\"container-fluid\">
\t\t\t   \t\t\t<div class=\"row\">
\t\t\t\t   \t\t\t<div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
\t\t\t\t   \t\t\t\t<div class=\"slider-text-inner text-center\">
\t\t\t\t   \t\t\t\t\t<h2>Come &amp; enjoy the unforgetable nights</h2>
\t\t\t\t   \t\t\t\t\t<h1>In the heart of couette et café</h1>
\t\t\t\t   \t\t\t\t</div>
\t\t\t\t   \t\t\t</div>
\t\t\t\t   \t\t</div>
\t\t\t   \t\t</div>
\t\t\t   \t</li>\t   \t
\t\t\t  \t</ul>
\t\t  \t</div>
\t\t</aside>

\t\t<div id=\"colorlib-services\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-reception\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3>24/7 chambres disponibles </h3>
\t\t\t\t\t\t\t<p>Nous somme a votre service pour toute réservation 7/7 et 24/24 </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-herbs\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3> Habitez en plein nature</h3>
\t\t\t\t\t\t\t<p>Profitez d'un séjour en plein nature sur les plages les plus belles du mondes </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-car\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3>Visitez tous les coins du monde</h3>
\t\t\t\t\t\t\t<p>Nous avons des chambres dans les 4 coins du monde, profitez d'un séjour à l'international</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 animate-box text-center\">
\t\t\t\t\t\t<div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-cheers\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h3>Voyagez et dégustez </h3>
\t\t\t\t\t\t\t<p>Profitez de la gastronomie internationale et savourez les délices des plats des 4 coins du monde </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
\t\t\t\t\t\t<h2>S'incrire en tant que :</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<a href=\"/register_client\"><button id=\"Regionbtn\" class=\"btn btn-primary btn-demo\">Client </button></a>
\t\t\t\t\t\t<a href=\"/register\"><button id=\"Regionbtn\" class=\"btn btn-primary btn-learn\">Propriétaire</button></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
\t\t\t\t\t\t<h2>Avez vous déja un compte ?</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
\t\t\t\t\t\t<a href=\"/login\"><button id=\"Regionbtn\" class=\"btn btn-success\">Se connecter</button></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<footer id=\"colorlib-footer\" role=\"contentinfo\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Couette et café</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 colorlib-widget\">
\t\t\t\t\t\t<h4>Quick Links</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h4>Recents Blog Post</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t\t<h4>Contact Information</h4>
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
</html>", "/home/home.html.twig", "/home/houssem_saidi/CSC4101/projet_final/AgVoy-Fin/templates/home/home.html.twig");
    }
}

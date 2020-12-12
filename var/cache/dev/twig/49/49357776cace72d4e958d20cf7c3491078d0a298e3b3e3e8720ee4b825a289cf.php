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
class __TwigTemplate_f903aa05660bf84aa695c2b6a8ebe8fc6fda1375a79019492ae1c52dd4f43443 extends Template
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
            'main' => [$this, 'block_main'],
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
        echo "<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        ";
        // line 10
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        ";
        // line 16
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Long+Cang|Montserrat:300,400,700&amp;display=swap\"
              rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Permanent+Marker&display=swap\"
              rel=\"stylesheet\">

        ";
        // line 23
        echo "        <script src=\"https://kit.fontawesome.com/a4544fdaef.js\" crossorigin=\"anonymous\"></script>
    </head>

    ";
        // line 27
        echo "    <body>
        ";
        // line 29
        echo "        <header>

            ";
        // line 32
        echo "            ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32), "home")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32), "infos")))) {
            // line 33
            echo "            <nav id=\"menu-header\">
                <ul>



                    ";
            // line 39
            echo "                    ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", [0 => "_route"], "method", false, false, false, 39), "home"))) {
                // line 40
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                echo "\">
                        <li>
                            <i class=\"far fa-list-alt\"></i>
                            <p></p>
                        </li>
                    </a>
                    ";
            }
            // line 47
            echo "
                    ";
            // line 49
            echo "                    ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), "infos"))) {
                // line 50
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("infos");
                echo "\">
                        <li>
                            <i class=\"fas fa-info-circle\"></i>
                            <p></p>
                        </li>
                    </a>
                    ";
            }
            // line 57
            echo "
                    ";
            // line 59
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        <li>
                            <i class=\"fas fa-user-times\"></i>
                            <p>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "username", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
                        </li>
                    </a>
                </ul>
            </nav>
            ";
        }
        // line 68
        echo "

        </header>

        ";
        // line 73
        echo "        <main>
            ";
        // line 75
        echo "            <h1 id=\"titre\">C'plus bon !</h1>
            ";
        // line 76
        $this->displayBlock('main', $context, $blocks);
        // line 77
        echo "        </main>

        ";
        // line 80
        echo "        <footer>
            ";
        // line 82
        echo "            <hr>
            ";
        // line 84
        echo "            <span>&copy; CplusBon.com • ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
        </footer>


        <script type=\"text/javascript\">
            window.addEventListener(\"scroll\", function() {
                var header = document.querySelector(\"header\");
                header.classList.toggle(\"sticky\", window.scrollY > 0);
            })
        </script>
        ";
        // line 95
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " | C'plus Bon.com !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "
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
        return array (  247 => 96,  237 => 95,  219 => 76,  200 => 10,  189 => 98,  186 => 95,  172 => 84,  169 => 82,  166 => 80,  162 => 77,  160 => 76,  157 => 75,  154 => 73,  148 => 68,  139 => 62,  132 => 59,  129 => 57,  118 => 50,  115 => 49,  112 => 47,  101 => 40,  98 => 39,  91 => 33,  88 => 32,  84 => 29,  81 => 27,  76 => 23,  68 => 16,  62 => 13,  56 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        {# Block titre générique #}
        <title>{% block title %} | C'plus Bon.com !{% endblock %}</title>

        {# Appel du CSS #}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

        {# Appel des fonts Google #}
        <link href=\"https://fonts.googleapis.com/css?family=Long+Cang|Montserrat:300,400,700&amp;display=swap\"
              rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Permanent+Marker&display=swap\"
              rel=\"stylesheet\">

        {# Appel de script #}
        <script src=\"https://kit.fontawesome.com/a4544fdaef.js\" crossorigin=\"anonymous\"></script>
    </head>

    {# Body HTML de la page #}
    <body>
        {# Header générique à toute les pages #}
        <header>

            {# Barre de navigation si l'utilisateur est sur la page d'accueil #}
            {% if app.request.get('_route') == 'home' or app.request.get('_route') == 'infos' %}
            <nav id=\"menu-header\">
                <ul>



                    {# Lien vers la page d'accueil #}
                    {% if app.request.get('_route') != 'home' %}
                    <a href=\"{{ path('home') }}\">
                        <li>
                            <i class=\"far fa-list-alt\"></i>
                            <p></p>
                        </li>
                    </a>
                    {% endif %}

                    {# Lien vers la page informations #}
                    {% if app.request.get('_route') != 'infos' %}
                    <a href=\"{{ path('infos') }}\">
                        <li>
                            <i class=\"fas fa-info-circle\"></i>
                            <p></p>
                        </li>
                    </a>
                    {% endif %}

                    {# Lien pour se déconnecter #}
                    <a href=\"{{ path('app_logout') }}\">
                        <li>
                            <i class=\"fas fa-user-times\"></i>
                            <p>{{ app.user.username }}</p>
                        </li>
                    </a>
                </ul>
            </nav>
            {% endif %}


        </header>

        {# Block main paramétrable dans chaque page twig #}
        <main>
            {# Titre de l'application #}
            <h1 id=\"titre\">C'plus bon !</h1>
            {% block main %}{% endblock %}
        </main>

        {# Footer générique à toute les pages #}
        <footer>
            {# Délimiteur entre le main et le footer #}
            <hr>
            {# Signature du site #}
            <span>&copy; CplusBon.com • {{ \"now\"|date(\"Y\") }}</span>
        </footer>


        <script type=\"text/javascript\">
            window.addEventListener(\"scroll\", function() {
                var header = document.querySelector(\"header\");
                header.classList.toggle(\"sticky\", window.scrollY > 0);
            })
        </script>
        {# Block javascript paramétrable dans chaque page twig #}
        {% block javascripts %}

        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\wamp64\\www\\PROJET-PERSO\\date-peremption\\templates\\base.html.twig");
    }
}

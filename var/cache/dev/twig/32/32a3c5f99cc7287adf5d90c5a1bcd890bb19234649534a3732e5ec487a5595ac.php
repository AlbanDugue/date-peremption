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

/* main/index.html.twig */
class __TwigTemplate_3d20e127cfb0685b152ed4273214adca479641b507b36cc938e53eb6cfc09c69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Le Frigo ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
     ";
        // line 8
        echo "    <div id=\"container-liste\">

        ";
        // line 11
        echo "        ";
        if ( !(isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            ";
            // line 13
            echo "            <div id=\"pas-aliments\">
                <h2>🥑 🍕 🍄 🧃 🥝 🍰</h2>
                <h2> Aucuns aliments 😁</h2>
                <p>Ajoutes des aliments avec le bouton</p>
                <h2>🧃 🥝 🍰 🥑 🍕 🍄</h2>
            </div>
        ";
        }
        // line 20
        echo "
        ";
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 23
            echo "            ";
            // line 24
            echo "            <article>
                ";
            // line 26
            echo "                <div>
                    <p class=\"date-peremption\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "datePeremption", [], "any", false, false, false, 27), "d/m/y"), "html", null, true);
            echo "</p>
                </div>

                ";
            // line 31
            echo "                <div>
                    ";
            // line 33
            echo "                    <p class=\"nom-aliment\" ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["aliment"], "datePeremption", [], "any", false, false, false, 33), twig_date_converter($this->env, "now -3 day")))) {
                // line 34
                echo "                                                style=\"text-decoration: line-through\"
                                            ";
            }
            // line 35
            echo ">
                        ";
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "
                        ";
            // line 39
            echo "                        ";
            if (((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["aliment"], "datePeremption", [], "any", false, false, false, 39), twig_date_converter($this->env, "now"))) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["aliment"], "datePeremption", [], "any", false, false, false, 39), twig_date_converter($this->env, "now -3 day"))))) {
                // line 40
                echo "                            ";
                // line 41
                echo "                            🔥
                        ";
            }
            // line 43
            echo "                        ";
            // line 44
            echo "                        ";
            if (((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["aliment"], "datePeremption", [], "any", false, false, false, 44), twig_date_converter($this->env, "now + 2 day"))) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["aliment"], "datePeremption", [], "any", false, false, false, 44), twig_date_converter($this->env, "now"))))) {
                // line 45
                echo "                            ";
                // line 46
                echo "                            ⏳
                        ";
            }
            // line 48
            echo "                    </p>
                </div>

                ";
            // line 52
            echo "                <div>
                    ";
            // line 54
            echo "                    <button class=\"bouton-suppr\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["aliment"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">&times;</a></button>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        ";
        // line 60
        echo "        <div id=\"bloc-ajout\">
            <button id=\"bouton-ajout\"><a href=\"#\">+</a></button>
        </div>

        ";
        // line 65
        echo "        <div id=\"myModal\" class=\"modal\">

            ";
        // line 68
        echo "            <div class=\"modal-content\">

                ";
        // line 71
        echo "                <div class=\"close\"><p>&times;</p></div>

                ";
        // line 74
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["alimentForm"]) || array_key_exists("alimentForm", $context) ? $context["alimentForm"] : (function () { throw new RuntimeError('Variable "alimentForm" does not exist.', 74, $this->source); })()), 'form_start');
        echo "
                <div id=\"formAjoutAliment\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["alimentForm"]) || array_key_exists("alimentForm", $context) ? $context["alimentForm"] : (function () { throw new RuntimeError('Variable "alimentForm" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), 'row');
        echo "

                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["alimentForm"]) || array_key_exists("alimentForm", $context) ? $context["alimentForm"] : (function () { throw new RuntimeError('Variable "alimentForm" does not exist.', 78, $this->source); })()), "datePeremption", [], "any", false, false, false, 78), 'row');
        echo "

                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["alimentForm"]) || array_key_exists("alimentForm", $context) ? $context["alimentForm"] : (function () { throw new RuntimeError('Variable "alimentForm" does not exist.', 80, $this->source); })()), 'widget');
        echo "

                    ";
        // line 83
        echo "                    <button id=\"validation-ajout\" type=\"submit\">Ajouter</button>
                </div>

                ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["alimentForm"]) || array_key_exists("alimentForm", $context) ? $context["alimentForm"] : (function () { throw new RuntimeError('Variable "alimentForm" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    <script>
        // Get the modal
        var modal = document.getElementById(\"myModal\");

        // Get the button that opens the modal
        var btn = document.getElementById(\"bouton-ajout\");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName(\"close\")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = \"block\";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = \"none\";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = \"none\";
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 93,  252 => 92,  237 => 86,  232 => 83,  227 => 80,  222 => 78,  217 => 76,  211 => 74,  207 => 71,  203 => 68,  199 => 65,  193 => 60,  190 => 58,  179 => 54,  176 => 52,  171 => 48,  167 => 46,  165 => 45,  162 => 44,  160 => 43,  156 => 41,  154 => 40,  151 => 39,  146 => 37,  143 => 35,  139 => 34,  136 => 33,  133 => 31,  127 => 27,  124 => 26,  121 => 24,  119 => 23,  114 => 22,  111 => 20,  102 => 13,  100 => 12,  97 => 11,  93 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le Frigo {{ parent() }}{% endblock %}

{% block main %}

     {# Container global de la page #}
    <div id=\"container-liste\">

        {# Condition si il n'y a pas d'aliments liés à un utilisateur #}
        {% if not aliments %}
            {# Alors on affiche une div informative pour dire d'ajouter un aliment #}
            <div id=\"pas-aliments\">
                <h2>🥑 🍕 🍄 🧃 🥝 🍰</h2>
                <h2> Aucuns aliments 😁</h2>
                <p>Ajoutes des aliments avec le bouton</p>
                <h2>🧃 🥝 🍰 🥑 🍕 🍄</h2>
            </div>
        {% endif %}

        {# Boucle pour chaque aliment récupérer par utilisateur #}
        {% for aliment in aliments %}
            {# affichage de données concernant un aliment avec une action liée #}
            <article>
                {# Bloc lié à sa date de péremption au format jour/mois/année de la plus ancienne à la plus récente #}
                <div>
                    <p class=\"date-peremption\">{{ aliment.datePeremption|date('d/m/y') }}</p>
                </div>

                {# Bloc lié au nom de l'aliment  #}
                <div>
                    {# Condition si l'aliment est périmé depuis plus de 3 jours alors il est barré #}
                    <p class=\"nom-aliment\" {% if aliment.datePeremption < date('now -3 day') %}
                                                style=\"text-decoration: line-through\"
                                            {% endif %}>
                        {# Affichage du nom de l'aliment #}
                        {{ aliment.nom }}
                        {# Condition si l'aliment est périmé depuis moins de 3 jours  #}
                        {% if aliment.datePeremption < date('now') and aliment.datePeremption > date('now -3 day') %}
                            {# Affichage d'un emoji flamme collé au nom de l'aliment #}
                            🔥
                        {% endif %}
                        {# Condition si l'aliment est périmé dans 2 jours ou moins  #}
                        {% if aliment.datePeremption < date('now + 2 day') and aliment.datePeremption > date('now') %}
                            {# Affichage d'un emoji sablier collé au nom de l'aliment #}
                            ⏳
                        {% endif %}
                    </p>
                </div>

                {# Bloc lié à l'action de supprimé l'aliment  #}
                <div>
                    {# Appel de la fonction supprimé aliment dans le MainController en passant son id en paramètre #}
                    <button class=\"bouton-suppr\"><a href=\"{{ path('delete', {'id': aliment.id}) }}\">&times;</a></button>
                </div>
            </article>
        {% endfor %}

        {# Trigger qui ouvre la modal (voir javascript ci-dessous) #}
        <div id=\"bloc-ajout\">
            <button id=\"bouton-ajout\"><a href=\"#\">+</a></button>
        </div>

        {# Modal global #}
        <div id=\"myModal\" class=\"modal\">

            {# Contenu dans la modal #}
            <div class=\"modal-content\">

                {# Div pour fermer la modale #}
                <div class=\"close\"><p>&times;</p></div>

                {# Début du formualaire d'ajout d'aliment #}
                {{ form_start (alimentForm) }}
                <div id=\"formAjoutAliment\">
                {{ form_row(alimentForm.nom) }}

                {{ form_row(alimentForm.datePeremption) }}

                {{ form_widget(alimentForm) }}

                    {# Bouton submit pour ajouter un aliment en base et revenir sur la page home #}
                    <button id=\"validation-ajout\" type=\"submit\">Ajouter</button>
                </div>

                {{ form_end (alimentForm) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        // Get the modal
        var modal = document.getElementById(\"myModal\");

        // Get the button that opens the modal
        var btn = document.getElementById(\"bouton-ajout\");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName(\"close\")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = \"block\";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = \"none\";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = \"none\";
            }
        }
    </script>
{% endblock %}
", "main/index.html.twig", "C:\\wamp64\\www\\PROJET-PERSO\\date-peremption\\templates\\main\\index.html.twig");
    }
}

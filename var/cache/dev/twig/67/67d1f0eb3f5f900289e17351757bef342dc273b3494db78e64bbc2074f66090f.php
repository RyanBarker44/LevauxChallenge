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

/* search.html.twig */
class __TwigTemplate_837089ecab97f30d767a0ac74793c15410db2b964c79678f4759a030ced98f35 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 3, $this->source); })()), 0, [], "array", false, false, false, 3), "FirstW", [], "array", false, false, false, 3)), "html", null, true);
        echo " | Search ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h4 style=\"text-align: left; margin: 15px\">Results for '";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 6, $this->source); })()), 0, [], "array", false, false, false, 6), "FirstW", [], "array", false, false, false, 6)), "html", null, true);
        echo "':</h4>

    <!---- Loop through movies ---->
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 10
            echo "        <div class=\"row\" style=\"margin:10px;\">

            <!---- Display image ---->
            <div class=\"col-8 col-sm-4 col-md-3\" style=\"background-color: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "FirstW", [], "array", false, false, false, 13), "html", null, true);
            echo "; padding: 6px; border-radius: 3px;\">
                <img style=\"width: 100%; size: auto; border: #fbfffd solid 2px;\" src=";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "Poster", [], "array", false, false, false, 14), "html", null, true);
            echo "class=\"card-img\" alt=\"Poster Image\">
            </div>
            <!---- End display image ---->

            <!-- Display movie details -->
            <div class=\"col-8 col-sm-7 col-md-8\" style=\"background-color: #33373c; color: whitesmoke; text-align: left; border-radius: 20px; margin-left: 3px\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "Title", [], "array", false, false, false, 21), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "Type", [], "array", false, false, false, 22), "html", null, true);
            echo "</p>
                    <p class=\"card-text\"><small class=\"text-muted\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "Year", [], "array", false, false, false, 23), "html", null, true);
            echo "</small></p>
                    <p class=\"card-text\">Matched keyword: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "FirstW", [], "array", false, false, false, 24), "html", null, true);
            echo "</p>
                </div>
            </div>
            <!-- End display movie details -->

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <!-- End loop through movies -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  94 => 14,  90 => 13,  85 => 10,  81 => 9,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig' %}

{%  block title %}{{ results[0]['FirstW']|capitalize }} | Search {% endblock %}

{% block body %}
    <h4 style=\"text-align: left; margin: 15px\">Results for '{{ results[0]['FirstW']|capitalize }}':</h4>

    <!---- Loop through movies ---->
    {% for movie in results %}
        <div class=\"row\" style=\"margin:10px;\">

            <!---- Display image ---->
            <div class=\"col-8 col-sm-4 col-md-3\" style=\"background-color: {{ movie['FirstW'] }}; padding: 6px; border-radius: 3px;\">
                <img style=\"width: 100%; size: auto; border: #fbfffd solid 2px;\" src={{ movie['Poster']}}class=\"card-img\" alt=\"Poster Image\">
            </div>
            <!---- End display image ---->

            <!-- Display movie details -->
            <div class=\"col-8 col-sm-7 col-md-8\" style=\"background-color: #33373c; color: whitesmoke; text-align: left; border-radius: 20px; margin-left: 3px\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ movie['Title'] }}</h5>
                    <p class=\"card-text\">{{ movie['Type'] }}</p>
                    <p class=\"card-text\"><small class=\"text-muted\">{{ movie['Year'] }}</small></p>
                    <p class=\"card-text\">Matched keyword: {{ movie['FirstW'] }}</p>
                </div>
            </div>
            <!-- End display movie details -->

        </div>
    {% endfor %}
    <!-- End loop through movies -->

{% endblock %}


", "search.html.twig", "D:\\xampp_7.4.1\\htdocs\\symfony-project\\templates\\search.html.twig");
    }
}

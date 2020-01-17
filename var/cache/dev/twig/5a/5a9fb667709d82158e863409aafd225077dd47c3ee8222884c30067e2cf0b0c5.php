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
class __TwigTemplate_d06c38a1da261fdb1514ca0a1bdfba3deaabdf4294ce3f261fe1eecb849abb68 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <!------ Head ------->
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!---- Stylesheets ---->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <!---- End stylesheets ---->
    </head>
    <!------- End Head ----->

    <!-------- Body -------->
    <body style=\"background-color: #ebeced\">

        <!-------- Nav bar -------->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"margin-bottom: 20px;\">
            <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">OMDb <span style=\"color: #0da8cb;\">Keyword</span> Search</a>
        </nav>
        <!-------- End nav bar -------->

        <!--------- Main Body --------->
        <div class=\"container\" style=\"background-color: #ffffff; padding: 40px; margin-top: -20px; border: #33373c solid 1px;\">
            <div class=\"row\">
                <!------ Keyword Search Form ----->
                <div class=\"col-md-2\">
                    <div class=\"form-group row\">
                        <form method=\"GET\" action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
                            <div class=\"row\">
                                <label><b>Select a keyword: </b></label>
                            </div>
                            <div class=\"row\">
                                <select class=\"form-control form-control-sm\" style=\"width: 80%; margin: 3px; padding:5px; margin-right: 5px;\" name = \"keyword\">
                                    <option value = \"Green\"> Green </option>
                                    <option value = \"Blue\"> Blue </option>
                                    <option value = \"Yellow\"> Yellow </option>
                                    <option value = \"Red\"> Red </option>
                                </select>
                                <button class=\"btn btn-info\" style=\"width: 80%; margin:3px\" type=\"submit\">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!------ End Keyword Search ------->

                <!------------ Content ------------>
                <div class=\"col-md-8\" style=\"text-align: center\">
                    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "                </div>
                <!---------- End Content ---------->

                <div class=\"col-md-2\"> </div>
            </div>
        </div>
        <!------- End Main Body ------->

    </body>
    <!-------- End Body -------->
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "OMDb Search";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
            <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  163 => 55,  156 => 54,  145 => 10,  138 => 9,  125 => 6,  107 => 56,  105 => 54,  82 => 34,  69 => 24,  58 => 15,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <!------ Head ------->
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}OMDb Search{% endblock %}</title>

        <!---- Stylesheets ---->
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
            <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        {% endblock %}
        <!---- End stylesheets ---->
    </head>
    <!------- End Head ----->

    <!-------- Body -------->
    <body style=\"background-color: #ebeced\">

        <!-------- Nav bar -------->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"margin-bottom: 20px;\">
            <a class=\"navbar-brand\" href=\"{{ path('home') }}\">OMDb <span style=\"color: #0da8cb;\">Keyword</span> Search</a>
        </nav>
        <!-------- End nav bar -------->

        <!--------- Main Body --------->
        <div class=\"container\" style=\"background-color: #ffffff; padding: 40px; margin-top: -20px; border: #33373c solid 1px;\">
            <div class=\"row\">
                <!------ Keyword Search Form ----->
                <div class=\"col-md-2\">
                    <div class=\"form-group row\">
                        <form method=\"GET\" action=\"{{ path('search') }}\">
                            <div class=\"row\">
                                <label><b>Select a keyword: </b></label>
                            </div>
                            <div class=\"row\">
                                <select class=\"form-control form-control-sm\" style=\"width: 80%; margin: 3px; padding:5px; margin-right: 5px;\" name = \"keyword\">
                                    <option value = \"Green\"> Green </option>
                                    <option value = \"Blue\"> Blue </option>
                                    <option value = \"Yellow\"> Yellow </option>
                                    <option value = \"Red\"> Red </option>
                                </select>
                                <button class=\"btn btn-info\" style=\"width: 80%; margin:3px\" type=\"submit\">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!------ End Keyword Search ------->

                <!------------ Content ------------>
                <div class=\"col-md-8\" style=\"text-align: center\">
                    {% block body %}
                    {% endblock %}
                </div>
                <!---------- End Content ---------->

                <div class=\"col-md-2\"> </div>
            </div>
        </div>
        <!------- End Main Body ------->

    </body>
    <!-------- End Body -------->
</html>
", "base.html.twig", "D:\\xampp_7.4.1\\htdocs\\symfony-project\\templates\\base.html.twig");
    }
}

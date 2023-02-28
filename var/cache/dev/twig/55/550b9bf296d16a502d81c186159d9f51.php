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

/* users/resultatRech.html.twig */
class __TwigTemplate_24c3f85c62e4608bf38eedbbad42937a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/resultatRech.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/resultatRech.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/resultatRech.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Users index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Users index</h1>
   
        <div class=\"mb-3\">
         
             Vous etes connecte comme ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "userIdentifier", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        // line 11
        echo "        </div>
    ";
        // line 13
        echo "   ";
        // line 14
        echo "
     <table class=\"table\">
        <thead> 
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>Nom_user</th>
                <th>Prenom_user</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultOfSearch"]) || array_key_exists("resultOfSearch", $context) ? $context["resultOfSearch"] : (function () { throw new RuntimeError('Variable "resultOfSearch" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                ";
            // line 33
            echo "                 <td>
                       ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 35
                echo "                            ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 36
                    echo "                                Utilisateur
                            ";
                } elseif ((                // line 37
$context["role"] == "ROLE_EDITOR")) {
                    // line 38
                    echo "                                Editeur
                            ";
                } elseif ((                // line 39
$context["role"] == "ROLE_ADMIN")) {
                    // line 40
                    echo "                                Administrateur
                            ";
                }
                // line 42
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </td>

                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "NomUser", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "PrenomUser", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

   ";
        // line 61
        echo " 
   ";
        // line 63
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/resultatRech.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 63,  208 => 61,  203 => 58,  194 => 54,  185 => 50,  181 => 49,  176 => 47,  172 => 46,  168 => 45,  164 => 43,  158 => 42,  154 => 40,  152 => 39,  149 => 38,  147 => 37,  144 => 36,  141 => 35,  137 => 34,  134 => 33,  130 => 31,  126 => 30,  123 => 29,  118 => 28,  102 => 14,  100 => 13,  97 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Users index{% endblock %}

{% block body %}
    <h1>Users index</h1>
   
        <div class=\"mb-3\">
         
             Vous etes connecte comme {{ app.user.userIdentifier }} {#}<a href=\"{{ path('app_logout') }}\">Logout</a> {#}
        </div>
    {#}{% endif %} {#}
   {#} <a href=\"{{ path('app_logout') }}\">logout</a> {#}

     <table class=\"table\">
        <thead> 
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>Nom_user</th>
                <th>Prenom_user</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in resultOfSearch %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                {# <td>{{ user.roles ? user.roles|json_encode : '' }}</td>    #}
                 <td>
                       {% for role in user.roles %}
                            {% if role == \"ROLE_USER\" %}
                                Utilisateur
                            {% elseif role == \"ROLE_EDITOR\" %}
                                Editeur
                            {% elseif role == \"ROLE_ADMIN\" %}
                                Administrateur
                            {% endif %}
                        {% endfor %}
                    </td>

                <td>{{ user.password }}</td>
                <td>{{ user.NomUser }}</td>
                <td>{{ user.PrenomUser }}</td>
                <td>
                    <a href=\"{{ path('app_users_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

   {#  <a href=\"{{ path('app_users_new') }}\">Create new</a> #} 
   {#} <a href=\"{{ path('app_logout') }}\">logout</a> {#}

{% endblock %}
", "users/resultatRech.html.twig", "C:\\Users\\Asus store\\Documents\\GitHub\\pidev\\templates\\users\\resultatRech.html.twig");
    }
}

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

/* users/index.html.twig */
class __TwigTemplate_cc8dad99751df2023a96150b2dcda3b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
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
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "userIdentifier", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        // line 12
        echo "        </div>
    ";
        // line 14
        echo "   ";
        // line 15
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                ";
            // line 34
            echo "                 <td>
                       ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 36
                echo "                            ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 37
                    echo "                                Utilisateur
                            ";
                } elseif ((                // line 38
$context["role"] == "ROLE_EDITOR")) {
                    // line 39
                    echo "                                Editeur
                            ";
                } elseif ((                // line 40
$context["role"] == "ROLE_ADMIN")) {
                    // line 41
                    echo "                                Administrateur
                            ";
                }
                // line 43
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </td>

                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "NomUser", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "PrenomUser", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">edit</a>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">bloquer</a>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unblock_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">debloquer</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
   
   ";
        // line 64
        echo " 
   ";
        // line 66
        echo "   <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_rech");
        echo "\">Recherche</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 66,  217 => 64,  212 => 61,  203 => 57,  194 => 53,  190 => 52,  186 => 51,  182 => 50,  177 => 48,  173 => 47,  169 => 46,  165 => 44,  159 => 43,  155 => 41,  153 => 40,  150 => 39,  148 => 38,  145 => 37,  142 => 36,  138 => 35,  135 => 34,  131 => 32,  127 => 31,  124 => 30,  119 => 29,  103 => 15,  101 => 14,  98 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        {% for user in users %}
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
                    <a href=\"{{ path('block_user', {'id': user.id}) }}\">bloquer</a>
                    <a href=\"{{ path('unblock_user', {'id': user.id}) }}\">debloquer</a>
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
   <a href=\"{{ path('app_users_rech') }}\">Recherche</a>

{% endblock %}
", "users/index.html.twig", "C:\\Users\\Asus store\\Documents\\GitHub\\pidev\\templates\\users\\index.html.twig");
    }
}

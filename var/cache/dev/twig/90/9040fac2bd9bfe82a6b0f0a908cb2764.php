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

/* users/search.html.twig */
class __TwigTemplate_0cb383db55d045fe57f8ca897bc4fd9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   


    

 ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SearchF"]) || array_key_exists("SearchF", $context) ? $context["SearchF"] : (function () { throw new RuntimeError('Variable "SearchF" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<center >

";
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["SearchF"]) || array_key_exists("SearchF", $context) ? $context["SearchF"] : (function () { throw new RuntimeError('Variable "SearchF" does not exist.', 13, $this->source); })()), [0 => "bootstrap_5_horizontal_layout.html.twig"], true);
        echo " 

    <div class=\"my-custom-class-for-errors\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["SearchF"]) || array_key_exists("SearchF", $context) ? $context["SearchF"] : (function () { throw new RuntimeError('Variable "SearchF" does not exist.', 16, $this->source); })()), 'errors');
        echo "
    </div>
    <div class=\"col-lg-8\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SearchF"]) || array_key_exists("SearchF", $context) ? $context["SearchF"] : (function () { throw new RuntimeError('Variable "SearchF" does not exist.', 19, $this->source); })()), "Nom_user", [], "any", false, false, false, 19), 'row');
        echo "
    </div> 
    
    <div class=\"col-lg-8\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SearchF"]) || array_key_exists("SearchF", $context) ? $context["SearchF"] : (function () { throw new RuntimeError('Variable "SearchF" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row');
        echo "
    </div>
    
    ";
        // line 30
        echo "    ";
        // line 34
        echo "    
   
   
   
        
     
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SearchF"]) || array_key_exists("SearchF", $context) ? $context["SearchF"] : (function () { throw new RuntimeError('Variable "SearchF" does not exist.', 40, $this->source); })()), 'form_end');
        echo "

</center>

    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  108 => 34,  106 => 30,  100 => 23,  93 => 19,  87 => 16,  81 => 13,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
   


    

 {{ form_start(SearchF,{'attr':{'novalidate':'novalidate'}}) }}
<center >

{% form_theme SearchF 'bootstrap_5_horizontal_layout.html.twig' %} 

    <div class=\"my-custom-class-for-errors\">
        {{ form_errors(SearchF) }}
    </div>
    <div class=\"col-lg-8\">
        {{ form_row(SearchF.Nom_user) }}
    </div> 
    
    <div class=\"col-lg-8\">
        {{ form_row(SearchF.email) }}
    </div>
    
    {# <div class=\"col-lg-8\">

        {{ form_row(SearchF.id) }}
    </div> #}
    {# <div class=\"col-lg-8\">

        {{ form_row(SearchF.reclamations) }}
    </div> #}
    
   
   
   
        
     
{{ form_end(SearchF) }}

</center>

    

{% endblock %}", "users/search.html.twig", "C:\\Users\\Asus store\\Documents\\GitHub\\pidev\\templates\\users\\search.html.twig");
    }
}

<?php

/* main/admin.html.twig */
class __TwigTemplate_9ed37832247374f8161d698077277fce3ede8c0565a5997882f8b92e41713794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "main/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76c717b3f8befb2f92cbedda59bd4f1160551f80f8a8bdfcbb26d8329170b7e9 = $this->env->getExtension("native_profiler");
        $__internal_76c717b3f8befb2f92cbedda59bd4f1160551f80f8a8bdfcbb26d8329170b7e9->enter($__internal_76c717b3f8befb2f92cbedda59bd4f1160551f80f8a8bdfcbb26d8329170b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76c717b3f8befb2f92cbedda59bd4f1160551f80f8a8bdfcbb26d8329170b7e9->leave($__internal_76c717b3f8befb2f92cbedda59bd4f1160551f80f8a8bdfcbb26d8329170b7e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_abcc74b298ee9fc7b907b2ba3910de603fe114a98f642afafd1c286a1684b9aa = $this->env->getExtension("native_profiler");
        $__internal_abcc74b298ee9fc7b907b2ba3910de603fe114a98f642afafd1c286a1684b9aa->enter($__internal_abcc74b298ee9fc7b907b2ba3910de603fe114a98f642afafd1c286a1684b9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-xs-4 col-md-2 sidebar\">
        <h2 class=\"admin-nav-header\">Admin Nav</h2>
        <ul class=\"nav\">
            <li class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Overview <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("product_list");
        echo "\">Products</a></li>
        </ul>
    </div>
    <div class=\"col-xs-7 col-md-8\">
        <h1 class=\"text-center\">Admin</h1>
        <p>Welcome to your Raptor Store! Sales are up!</p>
    </div>
</div>
";
        
        $__internal_abcc74b298ee9fc7b907b2ba3910de603fe114a98f642afafd1c286a1684b9aa->leave($__internal_abcc74b298ee9fc7b907b2ba3910de603fe114a98f642afafd1c286a1684b9aa_prof);

    }

    public function getTemplateName()
    {
        return "main/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="row">*/
/*     <div class="col-xs-4 col-md-2 sidebar">*/
/*         <h2 class="admin-nav-header">Admin Nav</h2>*/
/*         <ul class="nav">*/
/*             <li class="active"><a href="{{ path('admin') }}">Overview <span class="sr-only">(current)</span></a></li>*/
/*             <li><a href="{{ path('product_list') }}">Products</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <div class="col-xs-7 col-md-8">*/
/*         <h1 class="text-center">Admin</h1>*/
/*         <p>Welcome to your Raptor Store! Sales are up!</p>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */

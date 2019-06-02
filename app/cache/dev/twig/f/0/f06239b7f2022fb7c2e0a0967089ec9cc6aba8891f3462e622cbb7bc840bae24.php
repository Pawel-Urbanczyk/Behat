<?php

/* main/login.html.twig */
class __TwigTemplate_10ea9a4c0bd1fcdff16d74732097b81299a4ad9f8ba0f72b7067a5fb5ad35580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "main/login.html.twig", 1);
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
        $__internal_17b0d9eb712a203957a3b7789589910aeb898fe3130ee98cb776e5425d4c3780 = $this->env->getExtension("native_profiler");
        $__internal_17b0d9eb712a203957a3b7789589910aeb898fe3130ee98cb776e5425d4c3780->enter($__internal_17b0d9eb712a203957a3b7789589910aeb898fe3130ee98cb776e5425d4c3780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b0d9eb712a203957a3b7789589910aeb898fe3130ee98cb776e5425d4c3780->leave($__internal_17b0d9eb712a203957a3b7789589910aeb898fe3130ee98cb776e5425d4c3780_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c0c85264e1f573098f3c4604ca951c240e36b9884630325f7cb9b4d6b8f0466 = $this->env->getExtension("native_profiler");
        $__internal_8c0c85264e1f573098f3c4604ca951c240e36b9884630325f7cb9b4d6b8f0466->enter($__internal_8c0c85264e1f573098f3c4604ca951c240e36b9884630325f7cb9b4d6b8f0466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 9
        echo "    <section class=\"row form-box\">
        <div class=\"col-sm-8 col-sm-offset-2\">
            <h1>Login</h1>

            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_login_check");
        echo "\" method=\"POST\">
                <div class=\"form-group\">
                    <label for=\"inputUsername\">Username</label>
                    <input class=\"form-control\" type=\"text\" id=\"inputUsername\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label for=\"inputPassword\">Password</label>
                    <input class=\"form-control\" type=\"password\" id=\"inputPassword\" name=\"_password\" placeholder=\"Password\">
                </div>

                <button type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Login\">Login</button>
            </form>
        </div>
    </section>
";
        
        $__internal_8c0c85264e1f573098f3c4604ca951c240e36b9884630325f7cb9b4d6b8f0466->leave($__internal_8c0c85264e1f573098f3c4604ca951c240e36b9884630325f7cb9b4d6b8f0466_prof);

    }

    public function getTemplateName()
    {
        return "main/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  58 => 13,  52 => 9,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">*/
/*             {{ error.messageKey }}*/
/*         </div>*/
/*     {% endif %}*/
/*     <section class="row form-box">*/
/*         <div class="col-sm-8 col-sm-offset-2">*/
/*             <h1>Login</h1>*/
/* */
/*             <form action="{{ path('admin_login_check') }}" method="POST">*/
/*                 <div class="form-group">*/
/*                     <label for="inputUsername">Username</label>*/
/*                     <input class="form-control" type="text" id="inputUsername" placeholder="Username" name="_username" value="{{ last_username }}">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="inputPassword">Password</label>*/
/*                     <input class="form-control" type="password" id="inputPassword" name="_password" placeholder="Password">*/
/*                 </div>*/
/* */
/*                 <button type="submit" class="btn btn-primary pull-right" value="Login">Login</button>*/
/*             </form>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */

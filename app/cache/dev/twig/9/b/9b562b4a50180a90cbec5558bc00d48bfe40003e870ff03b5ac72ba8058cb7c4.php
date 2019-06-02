<?php

/* layout.html.twig */
class __TwigTemplate_afafba4af629c4b33a9f40dc6175e9bd20fb0f551c0446d67369124cad55a0ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71aef10571821782d0e655767cab017408152468d123e607c0cb2b6eb494c513 = $this->env->getExtension("native_profiler");
        $__internal_71aef10571821782d0e655767cab017408152468d123e607c0cb2b6eb494c513->enter($__internal_71aef10571821782d0e655767cab017408152468d123e607c0cb2b6eb494c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>


<div class=\"container\">
    <div class=\"header clearfix\">
        <nav class=\"navigation-margin\">
            <ul class=\"nav nav-pills pull-right\">
                <li>
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Admin</a></li>
                ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_logout");
            echo "\">Logout</a></li>
                ";
        } else {
            // line 27
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
                ";
        }
        // line 29
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("db_rebuild");
        echo "\">Reset DB</a></li>
            </ul>
        </nav>
        <h1>The Raptor Store</h1>
    </div>
    <hr>
    <p class=\"text-center\">Fence security <span class=\"label label-success\">activated</span></p>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 40
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 42
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </div>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        </div>
    </div>
</div>
<footer class=\"footer footer-styling\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6\">
                <h1 class=\"knpu\"><a href=\"http://knpuniversity.com\">KnpUniversity.com</a></h1>
            </div>
            <div class=\"col-xs-12 col-sm-6\">
                <ul class=\"nav pull-right footer-nav\">
                    <li>
                        <form class=\"navbar-form\" role=\"search\" method=\"GET\" action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("product_search");
        echo "\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\" value=\"\" name=\"searchTerm\">
                                <div class=\"input-group-btn\">
                                    <button id=\"search_submit\" class=\"btn btn-default\" type=\"submit\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id=\"modal-content-holder\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body clearfix\"></div>
        </div>
    </div>
</div>

";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "</body>
</html>
";
        
        $__internal_71aef10571821782d0e655767cab017408152468d123e607c0cb2b6eb494c513->leave($__internal_71aef10571821782d0e655767cab017408152468d123e607c0cb2b6eb494c513_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa89979baf225d756b6161c393abbe363ed8a52deee17546b3725a9596c2d237 = $this->env->getExtension("native_profiler");
        $__internal_fa89979baf225d756b6161c393abbe363ed8a52deee17546b3725a9596c2d237->enter($__internal_fa89979baf225d756b6161c393abbe363ed8a52deee17546b3725a9596c2d237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "KnpUniversity: The Raptor Store!";
        
        $__internal_fa89979baf225d756b6161c393abbe363ed8a52deee17546b3725a9596c2d237->leave($__internal_fa89979baf225d756b6161c393abbe363ed8a52deee17546b3725a9596c2d237_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20aa0142d1a88fc8b35204a72231a4cdaaaaf765f6f54ed83c984ea71c1d1dfd = $this->env->getExtension("native_profiler");
        $__internal_20aa0142d1a88fc8b35204a72231a4cdaaaaf765f6f54ed83c984ea71c1d1dfd->enter($__internal_20aa0142d1a88fc8b35204a72231a4cdaaaaf765f6f54ed83c984ea71c1d1dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/css/main.css\" />
        <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\" />
    ";
        
        $__internal_20aa0142d1a88fc8b35204a72231a4cdaaaaf765f6f54ed83c984ea71c1d1dfd->leave($__internal_20aa0142d1a88fc8b35204a72231a4cdaaaaf765f6f54ed83c984ea71c1d1dfd_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_9253198cd1e90f782890ff72c6c921c17466156ce8049d8dd6122b016bb75c18 = $this->env->getExtension("native_profiler");
        $__internal_9253198cd1e90f782890ff72c6c921c17466156ce8049d8dd6122b016bb75c18->enter($__internal_9253198cd1e90f782890ff72c6c921c17466156ce8049d8dd6122b016bb75c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9253198cd1e90f782890ff72c6c921c17466156ce8049d8dd6122b016bb75c18->leave($__internal_9253198cd1e90f782890ff72c6c921c17466156ce8049d8dd6122b016bb75c18_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae8d3740c916cabd21530a395e4503ef8959bce6861a773f9f10c1633ffd401d = $this->env->getExtension("native_profiler");
        $__internal_ae8d3740c916cabd21530a395e4503ef8959bce6861a773f9f10c1633ffd401d->enter($__internal_ae8d3740c916cabd21530a395e4503ef8959bce6861a773f9f10c1633ffd401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script type=\"text/javascript\" src=\"/js/jquery-2.1.4.min.js\"></script>
    <script type=\"text/javascript\" src=\"/bootstrap/js/bootstrap.min.js\"></script>
";
        
        $__internal_ae8d3740c916cabd21530a395e4503ef8959bce6861a773f9f10c1633ffd401d->leave($__internal_ae8d3740c916cabd21530a395e4503ef8959bce6861a773f9f10c1633ffd401d_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 86,  206 => 85,  195 => 47,  185 => 8,  179 => 7,  167 => 5,  158 => 89,  156 => 85,  128 => 60,  114 => 48,  112 => 47,  109 => 46,  105 => 44,  96 => 42,  92 => 41,  89 => 40,  87 => 39,  73 => 29,  67 => 27,  61 => 25,  59 => 24,  55 => 23,  50 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}KnpUniversity: The Raptor Store!{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" href="/css/main.css" />*/
/*         <link rel="stylesheet" href="/css/font-awesome.min.css" />*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* */
/* <div class="container">*/
/*     <div class="header clearfix">*/
/*         <nav class="navigation-margin">*/
/*             <ul class="nav nav-pills pull-right">*/
/*                 <li>*/
/*                     <a href="{{ path('homepage') }}">Home</a>*/
/*                 </li>*/
/*                 <li><a href="{{ path('admin') }}">Admin</a></li>*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     <li><a href="{{ path('admin_logout') }}">Logout</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('login') }}">Login</a></li>*/
/*                 {% endif %}*/
/*                 <li><a href="{{ path('db_rebuild') }}">Reset DB</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*         <h1>The Raptor Store</h1>*/
/*     </div>*/
/*     <hr>*/
/*     <p class="text-center">Fence security <span class="label label-success">activated</span></p>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             {% if app.session.flashBag.has('success') %}*/
/*                 <div class="alert alert-success">*/
/*                     {% for msg in app.session.flashBag.get('success') %}*/
/*                     {{ msg }}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <footer class="footer footer-styling">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12 col-sm-6">*/
/*                 <h1 class="knpu"><a href="http://knpuniversity.com">KnpUniversity.com</a></h1>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-6">*/
/*                 <ul class="nav pull-right footer-nav">*/
/*                     <li>*/
/*                         <form class="navbar-form" role="search" method="GET" action="{{ path('product_search') }}">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" class="form-control" placeholder="Search" value="" name="searchTerm">*/
/*                                 <div class="input-group-btn">*/
/*                                     <button id="search_submit" class="btn btn-default" type="submit">*/
/*                                         <i class="fa fa-search"></i>*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <div id="modal-content-holder" class="modal fade">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>*/
/*     <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */

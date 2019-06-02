<?php

/* main/homepage.html.twig */
class __TwigTemplate_5f09c701020dcbf4ee93bb63f50c811caaccffc13e1638aac0fd75f4aef73a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74289276cd7055abdd278480108820d7fd949174ac791fb2bbdcf91958f76a00 = $this->env->getExtension("native_profiler");
        $__internal_74289276cd7055abdd278480108820d7fd949174ac791fb2bbdcf91958f76a00->enter($__internal_74289276cd7055abdd278480108820d7fd949174ac791fb2bbdcf91958f76a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74289276cd7055abdd278480108820d7fd949174ac791fb2bbdcf91958f76a00->leave($__internal_74289276cd7055abdd278480108820d7fd949174ac791fb2bbdcf91958f76a00_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8e7b24dbfeed21d37ca4ffc50c42833e16be73b11fb4208dfc80524901d49ddb = $this->env->getExtension("native_profiler");
        $__internal_8e7b24dbfeed21d37ca4ffc50c42833e16be73b11fb4208dfc80524901d49ddb->enter($__internal_8e7b24dbfeed21d37ca4ffc50c42833e16be73b11fb4208dfc80524901d49ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8e7b24dbfeed21d37ca4ffc50c42833e16be73b11fb4208dfc80524901d49ddb->leave($__internal_8e7b24dbfeed21d37ca4ffc50c42833e16be73b11fb4208dfc80524901d49ddb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f11cc6902f3c7a5910b7c9e89e09e466fc197321fb58c878802dadae2909ee68 = $this->env->getExtension("native_profiler");
        $__internal_f11cc6902f3c7a5910b7c9e89e09e466fc197321fb58c878802dadae2909ee68->enter($__internal_f11cc6902f3c7a5910b7c9e89e09e466fc197321fb58c878802dadae2909ee68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section>
    <h1 class=\"text-center\">Welcome to the Raptor Store</h1>

    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2\">
            <h2>
                ";
        // line 12
        if ((isset($context["search"]) ? $context["search"] : null)) {
            // line 13
            echo "                    ";
            if ( !twig_test_empty((isset($context["products"]) ? $context["products"] : null))) {
                // line 14
                echo "                        Products matching \"";
                echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
                echo "\"
                    ";
            } else {
                // line 16
                echo "                        No products found
                    ";
            }
            // line 18
            echo "                ";
        } else {
            // line 19
            echo "                    Today's sweet products:
                ";
        }
        // line 21
        echo "            </h2>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                        <td>\$";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 2), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>
</section>
";
        
        $__internal_f11cc6902f3c7a5910b7c9e89e09e466fc197321fb58c878802dadae2909ee68->leave($__internal_f11cc6902f3c7a5910b7c9e89e09e466fc197321fb58c878802dadae2909ee68_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  104 => 33,  100 => 32,  97 => 31,  93 => 30,  82 => 21,  78 => 19,  75 => 18,  71 => 16,  65 => 14,  62 => 13,  60 => 12,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
/* */
/* {% block body %}*/
/* <section>*/
/*     <h1 class="text-center">Welcome to the Raptor Store</h1>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-8 col-sm-offset-2">*/
/*             <h2>*/
/*                 {% if search %}*/
/*                     {% if products is not empty %}*/
/*                         Products matching "{{ search }}"*/
/*                     {% else %}*/
/*                         No products found*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     Today's sweet products:*/
/*                 {% endif %}*/
/*             </h2>*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Name</th>*/
/*                         <th>Price</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for product in products %}*/
/*                     <tr>*/
/*                         <td>{{ product.name }}</td>*/
/*                         <td>${{ product.price|number_format(2) }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */

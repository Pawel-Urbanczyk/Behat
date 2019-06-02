<?php

/* product/list.html.twig */
class __TwigTemplate_b90471a9ddea021434efe5a46a2bd25845b7b0f740fcc1e4b90124f9e58523d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "product/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9e90d7b4448553c984bd1531242ed0dd5d6e90a52278edd5ee2f7b5fc169486 = $this->env->getExtension("native_profiler");
        $__internal_f9e90d7b4448553c984bd1531242ed0dd5d6e90a52278edd5ee2f7b5fc169486->enter($__internal_f9e90d7b4448553c984bd1531242ed0dd5d6e90a52278edd5ee2f7b5fc169486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9e90d7b4448553c984bd1531242ed0dd5d6e90a52278edd5ee2f7b5fc169486->leave($__internal_f9e90d7b4448553c984bd1531242ed0dd5d6e90a52278edd5ee2f7b5fc169486_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2674229686704b353e626d537012550e0b052d7106f82d44b27a7eece939625 = $this->env->getExtension("native_profiler");
        $__internal_b2674229686704b353e626d537012550e0b052d7106f82d44b27a7eece939625->enter($__internal_b2674229686704b353e626d537012550e0b052d7106f82d44b27a7eece939625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-3 sidebar\">
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
        <div class=\"col-sm-8\">
            <h1 class=\"text-center\">
                Product Admin Area
            </h1>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Is Published?</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                        <td>\$";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 2), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "author", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "author", array()), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "
                        </td>
                        <td><i class=\"fa fa-";
            // line 33
            echo (($this->getAttribute($context["product"], "isPublished", array())) ? ("check") : ("times"));
            echo "\"></i></td>
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
";
        
        $__internal_b2674229686704b353e626d537012550e0b052d7106f82d44b27a7eece939625->leave($__internal_b2674229686704b353e626d537012550e0b052d7106f82d44b27a7eece939625_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc29f48fc6e79ee12400270a2ccb973070c21521d990bd24cb868e4b5e156080 = $this->env->getExtension("native_profiler");
        $__internal_bc29f48fc6e79ee12400270a2ccb973070c21521d990bd24cb868e4b5e156080->enter($__internal_bc29f48fc6e79ee12400270a2ccb973070c21521d990bd24cb868e4b5e156080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('.js-add-new-product').on('click', function(e) {
                e.preventDefault();

                var \$modalContentHolder = \$('#modal-content-holder');

                jQuery.ajax({
                    'url': \$(this).attr('href'),
                    'success': function(content) {
                        \$modalContentHolder.find('.modal-body').html(content);
                        \$modalContentHolder.modal();
                    }
                });
            });
        });
    </script>
";
        
        $__internal_bc29f48fc6e79ee12400270a2ccb973070c21521d990bd24cb868e4b5e156080->leave($__internal_bc29f48fc6e79ee12400270a2ccb973070c21521d990bd24cb868e4b5e156080_prof);

    }

    public function getTemplateName()
    {
        return "product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  112 => 42,  101 => 36,  92 => 33,  87 => 31,  82 => 29,  78 => 28,  75 => 27,  71 => 26,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-3 sidebar">*/
/*             <h2 class="admin-nav-header">Admin Nav</h2>*/
/*             <ul class="nav">*/
/*                 <li class="active"><a href="{{ path('admin') }}">Overview <span class="sr-only">(current)</span></a></li>*/
/*                 <li><a href="{{ path('product_list') }}">Products</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-sm-8">*/
/*             <h1 class="text-center">*/
/*                 Product Admin Area*/
/*             </h1>*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Name</th>*/
/*                         <th>Price</th>*/
/*                         <th>Author</th>*/
/*                         <th>Is Published?</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for product in products %}*/
/*                     <tr>*/
/*                         <td>{{ product.name }}</td>*/
/*                         <td>${{ product.price|number_format(2) }}</td>*/
/*                         <td>*/
/*                             {{ product.author|default('Anonymous') }}*/
/*                         </td>*/
/*                         <td><i class="fa fa-{{ product.isPublished ? 'check' : 'times' }}"></i></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $('.js-add-new-product').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 var $modalContentHolder = $('#modal-content-holder');*/
/* */
/*                 jQuery.ajax({*/
/*                     'url': $(this).attr('href'),*/
/*                     'success': function(content) {*/
/*                         $modalContentHolder.find('.modal-body').html(content);*/
/*                         $modalContentHolder.modal();*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */

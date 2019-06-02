<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_db887ac0bb1803c94ca7c99f89cbd8e43853d5ed00a392d9532718a7549c947e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8ffffb30da65fcdd4ddc34c8ef39aa462e7569b4d61d46e9c6cba29d9506f1 = $this->env->getExtension("native_profiler");
        $__internal_8d8ffffb30da65fcdd4ddc34c8ef39aa462e7569b4d61d46e9c6cba29d9506f1->enter($__internal_8d8ffffb30da65fcdd4ddc34c8ef39aa462e7569b4d61d46e9c6cba29d9506f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8ffffb30da65fcdd4ddc34c8ef39aa462e7569b4d61d46e9c6cba29d9506f1->leave($__internal_8d8ffffb30da65fcdd4ddc34c8ef39aa462e7569b4d61d46e9c6cba29d9506f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91c39137f693da6d8860fdf1d80fb857a6bc1271a0d66e2c64968c840b4d2f85 = $this->env->getExtension("native_profiler");
        $__internal_91c39137f693da6d8860fdf1d80fb857a6bc1271a0d66e2c64968c840b4d2f85->enter($__internal_91c39137f693da6d8860fdf1d80fb857a6bc1271a0d66e2c64968c840b4d2f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91c39137f693da6d8860fdf1d80fb857a6bc1271a0d66e2c64968c840b4d2f85->leave($__internal_91c39137f693da6d8860fdf1d80fb857a6bc1271a0d66e2c64968c840b4d2f85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98b33d874476808913363d9d885aaab157f3878553cbdd6ece49c5e1d5c94a06 = $this->env->getExtension("native_profiler");
        $__internal_98b33d874476808913363d9d885aaab157f3878553cbdd6ece49c5e1d5c94a06->enter($__internal_98b33d874476808913363d9d885aaab157f3878553cbdd6ece49c5e1d5c94a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_98b33d874476808913363d9d885aaab157f3878553cbdd6ece49c5e1d5c94a06->leave($__internal_98b33d874476808913363d9d885aaab157f3878553cbdd6ece49c5e1d5c94a06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb5152aa033eae2d8e9f9fb4fc76b1ba8a0d6834352964ef2bea861124a6d9b = $this->env->getExtension("native_profiler");
        $__internal_4cb5152aa033eae2d8e9f9fb4fc76b1ba8a0d6834352964ef2bea861124a6d9b->enter($__internal_4cb5152aa033eae2d8e9f9fb4fc76b1ba8a0d6834352964ef2bea861124a6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4cb5152aa033eae2d8e9f9fb4fc76b1ba8a0d6834352964ef2bea861124a6d9b->leave($__internal_4cb5152aa033eae2d8e9f9fb4fc76b1ba8a0d6834352964ef2bea861124a6d9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_2c367e78235e993b0a16a7be5e22bc361138f299d64e7281f2747b562cbe28a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_228f1a9511af8dda89637ac07ac18fdb0c05b9abdf6e0d784bec432c98f6f325 = $this->env->getExtension("native_profiler");
        $__internal_228f1a9511af8dda89637ac07ac18fdb0c05b9abdf6e0d784bec432c98f6f325->enter($__internal_228f1a9511af8dda89637ac07ac18fdb0c05b9abdf6e0d784bec432c98f6f325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function", array())) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "class", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "short_class", array()), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "type", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function", array())), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "args", array()));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array())) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function", array())) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "'); switchIcons('icon-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-open', 'icon-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-close'); return false;\">
        <img class=\"toggle\" id=\"icon-";
            // line 15
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : null))) ? ("inline") : ("none"));
            echo "\" />
        <img class=\"toggle\" id=\"icon-";
            // line 16
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : null))) ? ("none") : ("inline"));
            echo "\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : null))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()));
            echo "
    </div>
";
        }
        
        $__internal_228f1a9511af8dda89637ac07ac18fdb0c05b9abdf6e0d784bec432c98f6f325->leave($__internal_228f1a9511af8dda89637ac07ac18fdb0c05b9abdf6e0d784bec432c98f6f325_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  83 => 19,  75 => 16,  69 => 15,  60 => 14,  58 => 13,  54 => 12,  49 => 11,  47 => 10,  44 => 9,  39 => 7,  34 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if trace.function %}*/
/*     at*/
/*     <strong>*/
/*         <abbr title="{{ trace.class }}">{{ trace.short_class }}</abbr>*/
/*         {{ trace.type ~ trace.function }}*/
/*     </strong>*/
/*     ({{ trace.args|format_args }})*/
/* {% endif %}*/
/* */
/* {% if trace.file is defined and trace.file and trace.line is defined and trace.line %}*/
/*     {{ trace.function ? '<br />' : '' }}*/
/*     in {{ trace.file|format_file(trace.line) }}&nbsp;*/
/*     {% spaceless %}*/
/*     <a href="#" onclick="toggle('trace-{{ prefix ~ '-' ~ i }}'); switchIcons('icon-{{ prefix ~ '-' ~ i }}-open', 'icon-{{ prefix ~ '-' ~ i }}-close'); return false;">*/
/*         <img class="toggle" id="icon-{{ prefix ~ '-' ~ i }}-close" alt="-" src="data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=" style="display: {{ 0 == i ? 'inline' : 'none' }}" />*/
/*         <img class="toggle" id="icon-{{ prefix ~ '-' ~ i }}-open" alt="+" src="data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7" style="display: {{ 0 == i ? 'none' : 'inline' }}" />*/
/*     </a>*/
/*     {% endspaceless %}*/
/*     <div id="trace-{{ prefix ~ '-' ~ i }}" style="display: {{ 0 == i ? 'block' : 'none' }}" class="trace">*/
/*         {{ trace.file|file_excerpt(trace.line) }}*/
/*     </div>*/
/* {% endif %}*/
/* */

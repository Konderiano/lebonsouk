<?php

/* /errors/404.html.twig */
class __TwigTemplate_709e666f52429c49e5cdcf1b0a4d9095b4afe34611a3d618569515006ae3a5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/errors/404.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : null))) : (""))) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        Page not found.
    ";
        }
    }

    public function getTemplateName()
    {
        return "/errors/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block contents %}*/
/*     {% if message|default %}*/
/*         {{ message }}*/
/*     {% else %}*/
/*         Page not found.*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

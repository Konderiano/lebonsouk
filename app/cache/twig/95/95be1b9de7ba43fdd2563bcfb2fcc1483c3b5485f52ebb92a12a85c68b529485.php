<?php

/* @views_suivi/layout.html.twig */
class __TwigTemplate_037b2dd86e8cbdef7e1c083b8a73ec247580246e9ef6a9f727769538d5d8fa66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@views_suivi/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headStyle' => array($this, 'block_headStyle'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Accueil: LeBonSouk
";
    }

    // line 7
    public function block_headStyle($context, array $blocks = array())
    {
        echo " 

";
    }

    // line 12
    public function block_contents($context, array $blocks = array())
    {
        // line 13
        echo "
\t<p>Salut!!</p>

";
    }

    public function getTemplateName()
    {
        return "@views_suivi/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Accueil: LeBonSouk*/
/* {% endblock title %}*/
/* */
/* {% block headStyle %} */
/* */
/* {% endblock headStyle %}*/
/* */
/* */
/* {% block contents %}*/
/* */
/* 	<p>Salut!!</p>*/
/* */
/* {% endblock %}*/

<?php

/* base.html.twig */
class __TwigTemplate_0081d5b719a083d84eeaac5de00ae30b27b0f06952f07f64f5231c862175daa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'author' => array($this, 'block_author'),
            'headStyle' => array($this, 'block_headStyle'),
            'headJS' => array($this, 'block_headJS'),
            'body' => array($this, 'block_body'),
            'page_header' => array($this, 'block_page_header'),
            'contents' => array($this, 'block_contents'),
            'footJSForLayer' => array($this, 'block_footJSForLayer'),
            'footJS' => array($this, 'block_footJS'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"esuPortail\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\">
        <meta name=\"author\" content=\"";
        // line 9
        $this->displayBlock('author', $context, $blocks);
        echo "\">
        ";
        // line 10
        $this->displayBlock('headStyle', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('headJS', $context, $blocks);
        // line 12
        echo "    </head>
\t
    <body role=\"document\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
    }

    // line 9
    public function block_author($context, array $blocks = array())
    {
    }

    // line 10
    public function block_headStyle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 11
    public function block_headJS($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "            <div class=\"head\" role=\"head\">
                ";
        // line 17
        $this->displayBlock('page_header', $context, $blocks);
        // line 18
        echo "            </div>
            <div class=\"container\" role=\"main\" style=\"width: 100%\">
                ";
        // line 20
        $this->displayBlock('contents', $context, $blocks);
        // line 21
        echo "            </div>
            <div id=\"importJs\">
                ";
        // line 23
        $this->displayBlock('footJSForLayer', $context, $blocks);
        // line 24
        echo "                ";
        $this->displayBlock('footJS', $context, $blocks);
        // line 25
        echo "            </div>
        ";
    }

    // line 17
    public function block_page_header($context, array $blocks = array())
    {
    }

    // line 20
    public function block_contents($context, array $blocks = array())
    {
    }

    // line 23
    public function block_footJSForLayer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 24
    public function block_footJS($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 24,  132 => 23,  127 => 20,  122 => 17,  117 => 25,  114 => 24,  112 => 23,  108 => 21,  106 => 20,  102 => 18,  100 => 17,  97 => 16,  94 => 15,  88 => 11,  82 => 10,  77 => 9,  72 => 8,  67 => 7,  61 => 27,  59 => 15,  54 => 12,  51 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="esuPortail">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}{% endblock title %}</title>*/
/*         <meta name="description" content="{% block description %}{% endblock description %}">*/
/*         <meta name="author" content="{% block author %}{% endblock author %}">*/
/*         {% block headStyle %} {% endblock headStyle %}*/
/*         {% block headJS %} {% endblock headJS %}*/
/*     </head>*/
/* 	*/
/*     <body role="document">*/
/*         {% block body %}*/
/*             <div class="head" role="head">*/
/*                 {% block page_header %}{% endblock page_header %}*/
/*             </div>*/
/*             <div class="container" role="main" style="width: 100%">*/
/*                 {% block contents %}{% endblock contents %}*/
/*             </div>*/
/*             <div id="importJs">*/
/*                 {% block footJSForLayer %} {% endblock footJSForLayer %}*/
/*                 {% block footJS %} {% endblock footJS %}*/
/*             </div>*/
/*         {% endblock body %}*/
/*     </body>*/
/* </html>*/
/* */

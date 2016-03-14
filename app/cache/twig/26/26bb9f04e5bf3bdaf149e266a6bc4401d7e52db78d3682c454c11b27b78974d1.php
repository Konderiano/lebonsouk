<?php

/* base.html.twig */
class __TwigTemplate_deba2bd77476c6b58226b21b6426ecd2b20447b60bbc32f3c3863fba51cd6ff3 extends Twig_Template
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
        <!-- jquery -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "rootRoute", array()), "html", null, true);
        echo "/web/css/jquery-ui.css\">
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "rootRoute", array()), "html", null, true);
        echo "/web/css/bootstrap.css\">
";
        // line 15
        echo "        <style>
            @-moz-document url-prefix() {
                fieldset { display: table-cell; }
            }
            .table tbody>tr>td
            {
                vertical-align: top;
            }
            .table tbody>tr>td.vert-align
            {
                vertical-align: middle;
            }
            .head {
                width: 100%;
                background-color: #428bca;
                margin-bottom: 1%;
                padding: 1%;
                padding-bottom: 1%;
                padding-top: 1%;
            }
            .head p{
                margin-bottom: 1%;
                font-size: 500%;
                color: #ffffff;
            }
            .pointer {
                cursor: pointer; 
            }
        </style>
        ";
        // line 44
        $this->displayBlock('headStyle', $context, $blocks);
        // line 45
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "rootRoute", array()), "html", null, true);
        echo "/web/js/jquery.js\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "rootRoute", array()), "html", null, true);
        echo "/web/js/jquery-ui.js\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "rootRoute", array()), "html", null, true);
        echo "/web/js/bootstrap.js\"></script>
        ";
        // line 48
        $this->displayBlock('headJS', $context, $blocks);
        // line 49
        echo "        <!--fav and touch icons -->
";
        // line 55
        echo "    </head>
    <body role=\"document\">
        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 69
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

    // line 44
    public function block_headStyle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 48
    public function block_headJS($context, array $blocks = array())
    {
        echo " ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "            <div class=\"head\" role=\"head\">
                ";
        // line 59
        $this->displayBlock('page_header', $context, $blocks);
        // line 60
        echo "            </div>
            <div class=\"container\" role=\"main\" style=\"width: 100%\">
                ";
        // line 62
        $this->displayBlock('contents', $context, $blocks);
        // line 63
        echo "            </div>
            <div id=\"importJs\">
                ";
        // line 65
        $this->displayBlock('footJSForLayer', $context, $blocks);
        // line 66
        echo "                ";
        $this->displayBlock('footJS', $context, $blocks);
        // line 67
        echo "            </div>
        ";
    }

    // line 59
    public function block_page_header($context, array $blocks = array())
    {
    }

    // line 62
    public function block_contents($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footJSForLayer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 66
    public function block_footJS($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 66,  187 => 65,  182 => 62,  177 => 59,  172 => 67,  169 => 66,  167 => 65,  163 => 63,  161 => 62,  157 => 60,  155 => 59,  152 => 58,  149 => 57,  143 => 48,  137 => 44,  132 => 9,  127 => 8,  122 => 7,  116 => 69,  114 => 57,  110 => 55,  107 => 49,  105 => 48,  101 => 47,  97 => 46,  92 => 45,  90 => 44,  59 => 15,  55 => 13,  50 => 11,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
/*         <!-- jquery -->*/
/*         <link rel="stylesheet" href="{{ app.rootRoute }}/web/css/jquery-ui.css">*/
/*         <!-- Bootstrap -->*/
/*         <link rel="stylesheet" href="{{ app.rootRoute }}/web/css/bootstrap.css">*/
/* {#        <link rel="stylesheet" href="{{ app.rootRoute }}/web/css/bootstrap-theme.css">#}*/
/*         <style>*/
/*             @-moz-document url-prefix() {*/
/*                 fieldset { display: table-cell; }*/
/*             }*/
/*             .table tbody>tr>td*/
/*             {*/
/*                 vertical-align: top;*/
/*             }*/
/*             .table tbody>tr>td.vert-align*/
/*             {*/
/*                 vertical-align: middle;*/
/*             }*/
/*             .head {*/
/*                 width: 100%;*/
/*                 background-color: #428bca;*/
/*                 margin-bottom: 1%;*/
/*                 padding: 1%;*/
/*                 padding-bottom: 1%;*/
/*                 padding-top: 1%;*/
/*             }*/
/*             .head p{*/
/*                 margin-bottom: 1%;*/
/*                 font-size: 500%;*/
/*                 color: #ffffff;*/
/*             }*/
/*             .pointer {*/
/*                 cursor: pointer; */
/*             }*/
/*         </style>*/
/*         {% block headStyle %} {% endblock headStyle %}*/
/*         <script src="{{ app.rootRoute }}/web/js/jquery.js"></script>*/
/*         <script src="{{ app.rootRoute }}/web/js/jquery-ui.js"></script>*/
/*         <script src="{{ app.rootRoute }}/web/js/bootstrap.js"></script>*/
/*         {% block headJS %} {% endblock headJS %}*/
/*         <!--fav and touch icons -->*/
/* {#        <link rel="shortcut icon" href="ico/favicon.ico">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">#}*/
/*     </head>*/
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

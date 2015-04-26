<?php

/* base.tpl */
class __TwigTemplate_ec4c59b84242e8d8ff37602abf8edcb792508ee4bb86d2846139cd13aaa7ef0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        if (((isset($context["_pagename"]) ? $context["_pagename"] : null) != "")) {
            echo twig_escape_filter($this->env, (isset($context["_pagename"]) ? $context["_pagename"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_settings"]) ? $context["_settings"] : null), "name", array()), "html", null, true);
        echo "</title>

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "skin", array()), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "skin", array()), "html", null, true);
        echo "/css/blog-post.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_settings"]) ? $context["_settings"] : null), "description", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_settings"]) ? $context["_settings"] : null), "name", array()), "html", null, true);
        echo "</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_pages"]) ? $context["_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 41
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array()), "html", null, true);
            echo "/s/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </ul>
            </div>
        </div>
    </nav>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "            </div>
            <div class=\"col-md-4\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "search", array()), "search", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"well\">
                    <h4>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "categories", array()), "categories", array()), "html", null, true);
        echo "</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled\">
";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_categories"]) ? $context["_categories"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 69
            if ((($context["i"] % 2) == 0)) {
                // line 70
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array()), "html", null, true);
                echo "/c/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>
                                </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </ul>
                        </div>
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled\">
";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_categories"]) ? $context["_categories"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 79
            if ((($context["i"] % 2) == 1)) {
                // line 80
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array()), "html", null, true);
                echo "/c/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>
                                </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"well\">
                    <h4>";
        // line 89
        echo twig_escape_filter($this->env, sprintf($this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "general", array()), "about_blog", array()), $this->getAttribute((isset($context["_settings"]) ? $context["_settings"] : null), "name", array())), "html", null, true);
        echo "</h4>
                    <p>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_settings"]) ? $context["_settings"] : null), "description", array()), "html", null, true);
        echo "</p>
                </div>

            </div>

        </div>
        <hr>
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_settings"]) ? $context["_settings"] : null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Theme &copy; Copyright 2014 <a href=\"http://startbootstrap.com/\">StartBootstrap</a></p>
                </div>
            </div>
        </footer>
    </div>
    <script src=\"js/jquery.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>

</body>

</html>
";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        echo "...";
    }

    public function getTemplateName()
    {
        return "base.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 50,  206 => 100,  193 => 90,  189 => 89,  182 => 84,  167 => 80,  165 => 79,  161 => 78,  155 => 74,  140 => 70,  138 => 69,  134 => 68,  127 => 64,  115 => 55,  109 => 51,  107 => 50,  98 => 43,  85 => 41,  81 => 40,  69 => 35,  46 => 15,  42 => 14,  33 => 12,  20 => 1,);
    }
}

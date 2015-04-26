<?php

/* inc.post.tpl */
class __TwigTemplate_8e9ca2fdec4011e4b3e81d34c2b7a7a10d25c4f909f936d3429a5e6e62ccc257 extends Twig_Template
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
        // line 1
        echo "                <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>
                <p class=\"lead\">
                    ";
        // line 3
        echo sprintf($this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "posts", array()), "written_by", array()), (((((("<a href=\"" . $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array())) . "/u/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author_id", array())) . "\">") . $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "display_name", array())) . "</a>"));
        echo "
                </p>
                <hr>
                <p><span class=\"glyphicon glyphicon-time\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, sprintf($this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "posts", array()), "published", array()), "August 24, 2013 at 9:00 PM"), "html", null, true);
        echo "</p>
                <hr>
                <img class=\"img-responsive\" src=\"http://placehold.it/900x300\" alt=\"\">
                <hr>
                <p class=\"lead\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "short", array()), "html", null, true);
        echo "</p>
";
        // line 11
        if ((isset($context["ps_full"]) ? $context["ps_full"] : null)) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "message", array()), "html", null, true);
            echo "
";
        } else {
            // line 14
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array()), "html", null, true);
            echo "/p/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "posts", array()), "read_more", array()), "html", null, true);
            echo "</a>
";
        }
        // line 16
        if ((isset($context["ps_comment"]) ? $context["ps_comment"] : null)) {
            // line 17
            echo "                <hr>
                <div class=\"well\">
                    <h4>Leave a Comment:</h4>
                    <form role=\"form\">
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" rows=\"3\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>
";
        }
    }

    public function getTemplateName()
    {
        return "inc.post.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  60 => 16,  50 => 14,  44 => 12,  42 => 11,  38 => 10,  31 => 6,  25 => 3,  19 => 1,);
    }
}

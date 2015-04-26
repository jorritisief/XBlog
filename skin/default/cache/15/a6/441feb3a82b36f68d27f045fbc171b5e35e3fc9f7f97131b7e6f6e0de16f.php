<?php

/* error.tpl */
class __TwigTemplate_15a6441feb3a82b36f68d27f045fbc171b5e35e3fc9f7f97131b7e6f6e0de16f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.tpl");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "error_title", array()), "page_not_found", array()), "html", null, true);
        echo "</h2>
\t";
        // line 4
        echo sprintf($this->getAttribute($this->getAttribute((isset($context["_"]) ? $context["_"] : null), "error", array()), "page_not_found", array()), $this->getAttribute((isset($context["_url"]) ? $context["_url"] : null), "base", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "error.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}

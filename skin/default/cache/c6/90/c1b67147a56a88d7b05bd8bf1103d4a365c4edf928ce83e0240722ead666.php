<?php

/* show_post.tpl */
class __TwigTemplate_c690c1b67147a56a88d7b05bd8bf1103d4a365c4edf928ce83e0240722ead666 extends Twig_Template
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
        $context["ps_full"] = true;
        // line 4
        $context["ps_comment"] = true;
        // line 5
        $this->env->loadTemplate("inc.post.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "show_post.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  41 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}

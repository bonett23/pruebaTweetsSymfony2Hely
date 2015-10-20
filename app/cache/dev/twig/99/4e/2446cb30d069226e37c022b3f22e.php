<?php

/* pruebatweetsBundle::layout.html.twig */
class __TwigTemplate_994e2446cb30d069226e37c022b3f22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Tweets!";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "pruebatweetsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 2,  52 => 20,  46 => 17,  31 => 4,  28 => 3,);
    }
}

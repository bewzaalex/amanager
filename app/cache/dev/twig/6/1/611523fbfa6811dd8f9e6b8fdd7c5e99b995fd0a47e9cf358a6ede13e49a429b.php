<?php

/* default/index.html.twig */
class __TwigTemplate_611523fbfa6811dd8f9e6b8fdd7c5e99b995fd0a47e9cf358a6ede13e49a429b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f5b8c03a956199751e0326b9103645415cd8f8f98a3d2241419564a45f2efe9 = $this->env->getExtension("native_profiler");
        $__internal_8f5b8c03a956199751e0326b9103645415cd8f8f98a3d2241419564a45f2efe9->enter($__internal_8f5b8c03a956199751e0326b9103645415cd8f8f98a3d2241419564a45f2efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5b8c03a956199751e0326b9103645415cd8f8f98a3d2241419564a45f2efe9->leave($__internal_8f5b8c03a956199751e0326b9103645415cd8f8f98a3d2241419564a45f2efe9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a76d941559cd33bd1cf4e366aa243bb4c1ab94f98313915082ccfab480a69a02 = $this->env->getExtension("native_profiler");
        $__internal_a76d941559cd33bd1cf4e366aa243bb4c1ab94f98313915082ccfab480a69a02->enter($__internal_a76d941559cd33bd1cf4e366aa243bb4c1ab94f98313915082ccfab480a69a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_a76d941559cd33bd1cf4e366aa243bb4c1ab94f98313915082ccfab480a69a02->leave($__internal_a76d941559cd33bd1cf4e366aa243bb4c1ab94f98313915082ccfab480a69a02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_2f66ff205b11c622c554dcc61339b7d07ad70a88eacc39885fbf4aa012b155d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be1d80900bb1f6d76e32df1b110dd69a270ac8f01eeec8fc832544d2ac3ddbfb = $this->env->getExtension("native_profiler");
        $__internal_be1d80900bb1f6d76e32df1b110dd69a270ac8f01eeec8fc832544d2ac3ddbfb->enter($__internal_be1d80900bb1f6d76e32df1b110dd69a270ac8f01eeec8fc832544d2ac3ddbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_be1d80900bb1f6d76e32df1b110dd69a270ac8f01eeec8fc832544d2ac3ddbfb->leave($__internal_be1d80900bb1f6d76e32df1b110dd69a270ac8f01eeec8fc832544d2ac3ddbfb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b92669b3a7926404a2a3c03db2a0d8e2d8f2ac8170b0c7807a77a961c322b9aa = $this->env->getExtension("native_profiler");
        $__internal_b92669b3a7926404a2a3c03db2a0d8e2d8f2ac8170b0c7807a77a961c322b9aa->enter($__internal_b92669b3a7926404a2a3c03db2a0d8e2d8f2ac8170b0c7807a77a961c322b9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b92669b3a7926404a2a3c03db2a0d8e2d8f2ac8170b0c7807a77a961c322b9aa->leave($__internal_b92669b3a7926404a2a3c03db2a0d8e2d8f2ac8170b0c7807a77a961c322b9aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_095a54af36858c58bc9b4337912c30fd836be79fd855c8c981935c79c9c85bad = $this->env->getExtension("native_profiler");
        $__internal_095a54af36858c58bc9b4337912c30fd836be79fd855c8c981935c79c9c85bad->enter($__internal_095a54af36858c58bc9b4337912c30fd836be79fd855c8c981935c79c9c85bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_095a54af36858c58bc9b4337912c30fd836be79fd855c8c981935c79c9c85bad->leave($__internal_095a54af36858c58bc9b4337912c30fd836be79fd855c8c981935c79c9c85bad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7eebce0d48656754820dcecc1c9bdba99cf1d8e824d655d4e7e189a08361f8d = $this->env->getExtension("native_profiler");
        $__internal_c7eebce0d48656754820dcecc1c9bdba99cf1d8e824d655d4e7e189a08361f8d->enter($__internal_c7eebce0d48656754820dcecc1c9bdba99cf1d8e824d655d4e7e189a08361f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7eebce0d48656754820dcecc1c9bdba99cf1d8e824d655d4e7e189a08361f8d->leave($__internal_c7eebce0d48656754820dcecc1c9bdba99cf1d8e824d655d4e7e189a08361f8d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33ac51a2951858edf91ad54a8892c0936602cdd22b5615a062e1331b146a35cb = $this->env->getExtension("native_profiler");
        $__internal_33ac51a2951858edf91ad54a8892c0936602cdd22b5615a062e1331b146a35cb->enter($__internal_33ac51a2951858edf91ad54a8892c0936602cdd22b5615a062e1331b146a35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_33ac51a2951858edf91ad54a8892c0936602cdd22b5615a062e1331b146a35cb->leave($__internal_33ac51a2951858edf91ad54a8892c0936602cdd22b5615a062e1331b146a35cb_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}

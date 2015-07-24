<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7e272b3a85245ac85b18a84c65d1f9b5e3cbe6e8316eadf362565e4001945ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5b2c4caa557cbb3dd1f5d502b2fc052a560995d63ac9e1655ab4cb84faa3a21 = $this->env->getExtension("native_profiler");
        $__internal_a5b2c4caa557cbb3dd1f5d502b2fc052a560995d63ac9e1655ab4cb84faa3a21->enter($__internal_a5b2c4caa557cbb3dd1f5d502b2fc052a560995d63ac9e1655ab4cb84faa3a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b2c4caa557cbb3dd1f5d502b2fc052a560995d63ac9e1655ab4cb84faa3a21->leave($__internal_a5b2c4caa557cbb3dd1f5d502b2fc052a560995d63ac9e1655ab4cb84faa3a21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3db619a355435d96526d331b660f7193ff6b08c374dfb87b8ae234e499132b4e = $this->env->getExtension("native_profiler");
        $__internal_3db619a355435d96526d331b660f7193ff6b08c374dfb87b8ae234e499132b4e->enter($__internal_3db619a355435d96526d331b660f7193ff6b08c374dfb87b8ae234e499132b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3db619a355435d96526d331b660f7193ff6b08c374dfb87b8ae234e499132b4e->leave($__internal_3db619a355435d96526d331b660f7193ff6b08c374dfb87b8ae234e499132b4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a1a38666bffb16ebbec9fdc56d75ad463ac850ac394a31513ac20bbafff2486 = $this->env->getExtension("native_profiler");
        $__internal_2a1a38666bffb16ebbec9fdc56d75ad463ac850ac394a31513ac20bbafff2486->enter($__internal_2a1a38666bffb16ebbec9fdc56d75ad463ac850ac394a31513ac20bbafff2486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a1a38666bffb16ebbec9fdc56d75ad463ac850ac394a31513ac20bbafff2486->leave($__internal_2a1a38666bffb16ebbec9fdc56d75ad463ac850ac394a31513ac20bbafff2486_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39675d7947482b74645df277ebad3a92fb0ea70c88b6dfa9ded647c3f07873a1 = $this->env->getExtension("native_profiler");
        $__internal_39675d7947482b74645df277ebad3a92fb0ea70c88b6dfa9ded647c3f07873a1->enter($__internal_39675d7947482b74645df277ebad3a92fb0ea70c88b6dfa9ded647c3f07873a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_39675d7947482b74645df277ebad3a92fb0ea70c88b6dfa9ded647c3f07873a1->leave($__internal_39675d7947482b74645df277ebad3a92fb0ea70c88b6dfa9ded647c3f07873a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}

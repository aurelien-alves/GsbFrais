<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_49ab643400ab58731865f132d64ab7ad4643f2b0db26f7f5130543b7177f3470 extends Twig_Template
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
        $__internal_7e234c52682670e29f5c6172459284124c95ede868098e163aa3acb67a892f5e = $this->env->getExtension("native_profiler");
        $__internal_7e234c52682670e29f5c6172459284124c95ede868098e163aa3acb67a892f5e->enter($__internal_7e234c52682670e29f5c6172459284124c95ede868098e163aa3acb67a892f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e234c52682670e29f5c6172459284124c95ede868098e163aa3acb67a892f5e->leave($__internal_7e234c52682670e29f5c6172459284124c95ede868098e163aa3acb67a892f5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28b58ea24b81ecacbfbba2b685382b2c0ac28837652b6cc9d00f81dc3badbc0e = $this->env->getExtension("native_profiler");
        $__internal_28b58ea24b81ecacbfbba2b685382b2c0ac28837652b6cc9d00f81dc3badbc0e->enter($__internal_28b58ea24b81ecacbfbba2b685382b2c0ac28837652b6cc9d00f81dc3badbc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28b58ea24b81ecacbfbba2b685382b2c0ac28837652b6cc9d00f81dc3badbc0e->leave($__internal_28b58ea24b81ecacbfbba2b685382b2c0ac28837652b6cc9d00f81dc3badbc0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d771075a21b1fd737fc4f5de580f707a3b85da66a1d82be6e0684e8385a9a13f = $this->env->getExtension("native_profiler");
        $__internal_d771075a21b1fd737fc4f5de580f707a3b85da66a1d82be6e0684e8385a9a13f->enter($__internal_d771075a21b1fd737fc4f5de580f707a3b85da66a1d82be6e0684e8385a9a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d771075a21b1fd737fc4f5de580f707a3b85da66a1d82be6e0684e8385a9a13f->leave($__internal_d771075a21b1fd737fc4f5de580f707a3b85da66a1d82be6e0684e8385a9a13f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2251d0a8b78bf8014b6851112c00ed82d5f79c782035d159892ff249d59839b9 = $this->env->getExtension("native_profiler");
        $__internal_2251d0a8b78bf8014b6851112c00ed82d5f79c782035d159892ff249d59839b9->enter($__internal_2251d0a8b78bf8014b6851112c00ed82d5f79c782035d159892ff249d59839b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2251d0a8b78bf8014b6851112c00ed82d5f79c782035d159892ff249d59839b9->leave($__internal_2251d0a8b78bf8014b6851112c00ed82d5f79c782035d159892ff249d59839b9_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

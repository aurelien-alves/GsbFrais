<?php

/* base.html.twig */
class __TwigTemplate_415da3242cd81acba9c852af497e67689278dca191e364b8fe8afe35d40b795a extends Twig_Template
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
        $__internal_f0605c92dadff3fd852d9e336ebe1c2021991c6d40521e3e7452ffa7f36756ce = $this->env->getExtension("native_profiler");
        $__internal_f0605c92dadff3fd852d9e336ebe1c2021991c6d40521e3e7452ffa7f36756ce->enter($__internal_f0605c92dadff3fd852d9e336ebe1c2021991c6d40521e3e7452ffa7f36756ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f0605c92dadff3fd852d9e336ebe1c2021991c6d40521e3e7452ffa7f36756ce->leave($__internal_f0605c92dadff3fd852d9e336ebe1c2021991c6d40521e3e7452ffa7f36756ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18ffa09fcdd46e0de1c650afe867e0a1e57da3afa513d40b621d1f681bf2869e = $this->env->getExtension("native_profiler");
        $__internal_18ffa09fcdd46e0de1c650afe867e0a1e57da3afa513d40b621d1f681bf2869e->enter($__internal_18ffa09fcdd46e0de1c650afe867e0a1e57da3afa513d40b621d1f681bf2869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_18ffa09fcdd46e0de1c650afe867e0a1e57da3afa513d40b621d1f681bf2869e->leave($__internal_18ffa09fcdd46e0de1c650afe867e0a1e57da3afa513d40b621d1f681bf2869e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f1592a3ab5cbf29bb062e55fc4da6d624264daefe2341540f86211e544e9bf8 = $this->env->getExtension("native_profiler");
        $__internal_5f1592a3ab5cbf29bb062e55fc4da6d624264daefe2341540f86211e544e9bf8->enter($__internal_5f1592a3ab5cbf29bb062e55fc4da6d624264daefe2341540f86211e544e9bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f1592a3ab5cbf29bb062e55fc4da6d624264daefe2341540f86211e544e9bf8->leave($__internal_5f1592a3ab5cbf29bb062e55fc4da6d624264daefe2341540f86211e544e9bf8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61dec071d8b3e27c85aa9dba2407c9a323216752be89eabd7b32e85c1de90ed0 = $this->env->getExtension("native_profiler");
        $__internal_61dec071d8b3e27c85aa9dba2407c9a323216752be89eabd7b32e85c1de90ed0->enter($__internal_61dec071d8b3e27c85aa9dba2407c9a323216752be89eabd7b32e85c1de90ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61dec071d8b3e27c85aa9dba2407c9a323216752be89eabd7b32e85c1de90ed0->leave($__internal_61dec071d8b3e27c85aa9dba2407c9a323216752be89eabd7b32e85c1de90ed0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6083e2b0dbcde46de03033f4cdea5a5ab1275056a8cd75129bfed47ce23d1525 = $this->env->getExtension("native_profiler");
        $__internal_6083e2b0dbcde46de03033f4cdea5a5ab1275056a8cd75129bfed47ce23d1525->enter($__internal_6083e2b0dbcde46de03033f4cdea5a5ab1275056a8cd75129bfed47ce23d1525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6083e2b0dbcde46de03033f4cdea5a5ab1275056a8cd75129bfed47ce23d1525->leave($__internal_6083e2b0dbcde46de03033f4cdea5a5ab1275056a8cd75129bfed47ce23d1525_prof);

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
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

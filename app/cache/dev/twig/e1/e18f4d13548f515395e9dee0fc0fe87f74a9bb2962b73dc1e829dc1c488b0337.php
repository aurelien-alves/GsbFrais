<?php

/* ALGsbBundle::base.html.twig */
class __TwigTemplate_29c12e0b74d839e23eae96efa76939bf2f2c66ed793d85c49c6f401b8dfe8934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de372e774d733198ca8b3eed39a3d112b0f4b86dd5d4447fe3d2303539488af6 = $this->env->getExtension("native_profiler");
        $__internal_de372e774d733198ca8b3eed39a3d112b0f4b86dd5d4447fe3d2303539488af6->enter($__internal_de372e774d733198ca8b3eed39a3d112b0f4b86dd5d4447fe3d2303539488af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle::base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body>
    <div id=\"content\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "    </div>

    <div id=\"footer\">
        ";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "    </div>
</body>
</html>";
        
        $__internal_de372e774d733198ca8b3eed39a3d112b0f4b86dd5d4447fe3d2303539488af6->leave($__internal_de372e774d733198ca8b3eed39a3d112b0f4b86dd5d4447fe3d2303539488af6_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_07e44c70e4b16776868ece562165cf959d1723eba04fc0355c4c41e255684a6e = $this->env->getExtension("native_profiler");
        $__internal_07e44c70e4b16776868ece562165cf959d1723eba04fc0355c4c41e255684a6e->enter($__internal_07e44c70e4b16776868ece562165cf959d1723eba04fc0355c4c41e255684a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/algsb/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/algsb/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/algsb/js/bootstrap.js"), "html", null, true);
        echo "\"></script>           
    ";
        
        $__internal_07e44c70e4b16776868ece562165cf959d1723eba04fc0355c4c41e255684a6e->leave($__internal_07e44c70e4b16776868ece562165cf959d1723eba04fc0355c4c41e255684a6e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9926c2d810e3a660b54af890f62d295e412069b6c2e2d10ad1cac6db6fe370 = $this->env->getExtension("native_profiler");
        $__internal_9f9926c2d810e3a660b54af890f62d295e412069b6c2e2d10ad1cac6db6fe370->enter($__internal_9f9926c2d810e3a660b54af890f62d295e412069b6c2e2d10ad1cac6db6fe370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_9f9926c2d810e3a660b54af890f62d295e412069b6c2e2d10ad1cac6db6fe370->leave($__internal_9f9926c2d810e3a660b54af890f62d295e412069b6c2e2d10ad1cac6db6fe370_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_60675b69e707dd5ad92058b8b3083b500d3a55d9f22701e9002af6f32daf6eef = $this->env->getExtension("native_profiler");
        $__internal_60675b69e707dd5ad92058b8b3083b500d3a55d9f22701e9002af6f32daf6eef->enter($__internal_60675b69e707dd5ad92058b8b3083b500d3a55d9f22701e9002af6f32daf6eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 20
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/algsb/css/page.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <center>Aurélien ALVES / Vincent LE GUEVEL</center>
            ";
        
        $__internal_60675b69e707dd5ad92058b8b3083b500d3a55d9f22701e9002af6f32daf6eef->leave($__internal_60675b69e707dd5ad92058b8b3083b500d3a55d9f22701e9002af6f32daf6eef_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  93 => 19,  85 => 14,  79 => 13,  70 => 8,  66 => 7,  61 => 6,  55 => 5,  46 => 23,  44 => 19,  39 => 16,  37 => 13,  32 => 10,  30 => 5,  25 => 2,);
    }
}
/* {# ALGsbBundle/Resources/views/base.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block head %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/algsb/css/bootstrap.css') }}" />*/
/*         <script src="{{ asset('bundles/algsb/js/jquery-2.1.4.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/algsb/js/bootstrap.js') }}"></script>           */
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     <div id="content">*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="footer">*/
/*         {% block footer %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/algsb/css/page.css') }}" type="text/css" />*/
/*             <center>Aurélien ALVES / Vincent LE GUEVEL</center>*/
/*             {% endblock %}*/
/*     </div>*/
/* </body>*/
/* </html>*/

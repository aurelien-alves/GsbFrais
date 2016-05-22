<?php

/* ALGsbBundle:Visiteur:saisirHorsForfait.html.twig */
class __TwigTemplate_26c13120f694b9c577ff855d8766ab71e21a21b8af797b1d54a14f66ad5ac096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Visiteur:saisirHorsForfait.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ALGsbBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ceb1550139d95717ea6f0e24df181c5111b1c43e25708be7a3785ff77dce5c6 = $this->env->getExtension("native_profiler");
        $__internal_4ceb1550139d95717ea6f0e24df181c5111b1c43e25708be7a3785ff77dce5c6->enter($__internal_4ceb1550139d95717ea6f0e24df181c5111b1c43e25708be7a3785ff77dce5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Visiteur:saisirHorsForfait.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ceb1550139d95717ea6f0e24df181c5111b1c43e25708be7a3785ff77dce5c6->leave($__internal_4ceb1550139d95717ea6f0e24df181c5111b1c43e25708be7a3785ff77dce5c6_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef0432a360ca0fbec91fe6ab95b44b0ff5894eff61f5b76aca215cbb1de4f98c = $this->env->getExtension("native_profiler");
        $__internal_ef0432a360ca0fbec91fe6ab95b44b0ff5894eff61f5b76aca215cbb1de4f98c->enter($__internal_ef0432a360ca0fbec91fe6ab95b44b0ff5894eff61f5b76aca215cbb1de4f98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Saisir Frais</title>

";
        
        $__internal_ef0432a360ca0fbec91fe6ab95b44b0ff5894eff61f5b76aca215cbb1de4f98c->leave($__internal_ef0432a360ca0fbec91fe6ab95b44b0ff5894eff61f5b76aca215cbb1de4f98c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_935f7495865528a9b98f5fd4af0e140127575681e00510fc6c26c8a9070afe58 = $this->env->getExtension("native_profiler");
        $__internal_935f7495865528a9b98f5fd4af0e140127575681e00510fc6c26c8a9070afe58->enter($__internal_935f7495865528a9b98f5fd4af0e140127575681e00510fc6c26c8a9070afe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <div class=\"page-header\">
                    <center><h2>Gérer vos frais </h2></center>
                </div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("al_gsb_deconnexion");
        echo "\">déconnexion</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("al_gsb_accueil");
        echo "\">accueil</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("al_gsb_saisir_frais");
        echo "\">gérer vos frais</a></li>
                    <li class=\"active\">saisir hors frais</li>
                </ol>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8  col-lg-offset-2\">                    
                    <center>
                        <div class=\"page-header\">
                            <h4>Ajouter un frais hors forfait</h4>
                        </div>
                        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                    </center>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_935f7495865528a9b98f5fd4af0e140127575681e00510fc6c26c8a9070afe58->leave($__internal_935f7495865528a9b98f5fd4af0e140127575681e00510fc6c26c8a9070afe58_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a6af253f33ea4aea85b5bc24d316abed769c9febbf07e5096dd37cfb85bbd38f = $this->env->getExtension("native_profiler");
        $__internal_a6af253f33ea4aea85b5bc24d316abed769c9febbf07e5096dd37cfb85bbd38f->enter($__internal_a6af253f33ea4aea85b5bc24d316abed769c9febbf07e5096dd37cfb85bbd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_a6af253f33ea4aea85b5bc24d316abed769c9febbf07e5096dd37cfb85bbd38f->leave($__internal_a6af253f33ea4aea85b5bc24d316abed769c9febbf07e5096dd37cfb85bbd38f_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Visiteur:saisirHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  106 => 40,  91 => 31,  78 => 21,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'ALGsbBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <title>GSB | Saisir Frais</title>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <div class="page-header">*/
/*                     <center><h2>Gérer vos frais </h2></center>*/
/*                 </div>*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="{{ path('al_gsb_deconnexion') }}">déconnexion</a></li>*/
/*                     <li><a href="{{ path('al_gsb_accueil') }}">accueil</a></li>*/
/*                     <li><a href="{{ path('al_gsb_saisir_frais') }}">gérer vos frais</a></li>*/
/*                     <li class="active">saisir hors frais</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-8  col-lg-offset-2">                    */
/*                     <center>*/
/*                         <div class="page-header">*/
/*                             <h4>Ajouter un frais hors forfait</h4>*/
/*                         </div>*/
/*                         {{ form(form)}}*/
/*                     </center>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */

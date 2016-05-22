<?php

/* ALGsbBundle:Connexion:connexion.html.twig */
class __TwigTemplate_4871b754eeb2a9d98bcfe184a783e650229d5761ce06a752c23d143c29a97b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Connexion:connexion.html.twig", 1);
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
        $__internal_8f0cdb421d4664dd66319999f69f0d48576d6462c899b4af0c651e4789e75d64 = $this->env->getExtension("native_profiler");
        $__internal_8f0cdb421d4664dd66319999f69f0d48576d6462c899b4af0c651e4789e75d64->enter($__internal_8f0cdb421d4664dd66319999f69f0d48576d6462c899b4af0c651e4789e75d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0cdb421d4664dd66319999f69f0d48576d6462c899b4af0c651e4789e75d64->leave($__internal_8f0cdb421d4664dd66319999f69f0d48576d6462c899b4af0c651e4789e75d64_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_6281927fcb06d9489df98dd0da7b33393fc6bf43f7a5efb9f1ec19d9d9964cd3 = $this->env->getExtension("native_profiler");
        $__internal_6281927fcb06d9489df98dd0da7b33393fc6bf43f7a5efb9f1ec19d9d9964cd3->enter($__internal_6281927fcb06d9489df98dd0da7b33393fc6bf43f7a5efb9f1ec19d9d9964cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>Bienvenue sur GSB</title>
    <center><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/algsb/images/gsb.png"), "html", null, true);
        echo "\" /></center><br />
    ";
        
        $__internal_6281927fcb06d9489df98dd0da7b33393fc6bf43f7a5efb9f1ec19d9d9964cd3->leave($__internal_6281927fcb06d9489df98dd0da7b33393fc6bf43f7a5efb9f1ec19d9d9964cd3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_58fffba276f469a6a847fd8167302934c4b4077c2d53fca2239c0ffe91cf1a8a = $this->env->getExtension("native_profiler");
        $__internal_58fffba276f469a6a847fd8167302934c4b4077c2d53fca2239c0ffe91cf1a8a->enter($__internal_58fffba276f469a6a847fd8167302934c4b4077c2d53fca2239c0ffe91cf1a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\">
        <center><div class=\"well col-lg-6 col-sm-offset-3\">
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <div class=\"form-group\">
                    ";
        // line 19
        if (array_key_exists("hasError", $context)) {
            // line 20
            echo "                        <div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close fade\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["hasError"]) ? $context["hasError"] : $this->getContext($context, "hasError")), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 25
        echo "                    ";
        // line 26
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomDeCompte", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Identifiant"));
        echo "

                    ";
        // line 29
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomDeCompte", array()), 'errors');
        echo "

                    <div class=\"col-sm-8\">

                        ";
        // line 34
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomDeCompte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    </div>
                </div>

                <div class=\"form-group\">

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de passe"));
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'errors');
        echo "

                    <div class=\"col-sm-8\">

                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    </div>

                </div>


                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reinitialiser", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "  

                ";
        // line 57
        echo "
                ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



            </div></center>

    ";
        
        $__internal_58fffba276f469a6a847fd8167302934c4b4077c2d53fca2239c0ffe91cf1a8a->leave($__internal_58fffba276f469a6a847fd8167302934c4b4077c2d53fca2239c0ffe91cf1a8a_prof);

    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e4b1537ab08169eb78a465e2ebc6d3cd81823733fceb022d2da9755a3632794d = $this->env->getExtension("native_profiler");
        $__internal_e4b1537ab08169eb78a465e2ebc6d3cd81823733fceb022d2da9755a3632794d->enter($__internal_e4b1537ab08169eb78a465e2ebc6d3cd81823733fceb022d2da9755a3632794d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 67
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_e4b1537ab08169eb78a465e2ebc6d3cd81823733fceb022d2da9755a3632794d->leave($__internal_e4b1537ab08169eb78a465e2ebc6d3cd81823733fceb022d2da9755a3632794d_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Connexion:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 67,  165 => 66,  151 => 58,  148 => 57,  143 => 54,  139 => 53,  129 => 46,  122 => 42,  118 => 41,  107 => 34,  99 => 29,  93 => 26,  91 => 25,  85 => 22,  81 => 20,  79 => 19,  73 => 16,  68 => 14,  63 => 11,  57 => 10,  48 => 7,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'ALGsbBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <title>Bienvenue sur GSB</title>*/
/*     <center><img src="{{ asset('bundles/algsb/images/gsb.png') }}" /></center><br />*/
/*     {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <center><div class="well col-lg-6 col-sm-offset-3">*/
/*                 {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*                 {{ form_errors(form) }}*/
/* */
/*                 <div class="form-group">*/
/*                     {% if hasError is defined %}*/
/*                         <div class="alert alert-danger">*/
/*                             <a href="#" class="close fade" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                             {{hasError}}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {# Génération du label. #}*/
/*                     {{ form_label(form.nomDeCompte, "Identifiant", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*                     {# Affichage des erreurs pour ce champ précis. #}*/
/*                     {{ form_errors(form.nomDeCompte) }}*/
/* */
/*                     <div class="col-sm-8">*/
/* */
/*                         {# Génération de l'input. #}*/
/*                         {{ form_widget(form.nomDeCompte, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/* */
/*                     {{ form_label(form.motDePasse, "Mot de passe", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                     {{ form_errors(form.motDePasse) }}*/
/* */
/*                     <div class="col-sm-8">*/
/* */
/*                         {{ form_widget(form.motDePasse, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 {{ form_widget(form.valider, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*                 {{ form_widget(form.reinitialiser, {'attr': {'class': 'btn btn-primary'}}) }}  */
/* */
/*                 {# Fermeture de la balise <form> du formulaire HTML #}*/
/* */
/*                 {{ form_end(form) }}*/
/* */
/* */
/* */
/*             </div></center>*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/

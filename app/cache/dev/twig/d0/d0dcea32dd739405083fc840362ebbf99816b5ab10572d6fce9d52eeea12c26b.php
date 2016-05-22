<?php

/* ALGsbBundle:Accueil:accueil.html.twig */
class __TwigTemplate_455ec8ec54a30c14cc786d0829cd5ed463fe978451239293a8d396f3332941a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Accueil:accueil.html.twig", 1);
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
        $__internal_e35eed8da5a3592e0170b8ac0cf65fb684a9523d60dd99e7a7492b173451c848 = $this->env->getExtension("native_profiler");
        $__internal_e35eed8da5a3592e0170b8ac0cf65fb684a9523d60dd99e7a7492b173451c848->enter($__internal_e35eed8da5a3592e0170b8ac0cf65fb684a9523d60dd99e7a7492b173451c848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35eed8da5a3592e0170b8ac0cf65fb684a9523d60dd99e7a7492b173451c848->leave($__internal_e35eed8da5a3592e0170b8ac0cf65fb684a9523d60dd99e7a7492b173451c848_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_926434bd65c80f18b7532495dd771db8b38f3e5cd69c8fcf5eaf534c6e4a9937 = $this->env->getExtension("native_profiler");
        $__internal_926434bd65c80f18b7532495dd771db8b38f3e5cd69c8fcf5eaf534c6e4a9937->enter($__internal_926434bd65c80f18b7532495dd771db8b38f3e5cd69c8fcf5eaf534c6e4a9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Accueil</title>

";
        
        $__internal_926434bd65c80f18b7532495dd771db8b38f3e5cd69c8fcf5eaf534c6e4a9937->leave($__internal_926434bd65c80f18b7532495dd771db8b38f3e5cd69c8fcf5eaf534c6e4a9937_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9bee31db16da776c56c4c002918b134f911e739d4631bad3506cf8c97839304 = $this->env->getExtension("native_profiler");
        $__internal_a9bee31db16da776c56c4c002918b134f911e739d4631bad3506cf8c97839304->enter($__internal_a9bee31db16da776c56c4c002918b134f911e739d4631bad3506cf8c97839304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <div class=\"page-header\">
                    ";
        // line 16
        if (array_key_exists("visiteur", $context)) {
            // line 17
            echo "                        <center><h2>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array()), "html", null, true);
            echo "</h2></center>
                        ";
        } elseif (        // line 18
array_key_exists("comptable", $context)) {
            // line 19
            echo "                        <center><h2>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comptable"]) ? $context["comptable"] : $this->getContext($context, "comptable")), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comptable"]) ? $context["comptable"] : $this->getContext($context, "comptable")), "nom", array()), "html", null, true);
            echo "</h2></center>
                        ";
        }
        // line 21
        echo "                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-lg-offset-3\">
                        <center>
                            ";
        // line 25
        if (array_key_exists("visiteur", $context)) {
            // line 26
            echo "                                <a class=\"btn btn-info\" href=\"";
            echo $this->env->getExtension('routing')->getPath("al_gsb_saisir_frais");
            echo "\" role=\"button\">Gérer vos frais</a>
                                <a class=\"btn btn-info\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("al_gsb_consulter_frais");
            echo "\" role=\"button\">suivre vos frais</a>
                            ";
        } elseif (        // line 28
array_key_exists("comptable", $context)) {
            // line 29
            echo "                                <a class=\"btn btn-info\" href=\"";
            echo $this->env->getExtension('routing')->getPath("al_gsb_valider_frais");
            echo "\" role=\"button\">Valider les frais</a>
                                <a class=\"btn btn-info\" href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("al_gsb_suivre_paiement_frais");
            echo "\" role=\"button\">suivre le paiement des frais</a>
                            ";
        }
        // line 32
        echo "                        </center>
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-lg-offset-3\">
                        <center><a class=\"btn btn-info\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("al_gsb_deconnexion");
        echo "\" role=\"button\">Deconnexion</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_a9bee31db16da776c56c4c002918b134f911e739d4631bad3506cf8c97839304->leave($__internal_a9bee31db16da776c56c4c002918b134f911e739d4631bad3506cf8c97839304_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_75eef5d5c80c033c0a3567b9cb2894c39acaec5f17d92e140f23624570c68e7c = $this->env->getExtension("native_profiler");
        $__internal_75eef5d5c80c033c0a3567b9cb2894c39acaec5f17d92e140f23624570c68e7c->enter($__internal_75eef5d5c80c033c0a3567b9cb2894c39acaec5f17d92e140f23624570c68e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_75eef5d5c80c033c0a3567b9cb2894c39acaec5f17d92e140f23624570c68e7c->leave($__internal_75eef5d5c80c033c0a3567b9cb2894c39acaec5f17d92e140f23624570c68e7c_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  138 => 47,  123 => 38,  115 => 32,  110 => 30,  105 => 29,  103 => 28,  99 => 27,  94 => 26,  92 => 25,  86 => 21,  78 => 19,  76 => 18,  69 => 17,  67 => 16,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'ALGsbBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <title>GSB | Accueil</title>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <div class="page-header">*/
/*                     {% if visiteur is defined %}*/
/*                         <center><h2>Bienvenue {{visiteur.prenom}} {{visiteur.nom}}</h2></center>*/
/*                         {% elseif comptable is defined %}*/
/*                         <center><h2>Bienvenue {{comptable.prenom}} {{comptable.nom}}</h2></center>*/
/*                         {% endif %}*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6 col-lg-offset-3">*/
/*                         <center>*/
/*                             {% if visiteur is defined %}*/
/*                                 <a class="btn btn-info" href="{{path('al_gsb_saisir_frais')}}" role="button">Gérer vos frais</a>*/
/*                                 <a class="btn btn-info" href="{{path('al_gsb_consulter_frais')}}" role="button">suivre vos frais</a>*/
/*                             {% elseif comptable is defined %}*/
/*                                 <a class="btn btn-info" href="{{path('al_gsb_valider_frais')}}" role="button">Valider les frais</a>*/
/*                                 <a class="btn btn-info" href="{{path('al_gsb_suivre_paiement_frais')}}" role="button">suivre le paiement des frais</a>*/
/*                             {% endif %}*/
/*                         </center>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6 col-lg-offset-3">*/
/*                         <center><a class="btn btn-info" href="{{path('al_gsb_deconnexion')}}" role="button">Deconnexion</a></center>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/

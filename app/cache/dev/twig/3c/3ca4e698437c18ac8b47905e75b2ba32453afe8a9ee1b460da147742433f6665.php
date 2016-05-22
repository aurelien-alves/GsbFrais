<?php

/* ALGsbBundle:Comptable:detailsValiderFrais.html.twig */
class __TwigTemplate_4d83e4782ae516ca9f8029c9ec7caa550647a614bae230fed62a1845096076e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Comptable:detailsValiderFrais.html.twig", 1);
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
        $__internal_656c0b495095d6d8db45ac8c03b101f4a9b0683c475a54c84055b294675295c8 = $this->env->getExtension("native_profiler");
        $__internal_656c0b495095d6d8db45ac8c03b101f4a9b0683c475a54c84055b294675295c8->enter($__internal_656c0b495095d6d8db45ac8c03b101f4a9b0683c475a54c84055b294675295c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Comptable:detailsValiderFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656c0b495095d6d8db45ac8c03b101f4a9b0683c475a54c84055b294675295c8->leave($__internal_656c0b495095d6d8db45ac8c03b101f4a9b0683c475a54c84055b294675295c8_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d7e011cd3bf7101531ed85dc92f19ff5cb28e881784abb95a569cf3fb821412 = $this->env->getExtension("native_profiler");
        $__internal_4d7e011cd3bf7101531ed85dc92f19ff5cb28e881784abb95a569cf3fb821412->enter($__internal_4d7e011cd3bf7101531ed85dc92f19ff5cb28e881784abb95a569cf3fb821412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Valider frais</title>

";
        
        $__internal_4d7e011cd3bf7101531ed85dc92f19ff5cb28e881784abb95a569cf3fb821412->leave($__internal_4d7e011cd3bf7101531ed85dc92f19ff5cb28e881784abb95a569cf3fb821412_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd36673e16d99dd93d8e0376df841ab2fbd2f23dd9912ed23b228ba6b5f6abe7 = $this->env->getExtension("native_profiler");
        $__internal_fd36673e16d99dd93d8e0376df841ab2fbd2f23dd9912ed23b228ba6b5f6abe7->enter($__internal_fd36673e16d99dd93d8e0376df841ab2fbd2f23dd9912ed23b228ba6b5f6abe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <div class=\"page-header\">
                    <center><h2>Valider les fiches de frais </h2></center>
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
        echo $this->env->getExtension('routing')->getPath("al_gsb_valider_frais");
        echo "\">valider fiches frais</a></li>
                    <li class=\"active\">details fiches frais</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <center>
                    <div class=\"alert alert-info\" role=\"alert\">
                        Fiche de frais de ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "utilisateur", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "utilisateur", array()), "nom", array()), "html", null, true);
        echo " créé le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "dateRedac", array()), "d/m/Y"), "html", null, true);
        echo " | Dernière modification le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "dateModif", array()), "d/m/Y"), "html", null, true);
        echo "
                    </div>
                    <div class=\"alert alert-success\" role=\"alert\">
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_valider_frais_etat", array("id_ficheFrais" => $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "id", array()))), "html", null, true);
        echo "\">Valider cette fiche de frais</a></div>
                        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                    <hr>
                    ";
        // line 36
        if (twig_test_empty($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisHorsForfait", array()))) {
            // line 37
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            <a>Pas de frais hors forfait pour cette fiche.</a>
                        </div>

                    ";
        } else {
            // line 42
            echo "                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Libelle</th>
                                    <th>Date frais</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisHorsForfait", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisHorsForfait"]) {
                // line 52
                echo "                                    <tr>
                                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "libelle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "dateFrais", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "montant", array()), "html", null, true);
                echo "</td>
                                        <td><a class=\"btn btn-warning\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_comptable_reporter_hors_forfait", array("id_horsForfait" => $this->getAttribute($context["ligneFraisHorsForfait"], "id", array()), "id_ficheFrais" => $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "id", array()))), "html", null, true);
                echo "\" role=\"button\">Reporter</a></p></td>
                                        <td><a class=\"btn btn-danger\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_comptable_supprimer_hors_forfait", array("id_horsForfait" => $this->getAttribute($context["ligneFraisHorsForfait"], "id", array()), "id_ficheFrais" => $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "id", array()))), "html", null, true);
                echo "\" role=\"button\">Refuser</a></p></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisHorsForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            </tbody>
                        </table>

                    ";
        }
        // line 64
        echo "                </center>
            </div>
        </div>
    </div>

";
        
        $__internal_fd36673e16d99dd93d8e0376df841ab2fbd2f23dd9912ed23b228ba6b5f6abe7->leave($__internal_fd36673e16d99dd93d8e0376df841ab2fbd2f23dd9912ed23b228ba6b5f6abe7_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f03733ca58b4567098aa751ae6d47fa34ed258b7a15021f0418961f3542e7fe7 = $this->env->getExtension("native_profiler");
        $__internal_f03733ca58b4567098aa751ae6d47fa34ed258b7a15021f0418961f3542e7fe7->enter($__internal_f03733ca58b4567098aa751ae6d47fa34ed258b7a15021f0418961f3542e7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 72
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_f03733ca58b4567098aa751ae6d47fa34ed258b7a15021f0418961f3542e7fe7->leave($__internal_f03733ca58b4567098aa751ae6d47fa34ed258b7a15021f0418961f3542e7fe7_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Comptable:detailsValiderFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 72,  181 => 71,  169 => 64,  163 => 60,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  135 => 52,  131 => 51,  120 => 42,  113 => 37,  111 => 36,  106 => 34,  102 => 33,  90 => 30,  78 => 21,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'ALGsbBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <title>GSB | Valider frais</title>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <div class="page-header">*/
/*                     <center><h2>Valider les fiches de frais </h2></center>*/
/*                 </div>*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="{{path('al_gsb_deconnexion')}}">déconnexion</a></li>*/
/*                     <li><a href="{{path('al_gsb_accueil')}}">accueil</a></li>                  */
/*                     <li><a href="{{path('al_gsb_valider_frais')}}">valider fiches frais</a></li>*/
/*                     <li class="active">details fiches frais</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <center>*/
/*                     <div class="alert alert-info" role="alert">*/
/*                         Fiche de frais de {{ficheFrais.utilisateur.prenom}} {{ficheFrais.utilisateur.nom}} créé le {{ficheFrais.dateRedac | date('d/m/Y')}} | Dernière modification le {{ficheFrais.dateModif | date('d/m/Y')}}*/
/*                     </div>*/
/*                     <div class="alert alert-success" role="alert">*/
/*                         <a href="{{path('al_gsb_valider_frais_etat',{'id_ficheFrais': ficheFrais.id})}}">Valider cette fiche de frais</a></div>*/
/*                         {{form(form)}}*/
/*                     <hr>*/
/*                     {% if ficheFrais.lignesFraisHorsForfait is empty%}*/
/*                         <div class="alert alert-warning" role="alert">*/
/*                             <a>Pas de frais hors forfait pour cette fiche.</a>*/
/*                         </div>*/
/* */
/*                     {%else%}*/
/*                         <table class="table table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Libelle</th>*/
/*                                     <th>Date frais</th>*/
/*                                     <th>Montant</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ligneFraisHorsForfait in ficheFrais.lignesFraisHorsForfait%}*/
/*                                     <tr>*/
/*                                         <td>{{ligneFraisHorsForfait.libelle}}</td>*/
/*                                         <td>{{ligneFraisHorsForfait.dateFrais |date("d/m/Y")}}</td>*/
/*                                         <td>{{ligneFraisHorsForfait.montant}}</td>*/
/*                                         <td><a class="btn btn-warning" href="{{path('al_gsb_comptable_reporter_hors_forfait',{'id_horsForfait':ligneFraisHorsForfait.id,'id_ficheFrais': ficheFrais.id})}}" role="button">Reporter</a></p></td>*/
/*                                         <td><a class="btn btn-danger" href="{{path('al_gsb_comptable_supprimer_hors_forfait',{'id_horsForfait':ligneFraisHorsForfait.id,'id_ficheFrais': ficheFrais.id})}}" role="button">Refuser</a></p></td>*/
/*                                     </tr>*/
/*                                 {% endfor%}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                     {%endif%}*/
/*                 </center>*/
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

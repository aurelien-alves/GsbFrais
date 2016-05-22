<?php

/* ALGsbBundle:Visiteur:saisirFrais.html.twig */
class __TwigTemplate_cdefe1402bfd68fde4411d53350d8bca3172bd852b07417328d5b2a6524f9d10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Visiteur:saisirFrais.html.twig", 1);
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
        $__internal_6d0f17197cee406090dcc66b8cdaa524aed963bd414ee4e6144d949dde2431e7 = $this->env->getExtension("native_profiler");
        $__internal_6d0f17197cee406090dcc66b8cdaa524aed963bd414ee4e6144d949dde2431e7->enter($__internal_6d0f17197cee406090dcc66b8cdaa524aed963bd414ee4e6144d949dde2431e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Visiteur:saisirFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0f17197cee406090dcc66b8cdaa524aed963bd414ee4e6144d949dde2431e7->leave($__internal_6d0f17197cee406090dcc66b8cdaa524aed963bd414ee4e6144d949dde2431e7_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fd5cd76fb97dcd0a65df099e36e4f07d3c22f68a9958a2cf468389c9d1b34f5 = $this->env->getExtension("native_profiler");
        $__internal_2fd5cd76fb97dcd0a65df099e36e4f07d3c22f68a9958a2cf468389c9d1b34f5->enter($__internal_2fd5cd76fb97dcd0a65df099e36e4f07d3c22f68a9958a2cf468389c9d1b34f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Saisir Frais</title>

";
        
        $__internal_2fd5cd76fb97dcd0a65df099e36e4f07d3c22f68a9958a2cf468389c9d1b34f5->leave($__internal_2fd5cd76fb97dcd0a65df099e36e4f07d3c22f68a9958a2cf468389c9d1b34f5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eb00c33a72315588069c136ea0e43d1c3785637f47e40c18f69c8f766863b75 = $this->env->getExtension("native_profiler");
        $__internal_7eb00c33a72315588069c136ea0e43d1c3785637f47e40c18f69c8f766863b75->enter($__internal_7eb00c33a72315588069c136ea0e43d1c3785637f47e40c18f69c8f766863b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li class=\"active\">gérer vos frais</li>
                </ol>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8  col-lg-offset-2\">                    
                    ";
        // line 26
        if (array_key_exists("saisir", $context)) {
            // line 27
            echo "                        <center>
                            <div class=\"page-header\">
                                <h3>Fiche de frais pour le mois ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
            echo ".</h3>
                            </div>
                            ";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
                            <hr>
                            ";
            // line 33
            if (twig_test_empty((isset($context["lignesFraisHorsForfait"]) ? $context["lignesFraisHorsForfait"] : $this->getContext($context, "lignesFraisHorsForfait")))) {
                // line 34
                echo "                                <div class=\"alert alert-warning\" role=\"alert\">
                                    <a>Vous n'avez pas de hors forfait pour le mois en cours.</a>
                                </div>
                            ";
            } else {
                // line 38
                echo "                                <table class=\"table table-hover\">
                                    <thead>
                                        <tr>
                                            <th>Libelle</th>
                                            <th>Date frais</th>
                                            <th>Montant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lignesFraisHorsForfait"]) ? $context["lignesFraisHorsForfait"] : $this->getContext($context, "lignesFraisHorsForfait")));
                foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisHorsForfait"]) {
                    // line 48
                    echo "                                            <tr>
                                                <td>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "libelle", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "dateFrais", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "montant", array()), "html", null, true);
                    echo "</td>
                                                <td><a class=\"btn btn-danger\" href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_supprimer_hors_frais", array("id_ligneFraisHorsForfait" => $this->getAttribute($context["ligneFraisHorsForfait"], "id", array()))), "html", null, true);
                    echo "\" role=\"button\">supprimer</a></p></td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisHorsForfait'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                    </tbody>
                                </table>

                            ";
            }
            // line 59
            echo "                            <p><a class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_saisir_hors_frais", array("id_ficheFrais" => $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "id", array()))), "html", null, true);
            echo "\" role=\"button\">Ajouter un hors forfait</a></p>
                        </center>
                    ";
        }
        // line 62
        echo "                    ";
        if (array_key_exists("creerFiche", $context)) {
            // line 63
            echo "                        <center>
                            <div class=\"jumbotron\">
                                <h3>Vous n'avez pas de fiche de frais en cours pour le mois ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
            echo ".</h3>
                                <hr>
                                <p><a class=\"btn btn-info btn-lg\" href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("al_gsb_creer_frais");
            echo "\" role=\"button\">Ouvrir la fiche</a></p>
                            </div>
                        </center>
                    ";
        }
        // line 71
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_7eb00c33a72315588069c136ea0e43d1c3785637f47e40c18f69c8f766863b75->leave($__internal_7eb00c33a72315588069c136ea0e43d1c3785637f47e40c18f69c8f766863b75_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e166a5f80630380bca0c45e767855020cd74f8de7601ffac536196dcd13304f7 = $this->env->getExtension("native_profiler");
        $__internal_e166a5f80630380bca0c45e767855020cd74f8de7601ffac536196dcd13304f7->enter($__internal_e166a5f80630380bca0c45e767855020cd74f8de7601ffac536196dcd13304f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_e166a5f80630380bca0c45e767855020cd74f8de7601ffac536196dcd13304f7->leave($__internal_e166a5f80630380bca0c45e767855020cd74f8de7601ffac536196dcd13304f7_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Visiteur:saisirFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 79,  190 => 78,  178 => 71,  171 => 67,  166 => 65,  162 => 63,  159 => 62,  152 => 59,  146 => 55,  137 => 52,  133 => 51,  129 => 50,  125 => 49,  122 => 48,  118 => 47,  107 => 38,  101 => 34,  99 => 33,  94 => 31,  89 => 29,  85 => 27,  83 => 26,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
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
/*                     <li class="active">gérer vos frais</li>*/
/*                 </ol>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-8  col-lg-offset-2">                    */
/*                     {% if saisir is defined %}*/
/*                         <center>*/
/*                             <div class="page-header">*/
/*                                 <h3>Fiche de frais pour le mois {{mois}}.</h3>*/
/*                             </div>*/
/*                             {{form(form)}}*/
/*                             <hr>*/
/*                             {% if lignesFraisHorsForfait is empty%}*/
/*                                 <div class="alert alert-warning" role="alert">*/
/*                                     <a>Vous n'avez pas de hors forfait pour le mois en cours.</a>*/
/*                                 </div>*/
/*                             {%else%}*/
/*                                 <table class="table table-hover">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Libelle</th>*/
/*                                             <th>Date frais</th>*/
/*                                             <th>Montant</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {% for ligneFraisHorsForfait in lignesFraisHorsForfait%}*/
/*                                             <tr>*/
/*                                                 <td>{{ligneFraisHorsForfait.libelle}}</td>*/
/*                                                 <td>{{ligneFraisHorsForfait.dateFrais |date("d/m/Y")}}</td>*/
/*                                                 <td>{{ligneFraisHorsForfait.montant}}</td>*/
/*                                                 <td><a class="btn btn-danger" href="{{path('al_gsb_supprimer_hors_frais',{'id_ligneFraisHorsForfait': ligneFraisHorsForfait.id})}}" role="button">supprimer</a></p></td>*/
/*                                             </tr>*/
/*                                         {% endfor%}*/
/*                                     </tbody>*/
/*                                 </table>*/
/* */
/*                             {%endif%}*/
/*                             <p><a class="btn btn-info" href="{{path('al_gsb_saisir_hors_frais',{'id_ficheFrais': ficheFrais.id})}}" role="button">Ajouter un hors forfait</a></p>*/
/*                         </center>*/
/*                     {% endif %}*/
/*                     {% if creerFiche is defined %}*/
/*                         <center>*/
/*                             <div class="jumbotron">*/
/*                                 <h3>Vous n'avez pas de fiche de frais en cours pour le mois {{mois}}.</h3>*/
/*                                 <hr>*/
/*                                 <p><a class="btn btn-info btn-lg" href="{{path("al_gsb_creer_frais")}}" role="button">Ouvrir la fiche</a></p>*/
/*                             </div>*/
/*                         </center>*/
/*                     {% endif %}*/
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

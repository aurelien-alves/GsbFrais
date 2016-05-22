<?php

/* ALGsbBundle:Comptable:suivrePaiementFrais.html.twig */
class __TwigTemplate_b7781cf5a7f19324c9d89b1fa7045eeec7b29c024b1ca6d2e24f80afe6ad8e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Comptable:suivrePaiementFrais.html.twig", 1);
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
        $__internal_28450bcf3d12178cadd7de717f8467954e2aefc42e1600b6f7cdd54422abc3ec = $this->env->getExtension("native_profiler");
        $__internal_28450bcf3d12178cadd7de717f8467954e2aefc42e1600b6f7cdd54422abc3ec->enter($__internal_28450bcf3d12178cadd7de717f8467954e2aefc42e1600b6f7cdd54422abc3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Comptable:suivrePaiementFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28450bcf3d12178cadd7de717f8467954e2aefc42e1600b6f7cdd54422abc3ec->leave($__internal_28450bcf3d12178cadd7de717f8467954e2aefc42e1600b6f7cdd54422abc3ec_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_dff1e24f92f16bebf0f59325d87b638757efe95d704b464318f58addd483609b = $this->env->getExtension("native_profiler");
        $__internal_dff1e24f92f16bebf0f59325d87b638757efe95d704b464318f58addd483609b->enter($__internal_dff1e24f92f16bebf0f59325d87b638757efe95d704b464318f58addd483609b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Suivi paiement frais</title>

";
        
        $__internal_dff1e24f92f16bebf0f59325d87b638757efe95d704b464318f58addd483609b->leave($__internal_dff1e24f92f16bebf0f59325d87b638757efe95d704b464318f58addd483609b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_00e3798ccef587bf6d98ef67fd16dd1aa00512c8c6b5262f769bfdf2387044d2 = $this->env->getExtension("native_profiler");
        $__internal_00e3798ccef587bf6d98ef67fd16dd1aa00512c8c6b5262f769bfdf2387044d2->enter($__internal_00e3798ccef587bf6d98ef67fd16dd1aa00512c8c6b5262f769bfdf2387044d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <div class=\"page-header\">
                    <center><h2>Suivi des paiements des fiches de frais </h2></center>
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
                    <li class=\"active\">suivi paiement frais</li>

                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <center>
                    ";
        // line 29
        if ( !twig_test_empty((isset($context["fichesFrais"]) ? $context["fichesFrais"] : $this->getContext($context, "fichesFrais")))) {
            // line 30
            echo "                        ";
            if (array_key_exists("notFound", $context)) {
                // line 31
                echo "                            <div class=\"alert alert-warning\" role=\"alert\">Pas de fiche de frais à cette date et pour cet utilisateur</div>
                        ";
            }
            // line 33
            echo "                        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "

                        <hr>

                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Date rédaction</th>
                                    <th>Date de modification</th>
                                    <th>Etat</th>
                                    <th>Modifier l'état</th>
                                    <th>Details de la fiche</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fichesFrais"]) ? $context["fichesFrais"] : $this->getContext($context, "fichesFrais")));
            foreach ($context['_seq'] as $context["_key"] => $context["ficheFrais"]) {
                // line 51
                echo "
                                    <tr class=\"
                                        ";
                // line 53
                if (($this->getAttribute($this->getAttribute($context["ficheFrais"], "etat", array()), "id", array()) == 4)) {
                    // line 54
                    echo "                                            warning
                                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 55
$context["ficheFrais"], "etat", array()), "id", array()) == 5)) {
                    // line 56
                    echo "                                            info
                                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 57
$context["ficheFrais"], "etat", array()), "id", array()) == 1)) {
                    // line 58
                    echo "                                            success
                                        ";
                }
                // line 60
                echo "
                                        \">

                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ficheFrais"], "utilisateur", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ficheFrais"], "utilisateur", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ficheFrais"], "dateRedac", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ficheFrais"], "dateModif", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ficheFrais"], "etat", array()), "libelle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 68
                if (($this->getAttribute($this->getAttribute($context["ficheFrais"], "etat", array()), "id", array()) == 4)) {
                    // line 69
                    echo "                                                <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_comptable_modifier_etat_forfait", array("id_ficheFrais" => $this->getAttribute($context["ficheFrais"], "id", array()))), "html", null, true);
                    echo "\" role=\"button\">Mettre en paiement</a>
                                            ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 70
$context["ficheFrais"], "etat", array()), "id", array()) == 5)) {
                    // line 71
                    echo "                                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_comptable_modifier_etat_forfait", array("id_ficheFrais" => $this->getAttribute($context["ficheFrais"], "id", array()))), "html", null, true);
                    echo "\" role=\"button\">Remboursée</a>
                                            ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 72
$context["ficheFrais"], "etat", array()), "id", array()) == 1)) {
                    // line 73
                    echo "                                                <a class=\"btn btn-primary disabled\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_comptable_modifier_etat_forfait", array("id_ficheFrais" => $this->getAttribute($context["ficheFrais"], "id", array()))), "html", null, true);
                    echo "\" role=\"button\">Remboursée</a>
                                            ";
                }
                // line 75
                echo "                                        </td>
                                        <td><a class=\"btn btn-info\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_comptable_details_fiche_frais", array("id_ficheFrais" => $this->getAttribute($context["ficheFrais"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">Details</a></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ficheFrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 82
            echo "                        <div class=\"alert alert-info\" role=\"alert\">Aucune fiche de frais validée.</div>
                    ";
        }
        // line 84
        echo "                </center>
            </div>
        </div>
    </div>

";
        
        $__internal_00e3798ccef587bf6d98ef67fd16dd1aa00512c8c6b5262f769bfdf2387044d2->leave($__internal_00e3798ccef587bf6d98ef67fd16dd1aa00512c8c6b5262f769bfdf2387044d2_prof);

    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4a6d48996c8fe4c77d5abe0a1123f567c08551eefb5373f3831ad58e7732aeac = $this->env->getExtension("native_profiler");
        $__internal_4a6d48996c8fe4c77d5abe0a1123f567c08551eefb5373f3831ad58e7732aeac->enter($__internal_4a6d48996c8fe4c77d5abe0a1123f567c08551eefb5373f3831ad58e7732aeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 92
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_4a6d48996c8fe4c77d5abe0a1123f567c08551eefb5373f3831ad58e7732aeac->leave($__internal_4a6d48996c8fe4c77d5abe0a1123f567c08551eefb5373f3831ad58e7732aeac_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Comptable:suivrePaiementFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 92,  220 => 91,  208 => 84,  204 => 82,  199 => 79,  190 => 76,  187 => 75,  181 => 73,  179 => 72,  174 => 71,  172 => 70,  167 => 69,  165 => 68,  161 => 67,  157 => 66,  153 => 65,  149 => 64,  145 => 63,  140 => 60,  136 => 58,  134 => 57,  131 => 56,  129 => 55,  126 => 54,  124 => 53,  120 => 51,  116 => 50,  95 => 33,  91 => 31,  88 => 30,  86 => 29,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'ALGsbBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <title>GSB | Suivi paiement frais</title>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <div class="page-header">*/
/*                     <center><h2>Suivi des paiements des fiches de frais </h2></center>*/
/*                 </div>*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="{{path('al_gsb_deconnexion')}}">déconnexion</a></li>*/
/*                     <li><a href="{{path('al_gsb_accueil')}}">accueil</a></li>*/
/*                     <li class="active">suivi paiement frais</li>*/
/* */
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <center>*/
/*                     {% if fichesFrais is not empty %}*/
/*                         {% if notFound is defined%}*/
/*                             <div class="alert alert-warning" role="alert">Pas de fiche de frais à cette date et pour cet utilisateur</div>*/
/*                         {% endif %}*/
/*                         {{form(form)}}*/
/* */
/*                         <hr>*/
/* */
/*                         <table class="table table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Nom</th>*/
/*                                     <th>Prenom</th>*/
/*                                     <th>Date rédaction</th>*/
/*                                     <th>Date de modification</th>*/
/*                                     <th>Etat</th>*/
/*                                     <th>Modifier l'état</th>*/
/*                                     <th>Details de la fiche</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ficheFrais in fichesFrais%}*/
/* */
/*                                     <tr class="*/
/*                                         {% if ficheFrais.etat.id == 4%}*/
/*                                             warning*/
/*                                         {%elseif ficheFrais.etat.id == 5%}*/
/*                                             info*/
/*                                         {%elseif ficheFrais.etat.id == 1%}*/
/*                                             success*/
/*                                         {% endif %}*/
/* */
/*                                         ">*/
/* */
/*                                         <td>{{ficheFrais.utilisateur.nom}}</td>*/
/*                                         <td>{{ficheFrais.utilisateur.prenom}}</td>*/
/*                                         <td>{{ficheFrais.dateRedac |date("d/m/Y")}}</td>*/
/*                                         <td>{{ficheFrais.dateModif |date("d/m/Y")}}</td>*/
/*                                         <td>{{ficheFrais.etat.libelle}}</td>*/
/*                                         <td>{% if ficheFrais.etat.id == 4%}*/
/*                                                 <a class="btn btn-success" href="{{path('al_gsb_comptable_modifier_etat_forfait',{'id_ficheFrais': ficheFrais.id})}}" role="button">Mettre en paiement</a>*/
/*                                             {%elseif ficheFrais.etat.id == 5%}*/
/*                                                 <a class="btn btn-info" href="{{path('al_gsb_comptable_modifier_etat_forfait',{'id_ficheFrais': ficheFrais.id})}}" role="button">Remboursée</a>*/
/*                                             {%elseif ficheFrais.etat.id == 1 %}*/
/*                                                 <a class="btn btn-primary disabled" href="{{path('al_gsb_comptable_modifier_etat_forfait',{'id_ficheFrais': ficheFrais.id})}}" role="button">Remboursée</a>*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td><a class="btn btn-info" href="{{path('al_gsb_comptable_details_fiche_frais',{'id_ficheFrais': ficheFrais.id})}}" role="button">Details</a></td>*/
/*                                     </tr>*/
/*                                 {% endfor%}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% else %}*/
/*                         <div class="alert alert-info" role="alert">Aucune fiche de frais validée.</div>*/
/*                     {% endif %}*/
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

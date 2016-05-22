<?php

/* ALGsbBundle:Comptable:detailsFicheFrais.html.twig */
class __TwigTemplate_792f242a140a4a6018e325083df81256f37f2412568c0c66a615c80d6c181009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Comptable:detailsFicheFrais.html.twig", 1);
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
        $__internal_940f45ee288490abddfc2bac7a41e1fd68835caf049127af4f86e24f960f0a7b = $this->env->getExtension("native_profiler");
        $__internal_940f45ee288490abddfc2bac7a41e1fd68835caf049127af4f86e24f960f0a7b->enter($__internal_940f45ee288490abddfc2bac7a41e1fd68835caf049127af4f86e24f960f0a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Comptable:detailsFicheFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940f45ee288490abddfc2bac7a41e1fd68835caf049127af4f86e24f960f0a7b->leave($__internal_940f45ee288490abddfc2bac7a41e1fd68835caf049127af4f86e24f960f0a7b_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7af44e70f243d4fa30e1a916fe9ec0741c470c745c6faafb08511768b4204cd = $this->env->getExtension("native_profiler");
        $__internal_e7af44e70f243d4fa30e1a916fe9ec0741c470c745c6faafb08511768b4204cd->enter($__internal_e7af44e70f243d4fa30e1a916fe9ec0741c470c745c6faafb08511768b4204cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Suivi des Frais</title>

";
        
        $__internal_e7af44e70f243d4fa30e1a916fe9ec0741c470c745c6faafb08511768b4204cd->leave($__internal_e7af44e70f243d4fa30e1a916fe9ec0741c470c745c6faafb08511768b4204cd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c2fe873d4fb1866627cfe59b0eb070b533fa5c176409037b38fdebf9cb75338 = $this->env->getExtension("native_profiler");
        $__internal_1c2fe873d4fb1866627cfe59b0eb070b533fa5c176409037b38fdebf9cb75338->enter($__internal_1c2fe873d4fb1866627cfe59b0eb070b533fa5c176409037b38fdebf9cb75338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <div class=\"page-header\">
                    <center><h2>Suivi de vos frais </h2></center>
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
        echo $this->env->getExtension('routing')->getPath("al_gsb_suivre_paiement_frais");
        echo "\">suivi paiement frais</a></li>
                    <li class=\"active\">details fiche frais</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <center>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Date de création</th>
                                <th>Date de modification</th>
                                <th>Etat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "dateRedac", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "dateModif", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "etat", array()), "libelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p>Montant validé</p>
                    <table class=\"table table-hover\">
                        <tbody>
                            <tr>
                                <td>Montant validé</td>
                                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "montantValide", array()), "html", null, true);
        echo "€</td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p>Lignes de frais forfait :  </p>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Libelle</th>
                                <th>Quantité</th>
                                <th>Montant</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisForfait", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisForfait"]) {
            // line 68
            echo "                                <tr>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneFraisForfait"], "fraisForfait", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ligneFraisForfait"], "quantite", array()) + 0), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ligneFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["ligneFraisForfait"], "fraisForfait", array()), "montant", array())), "html", null, true);
            echo "€</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            <tr>
                                <td>Nombre de justificatif</td>
                                <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "nbJustificatifs", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    ";
        // line 83
        if ( !twig_test_empty($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisHorsForfait", array()))) {
            // line 84
            echo "                        <p>Lignes de frais hors forfait : </p>
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Libelle</th>
                                    <th>Date frais</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisHorsForfait", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisHorsForfait"]) {
                // line 95
                echo "                                    <tr>
                                        <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "libelle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "dateFrais", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "montant", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisHorsForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 104
            echo "                        <div class=\"alert alert-info\" role=\"alert\">
                            <a href=\"#\" class=\"alert-link\">Cette fiche de frais ne contient pas de frais hors forfait</a>
                        </div>
                    ";
        }
        // line 108
        echo "                </center>

            </div>
        </div>
    </div>

";
        
        $__internal_1c2fe873d4fb1866627cfe59b0eb070b533fa5c176409037b38fdebf9cb75338->leave($__internal_1c2fe873d4fb1866627cfe59b0eb070b533fa5c176409037b38fdebf9cb75338_prof);

    }

    // line 116
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7fde16e4012fa89c3f126cb516fa3281f62ec275237248f9e5900669ff4235f3 = $this->env->getExtension("native_profiler");
        $__internal_7fde16e4012fa89c3f126cb516fa3281f62ec275237248f9e5900669ff4235f3->enter($__internal_7fde16e4012fa89c3f126cb516fa3281f62ec275237248f9e5900669ff4235f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 117
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_7fde16e4012fa89c3f126cb516fa3281f62ec275237248f9e5900669ff4235f3->leave($__internal_7fde16e4012fa89c3f126cb516fa3281f62ec275237248f9e5900669ff4235f3_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Comptable:detailsFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 117,  239 => 116,  226 => 108,  220 => 104,  215 => 101,  206 => 98,  202 => 97,  198 => 96,  195 => 95,  191 => 94,  179 => 84,  177 => 83,  167 => 76,  163 => 74,  154 => 71,  150 => 70,  146 => 69,  143 => 68,  139 => 67,  120 => 51,  107 => 41,  103 => 40,  99 => 39,  78 => 21,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'ALGsbBundle::base.html.twig' %}*/
/* */
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <title>GSB | Suivi des Frais</title>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <div class="page-header">*/
/*                     <center><h2>Suivi de vos frais </h2></center>*/
/*                 </div>*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="{{path('al_gsb_deconnexion')}}">déconnexion</a></li>*/
/*                     <li><a href="{{path('al_gsb_accueil')}}">accueil</a></li>*/
/*                     <li><a href="{{path('al_gsb_suivre_paiement_frais')}}">suivi paiement frais</a></li>*/
/*                     <li class="active">details fiche frais</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <center>*/
/*                     <table class="table table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Date de création</th>*/
/*                                 <th>Date de modification</th>*/
/*                                 <th>Etat</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <td>{{ficheFrais.dateRedac |date("d/m/Y")}}</td>*/
/*                                 <td>{{ficheFrais.dateModif |date("d/m/Y")}}</td>*/
/*                                 <td>{{ficheFrais.etat.libelle }}</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                     <hr>*/
/*                     <p>Montant validé</p>*/
/*                     <table class="table table-hover">*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <td>Montant validé</td>*/
/*                                 <td>{{ficheFrais.montantValide}}€</td>*/
/*                             </tr>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                     <hr>*/
/*                     <p>Lignes de frais forfait :  </p>*/
/*                     <table class="table table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Libelle</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Montant</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for ligneFraisForfait in ficheFrais.lignesFraisForfait%}*/
/*                                 <tr>*/
/*                                     <td>{{ligneFraisForfait.fraisForfait.libelle}}</td>*/
/*                                     <td>{{ligneFraisForfait.quantite+0}}</td>*/
/*                                     <td>{{ligneFraisForfait.quantite*ligneFraisForfait.fraisForfait.montant}}€</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             <tr>*/
/*                                 <td>Nombre de justificatif</td>*/
/*                                 <td>{{ficheFrais.nbJustificatifs}}</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                     <hr>*/
/* */
/*                     {% if ficheFrais.lignesFraisHorsForfait is not empty%}*/
/*                         <p>Lignes de frais hors forfait : </p>*/
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
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% else %}*/
/*                         <div class="alert alert-info" role="alert">*/
/*                             <a href="#" class="alert-link">Cette fiche de frais ne contient pas de frais hors forfait</a>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </center>*/
/* */
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

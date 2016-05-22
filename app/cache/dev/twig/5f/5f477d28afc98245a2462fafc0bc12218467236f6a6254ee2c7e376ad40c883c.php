<?php

/* ALGsbBundle:Visiteur:detailsFicheFrais.html.twig */
class __TwigTemplate_1b6cf520b79917abcb3b84868f913c21b9bb6d8bb2ecb92c059bf0e0330e1663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Visiteur:detailsFicheFrais.html.twig", 1);
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
        $__internal_bf25df18a5fa83b6648f9e8b212a5ae855674d3cff60ef82ed4017357de0d483 = $this->env->getExtension("native_profiler");
        $__internal_bf25df18a5fa83b6648f9e8b212a5ae855674d3cff60ef82ed4017357de0d483->enter($__internal_bf25df18a5fa83b6648f9e8b212a5ae855674d3cff60ef82ed4017357de0d483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Visiteur:detailsFicheFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf25df18a5fa83b6648f9e8b212a5ae855674d3cff60ef82ed4017357de0d483->leave($__internal_bf25df18a5fa83b6648f9e8b212a5ae855674d3cff60ef82ed4017357de0d483_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_f18969e9bf558b321d5bbe0af2a82da0c4f92110d7d3d633c57ab19f40f335de = $this->env->getExtension("native_profiler");
        $__internal_f18969e9bf558b321d5bbe0af2a82da0c4f92110d7d3d633c57ab19f40f335de->enter($__internal_f18969e9bf558b321d5bbe0af2a82da0c4f92110d7d3d633c57ab19f40f335de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Suivi des Frais</title>

";
        
        $__internal_f18969e9bf558b321d5bbe0af2a82da0c4f92110d7d3d633c57ab19f40f335de->leave($__internal_f18969e9bf558b321d5bbe0af2a82da0c4f92110d7d3d633c57ab19f40f335de_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_763520ab1cef037b40f97b54da716aaba0a8c96239dfbfa09a89de7556b88206 = $this->env->getExtension("native_profiler");
        $__internal_763520ab1cef037b40f97b54da716aaba0a8c96239dfbfa09a89de7556b88206->enter($__internal_763520ab1cef037b40f97b54da716aaba0a8c96239dfbfa09a89de7556b88206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("al_gsb_consulter_frais");
        echo "\">suivi de vos frais</a></li>
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
        $context["total"] = 0;
        // line 68
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisForfait", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisForfait"]) {
            // line 69
            echo "                                <tr>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneFraisForfait"], "fraisForfait", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ligneFraisForfait"], "quantite", array()) + 0), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ligneFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["ligneFraisForfait"], "fraisForfait", array()), "montant", array())), "html", null, true);
            echo "€</td>
                                </tr>
                                ";
            // line 74
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute($context["ligneFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["ligneFraisForfait"], "fraisForfait", array()), "montant", array())));
            // line 75
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            <tr>
                                <td>Total</td>
                                <td>-</td>
                                <td>";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Nombre de justificatif</td>
                                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "nbJustificatifs", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    ";
        // line 90
        if ( !twig_test_empty($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisHorsForfait", array()))) {
            // line 91
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
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "lignesFraisHorsForfait", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisHorsForfait"]) {
                // line 102
                echo "                                    <tr>
                                        <td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "libelle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "dateFrais", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["ligneFraisHorsForfait"], "montant", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisHorsForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 111
            echo "                        <div class=\"alert alert-info\" role=\"alert\">
                            <a href=\"#\" class=\"alert-link\">Vous n'avez pas de frais hors forfait pour cette fiche</a>
                        </div>
                    ";
        }
        // line 115
        echo "                </center>

            </div>
        </div>
    </div>

";
        
        $__internal_763520ab1cef037b40f97b54da716aaba0a8c96239dfbfa09a89de7556b88206->leave($__internal_763520ab1cef037b40f97b54da716aaba0a8c96239dfbfa09a89de7556b88206_prof);

    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4caefac8ae8b80c0207ad691c539c4b67e8b254c3da7a85917ee64dccb868399 = $this->env->getExtension("native_profiler");
        $__internal_4caefac8ae8b80c0207ad691c539c4b67e8b254c3da7a85917ee64dccb868399->enter($__internal_4caefac8ae8b80c0207ad691c539c4b67e8b254c3da7a85917ee64dccb868399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 124
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_4caefac8ae8b80c0207ad691c539c4b67e8b254c3da7a85917ee64dccb868399->leave($__internal_4caefac8ae8b80c0207ad691c539c4b67e8b254c3da7a85917ee64dccb868399_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Visiteur:detailsFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 124,  254 => 123,  241 => 115,  235 => 111,  230 => 108,  221 => 105,  217 => 104,  213 => 103,  210 => 102,  206 => 101,  194 => 91,  192 => 90,  182 => 83,  175 => 79,  170 => 76,  164 => 75,  162 => 74,  157 => 72,  153 => 71,  149 => 70,  146 => 69,  141 => 68,  139 => 67,  120 => 51,  107 => 41,  103 => 40,  99 => 39,  78 => 21,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
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
/*                     <li><a href="{{path('al_gsb_consulter_frais')}}">suivi de vos frais</a></li>*/
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
/*                             {% set total = 0 %}*/
/*                             {% for ligneFraisForfait in ficheFrais.lignesFraisForfait%}*/
/*                                 <tr>*/
/*                                     <td>{{ligneFraisForfait.fraisForfait.libelle}}</td>*/
/*                                     <td>{{ligneFraisForfait.quantite+0}}</td>*/
/*                                     <td>{{ligneFraisForfait.quantite*ligneFraisForfait.fraisForfait.montant}}€</td>*/
/*                                 </tr>*/
/*                                 {% set total = total + ligneFraisForfait.quantite*ligneFraisForfait.fraisForfait.montant %}*/
/*                             {% endfor %}*/
/*                             <tr>*/
/*                                 <td>Total</td>*/
/*                                 <td>-</td>*/
/*                                 <td>{{total}}</td>*/
/*                             </tr>*/
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
/*                             <a href="#" class="alert-link">Vous n'avez pas de frais hors forfait pour cette fiche</a>*/
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

<?php

/* ALGsbBundle:Comptable:validerFrais.html.twig */
class __TwigTemplate_2ae8f01e86758a94b10d9b18ec5ebdd32685676fbcfb5c26cd61f9a979da5f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Comptable:validerFrais.html.twig", 1);
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
        $__internal_6a74b3e1311cd4fc0de899703e2369f80252c4decea0dc47dbb93297c4a08033 = $this->env->getExtension("native_profiler");
        $__internal_6a74b3e1311cd4fc0de899703e2369f80252c4decea0dc47dbb93297c4a08033->enter($__internal_6a74b3e1311cd4fc0de899703e2369f80252c4decea0dc47dbb93297c4a08033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Comptable:validerFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a74b3e1311cd4fc0de899703e2369f80252c4decea0dc47dbb93297c4a08033->leave($__internal_6a74b3e1311cd4fc0de899703e2369f80252c4decea0dc47dbb93297c4a08033_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_72051bd526075f0b3fde9cf0285c7be5e1ceecca6d4b9f75743526791662a671 = $this->env->getExtension("native_profiler");
        $__internal_72051bd526075f0b3fde9cf0285c7be5e1ceecca6d4b9f75743526791662a671->enter($__internal_72051bd526075f0b3fde9cf0285c7be5e1ceecca6d4b9f75743526791662a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Valider frais</title>

";
        
        $__internal_72051bd526075f0b3fde9cf0285c7be5e1ceecca6d4b9f75743526791662a671->leave($__internal_72051bd526075f0b3fde9cf0285c7be5e1ceecca6d4b9f75743526791662a671_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1de1e968b2da592f1e2bae642480940231bc51361445286943e16e6a6a698ff3 = $this->env->getExtension("native_profiler");
        $__internal_1de1e968b2da592f1e2bae642480940231bc51361445286943e16e6a6a698ff3->enter($__internal_1de1e968b2da592f1e2bae642480940231bc51361445286943e16e6a6a698ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li class=\"active\">valider fiches frais</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <center>
                    ";
        // line 28
        if ( !twig_test_empty((isset($context["fichesFrais"]) ? $context["fichesFrais"] : $this->getContext($context, "fichesFrais")))) {
            // line 29
            echo "                        ";
            if (array_key_exists("notFound", $context)) {
                // line 30
                echo "                            <div class=\"alert alert-warning\" role=\"alert\">Pas de fiche de frais à cette date et pour cet utilisateur</div>
                        ";
            }
            // line 32
            echo "

                        ";
            // line 34
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
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fichesFrais"]) ? $context["fichesFrais"] : $this->getContext($context, "fichesFrais")));
            foreach ($context['_seq'] as $context["_key"] => $context["ficheFrais"]) {
                // line 47
                echo "                                    <tr>
                                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ficheFrais"], "utilisateur", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ficheFrais"], "utilisateur", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ficheFrais"], "dateRedac", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ficheFrais"], "dateModif", array()), "d/m/Y"), "html", null, true);
                echo "</td>

                                        <td><a class=\"btn btn-info\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_valider_frais_details", array("id_ficheFrais" => $this->getAttribute($context["ficheFrais"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">Details</a></p></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ficheFrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                            </tbody>
                        </table>
                            ";
        } else {
            // line 59
            echo "                                <div class=\"alert alert-info\" role=\"alert\">Pas de fiche de frais à valider</div>
                    ";
        }
        // line 61
        echo "                </center>
            </div>
        </div>
    </div>

";
        
        $__internal_1de1e968b2da592f1e2bae642480940231bc51361445286943e16e6a6a698ff3->leave($__internal_1de1e968b2da592f1e2bae642480940231bc51361445286943e16e6a6a698ff3_prof);

    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        $__internal_19392650a39e8079ac41f1b6d0c515a0468d05c0c2ef486392a3fbe817a91d67 = $this->env->getExtension("native_profiler");
        $__internal_19392650a39e8079ac41f1b6d0c515a0468d05c0c2ef486392a3fbe817a91d67->enter($__internal_19392650a39e8079ac41f1b6d0c515a0468d05c0c2ef486392a3fbe817a91d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 69
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_19392650a39e8079ac41f1b6d0c515a0468d05c0c2ef486392a3fbe817a91d67->leave($__internal_19392650a39e8079ac41f1b6d0c515a0468d05c0c2ef486392a3fbe817a91d67_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Comptable:validerFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 69,  167 => 68,  155 => 61,  151 => 59,  146 => 56,  137 => 53,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  117 => 47,  113 => 46,  98 => 34,  94 => 32,  90 => 30,  87 => 29,  85 => 28,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
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
/*                     <li><a href="{{path('al_gsb_accueil')}}">accueil</a></li>*/
/*                     <li class="active">valider fiches frais</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <center>*/
/*                     {% if fichesFrais is not empty %}*/
/*                         {% if notFound is defined %}*/
/*                             <div class="alert alert-warning" role="alert">Pas de fiche de frais à cette date et pour cet utilisateur</div>*/
/*                         {% endif %}*/
/* */
/* */
/*                         {{form(form)}}                        */
/*                         <hr>*/
/*                         <table class="table table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Nom</th>*/
/*                                     <th>Prenom</th>*/
/*                                     <th>Date rédaction</th>*/
/*                                     <th>Date de modification</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ficheFrais in fichesFrais%}*/
/*                                     <tr>*/
/*                                         <td>{{ficheFrais.utilisateur.nom}}</td>*/
/*                                         <td>{{ficheFrais.utilisateur.prenom}}</td>*/
/*                                         <td>{{ficheFrais.dateRedac |date("d/m/Y")}}</td>*/
/*                                         <td>{{ficheFrais.dateModif |date("d/m/Y")}}</td>*/
/* */
/*                                         <td><a class="btn btn-info" href="{{path('al_gsb_valider_frais_details',{'id_ficheFrais': ficheFrais.id })}}" role="button">Details</a></p></td>*/
/*                                     </tr>*/
/*                                 {% endfor%}*/
/*                             </tbody>*/
/*                         </table>*/
/*                             {%else%}*/
/*                                 <div class="alert alert-info" role="alert">Pas de fiche de frais à valider</div>*/
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

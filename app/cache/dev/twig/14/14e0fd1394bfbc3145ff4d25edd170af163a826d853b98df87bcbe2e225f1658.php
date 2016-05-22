<?php

/* ALGsbBundle:Visiteur:consulterFrais.html.twig */
class __TwigTemplate_3e061644a12f9bb761d68525903bf0f9c4ee37108a6caf313eab4f0dec25bea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ALGsbBundle::base.html.twig", "ALGsbBundle:Visiteur:consulterFrais.html.twig", 1);
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
        $__internal_3d0c687f4158c5468fa1948c4a38e728114cbec4ddd772bfca9d208790885ad7 = $this->env->getExtension("native_profiler");
        $__internal_3d0c687f4158c5468fa1948c4a38e728114cbec4ddd772bfca9d208790885ad7->enter($__internal_3d0c687f4158c5468fa1948c4a38e728114cbec4ddd772bfca9d208790885ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALGsbBundle:Visiteur:consulterFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0c687f4158c5468fa1948c4a38e728114cbec4ddd772bfca9d208790885ad7->leave($__internal_3d0c687f4158c5468fa1948c4a38e728114cbec4ddd772bfca9d208790885ad7_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c0b3c5db0bfed5aab8d0cd0c8df12c60fc19a929a1c52dcfaf89a08722d267a = $this->env->getExtension("native_profiler");
        $__internal_9c0b3c5db0bfed5aab8d0cd0c8df12c60fc19a929a1c52dcfaf89a08722d267a->enter($__internal_9c0b3c5db0bfed5aab8d0cd0c8df12c60fc19a929a1c52dcfaf89a08722d267a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <title>GSB | Suivi des Frais</title>

";
        
        $__internal_9c0b3c5db0bfed5aab8d0cd0c8df12c60fc19a929a1c52dcfaf89a08722d267a->leave($__internal_9c0b3c5db0bfed5aab8d0cd0c8df12c60fc19a929a1c52dcfaf89a08722d267a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_577417350b2fbb2875325018ff082a2e9ad43c4fca2795e32f9e89a64e2195c5 = $this->env->getExtension("native_profiler");
        $__internal_577417350b2fbb2875325018ff082a2e9ad43c4fca2795e32f9e89a64e2195c5->enter($__internal_577417350b2fbb2875325018ff082a2e9ad43c4fca2795e32f9e89a64e2195c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li class=\"active\">suivi de vos frais</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8  col-lg-offset-2\">
                <center>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    
                    ";
        // line 32
        if (array_key_exists("notFound", $context)) {
            // line 33
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            <a>Vous n'avez pas de fiche de frais à cette periode ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        // line 37
        echo "                </center>
                <hr>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Date de création</th>
                            <th>Date de modification</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichesFrais"]) ? $context["fichesFrais"] : $this->getContext($context, "fichesFrais")));
        foreach ($context['_seq'] as $context["_key"] => $context["ficheFrais"]) {
            // line 49
            echo "                            <tr>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ficheFrais"], "dateRedac", array()), "d/m/Y"), "html", null, true);
            echo "</td>                              
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ficheFrais"], "dateModif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ficheFrais"], "etat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                <td><a class=\"btn btn-info\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("al_gsb_details_frais", array("id_ficheFrais" => $this->getAttribute($context["ficheFrais"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Détails</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ficheFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

";
        
        $__internal_577417350b2fbb2875325018ff082a2e9ad43c4fca2795e32f9e89a64e2195c5->leave($__internal_577417350b2fbb2875325018ff082a2e9ad43c4fca2795e32f9e89a64e2195c5_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3b8f5f7000c2513a3473d6e94d9f4dcee3ca0fe260c1a4d39dfbb01c5b6634cb = $this->env->getExtension("native_profiler");
        $__internal_3b8f5f7000c2513a3473d6e94d9f4dcee3ca0fe260c1a4d39dfbb01c5b6634cb->enter($__internal_3b8f5f7000c2513a3473d6e94d9f4dcee3ca0fe260c1a4d39dfbb01c5b6634cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_3b8f5f7000c2513a3473d6e94d9f4dcee3ca0fe260c1a4d39dfbb01c5b6634cb->leave($__internal_3b8f5f7000c2513a3473d6e94d9f4dcee3ca0fe260c1a4d39dfbb01c5b6634cb_prof);

    }

    public function getTemplateName()
    {
        return "ALGsbBundle:Visiteur:consulterFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 65,  163 => 64,  150 => 56,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  126 => 49,  122 => 48,  109 => 37,  103 => 34,  100 => 33,  98 => 32,  93 => 30,  89 => 29,  85 => 28,  74 => 20,  70 => 19,  60 => 11,  54 => 10,  42 => 5,  36 => 4,  11 => 1,);
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
/*                     <li class="active">suivi de vos frais</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8  col-lg-offset-2">*/
/*                 <center>*/
/*                     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     {{form(form)}}*/
/*                     {{ form_end(form) }}*/
/*                     */
/*                     {% if notFound is defined%}*/
/*                         <div class="alert alert-warning" role="alert">*/
/*                             <a>Vous n'avez pas de fiche de frais à cette periode {{date}}</a>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </center>*/
/*                 <hr>*/
/*                 <table class="table table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Date de création</th>*/
/*                             <th>Date de modification</th>*/
/*                             <th>Etat</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for ficheFrais in fichesFrais%}*/
/*                             <tr>*/
/*                                 <td>{{ficheFrais.dateRedac |date("d/m/Y")}}</td>                              */
/*                                 <td>{{ficheFrais.dateModif |date("d/m/Y")}}</td>*/
/*                                 <td>{{ficheFrais.etat.libelle }}</td>*/
/*                                 <td><a class="btn btn-info" href="{{path('al_gsb_details_frais',{'id_ficheFrais': ficheFrais.id})}}" role="button">Détails</a></td>*/
/*                             </tr>*/
/*                         {% endfor%}*/
/*                     </tbody>*/
/*                 </table>*/
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

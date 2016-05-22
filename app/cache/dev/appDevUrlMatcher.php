<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // al_gsb_connexion
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'al_gsb_connexion');
            }

            return array (  '_controller' => 'AL\\GsbBundle\\Controller\\ConnexionController::indexAction',  '_route' => 'al_gsb_connexion',);
        }

        // al_gsb_accueil
        if (rtrim($pathinfo, '/') === '/accueil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'al_gsb_accueil');
            }

            return array (  '_controller' => 'AL\\GsbBundle\\Controller\\AccueilController::indexAction',  '_route' => 'al_gsb_accueil',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/saisir')) {
                // al_gsb_saisir_frais
                if (rtrim($pathinfo, '/') === '/saisirFrais') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'al_gsb_saisir_frais');
                    }

                    return array (  '_controller' => 'AL\\GsbBundle\\Controller\\SaisirFraisController::indexAction',  '_route' => 'al_gsb_saisir_frais',);
                }

                // al_gsb_saisir_hors_frais
                if (0 === strpos($pathinfo, '/saisirHorsFrais') && preg_match('#^/saisirHorsFrais/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_saisir_hors_frais')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\SaisirFraisController::saisirHorsFraisAction',));
                }

            }

            // al_gsb_supprimer_hors_frais
            if (0 === strpos($pathinfo, '/supprimerHorsFrais') && preg_match('#^/supprimerHorsFrais/(?P<id_ligneFraisHorsForfait>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_supprimer_hors_frais')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\SaisirFraisController::supprimerHorsFraisAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // al_gsb_creer_frais
            if (rtrim($pathinfo, '/') === '/creerFrais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'al_gsb_creer_frais');
                }

                return array (  '_controller' => 'AL\\GsbBundle\\Controller\\SaisirFraisController::creerFraisAction',  '_route' => 'al_gsb_creer_frais',);
            }

            // al_gsb_consulter_frais
            if ($pathinfo === '/consulterFrais') {
                return array (  '_controller' => 'AL\\GsbBundle\\Controller\\ConsulterFraisController::indexAction',  '_route' => 'al_gsb_consulter_frais',);
            }

        }

        // al_gsb_details_frais
        if (0 === strpos($pathinfo, '/detailsFrais') && preg_match('#^/detailsFrais/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_details_frais')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\ConsulterFraisController::detailsFicheFraisAction',));
        }

        // al_gsb_suivre_paiement_frais
        if (rtrim($pathinfo, '/') === '/suivrePaiementFrais') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'al_gsb_suivre_paiement_frais');
            }

            return array (  '_controller' => 'AL\\GsbBundle\\Controller\\SuivrePaiementFicheFraisController::indexAction',  '_route' => 'al_gsb_suivre_paiement_frais',);
        }

        if (0 === strpos($pathinfo, '/validerFrais')) {
            // al_gsb_valider_frais
            if (rtrim($pathinfo, '/') === '/validerFrais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'al_gsb_valider_frais');
                }

                return array (  '_controller' => 'AL\\GsbBundle\\Controller\\ValiderFraisController::indexAction',  '_route' => 'al_gsb_valider_frais',);
            }

            // al_gsb_valider_frais_details
            if (0 === strpos($pathinfo, '/validerFraisDetails') && preg_match('#^/validerFraisDetails/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_valider_frais_details')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\ValiderFraisController::detailsAction',));
            }

        }

        // al_gsb_valider_frais_etat
        if (0 === strpos($pathinfo, '/etatValider') && preg_match('#^/etatValider/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_valider_frais_etat')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\ValiderFraisController::etatValiderAction',));
        }

        // al_gsb_comptable_reporter_hors_forfait
        if (0 === strpos($pathinfo, '/reporterHorsForfait') && preg_match('#^/reporterHorsForfait/(?P<id_horsForfait>[^/]++)/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_comptable_reporter_hors_forfait')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\ValiderFraisController::reporterHorsForfaitAction',));
        }

        // al_gsb_comptable_supprimer_hors_forfait
        if (0 === strpos($pathinfo, '/invaliderHorsForfait') && preg_match('#^/invaliderHorsForfait/(?P<id_horsForfait>[^/]++)/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_comptable_supprimer_hors_forfait')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\ValiderFraisController::supprimerHorsForfaitAction',));
        }

        // al_gsb_comptable_modifier_etat_forfait
        if (0 === strpos($pathinfo, '/modifierEtatFicheFrais') && preg_match('#^/modifierEtatFicheFrais/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_comptable_modifier_etat_forfait')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\SuivrePaiementFicheFraisController::modifierEtatFicheAction',));
        }

        // al_gsb_comptable_details_fiche_frais
        if (0 === strpos($pathinfo, '/detailsFraisVisiteur') && preg_match('#^/detailsFraisVisiteur/(?P<id_ficheFrais>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_gsb_comptable_details_fiche_frais')), array (  '_controller' => 'AL\\GsbBundle\\Controller\\SuivrePaiementFicheFraisController::detailsFicheFraisAction',));
        }

        // al_gsb_deconnexion
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AL\\GsbBundle\\Controller\\DeconnexionController::indexAction',  '_route' => 'al_gsb_deconnexion',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

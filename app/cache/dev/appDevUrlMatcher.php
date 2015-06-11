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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/4bff08a')) {
                // _assetic_4bff08a
                if ($pathinfo === '/css/4bff08a.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4bff08a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4bff08a',);
                }

                if (0 === strpos($pathinfo, '/css/4bff08a_part_1_')) {
                    // _assetic_4bff08a_0
                    if ($pathinfo === '/css/4bff08a_part_1_form_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4bff08a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4bff08a_0',);
                    }

                    // _assetic_4bff08a_1
                    if ($pathinfo === '/css/4bff08a_part_1_layout_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4bff08a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4bff08a_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/21fde63')) {
                // _assetic_21fde63
                if ($pathinfo === '/css/21fde63.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '21fde63',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_21fde63',);
                }

                // _assetic_21fde63_0
                if ($pathinfo === '/css/21fde63_template_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '21fde63',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_21fde63_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/fe23501')) {
            // _assetic_fe23501
            if ($pathinfo === '/js/fe23501.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe23501',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fe23501',);
            }

            // _assetic_fe23501_0
            if ($pathinfo === '/js/fe23501_part_1_javascript_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe23501',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fe23501_0',);
            }

        }

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

        }

        // prosga_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prosga_homepage');
            }

            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\DefaultController::homeAction',  '_route' => 'prosga_homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // prosga_actividades
            if ($pathinfo === '/actividades') {
                return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\DefaultController::actividadesAction',  '_route' => 'prosga_actividades',);
            }

            // prosga_auditoria
            if ($pathinfo === '/auditoria') {
                return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\DefaultController::auditoriaAction',  '_route' => 'prosga_auditoria',);
            }

        }

        // prosga_consultas
        if ($pathinfo === '/consultas') {
            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\DefaultController::consultasAction',  '_route' => 'prosga_consultas',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // prosga_acercade
            if ($pathinfo === '/acercade') {
                return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\DefaultController::acercadeAction',  '_route' => 'prosga_acercade',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/inft/prosga')) {
                    if (0 === strpos($pathinfo, '/admin/inft/prosga/permiso')) {
                        // admin_inft_prosga_permiso_list
                        if ($pathinfo === '/admin/inft/prosga/permiso/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_list',  '_route' => 'admin_inft_prosga_permiso_list',);
                        }

                        // admin_inft_prosga_permiso_create
                        if ($pathinfo === '/admin/inft/prosga/permiso/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_create',  '_route' => 'admin_inft_prosga_permiso_create',);
                        }

                        // admin_inft_prosga_permiso_batch
                        if ($pathinfo === '/admin/inft/prosga/permiso/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_batch',  '_route' => 'admin_inft_prosga_permiso_batch',);
                        }

                        // admin_inft_prosga_permiso_edit
                        if (preg_match('#^/admin/inft/prosga/permiso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_permiso_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_edit',));
                        }

                        // admin_inft_prosga_permiso_delete
                        if (preg_match('#^/admin/inft/prosga/permiso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_permiso_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_delete',));
                        }

                        // admin_inft_prosga_permiso_show
                        if (preg_match('#^/admin/inft/prosga/permiso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_permiso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_show',));
                        }

                        // admin_inft_prosga_permiso_export
                        if ($pathinfo === '/admin/inft/prosga/permiso/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'prosga.admin.permiso',  '_sonata_name' => 'admin_inft_prosga_permiso_export',  '_route' => 'admin_inft_prosga_permiso_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/inft/prosga/sector')) {
                        // admin_inft_prosga_sector_list
                        if ($pathinfo === '/admin/inft/prosga/sector/list') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::listAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_list',  '_route' => 'admin_inft_prosga_sector_list',);
                        }

                        // admin_inft_prosga_sector_create
                        if ($pathinfo === '/admin/inft/prosga/sector/create') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::createAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_create',  '_route' => 'admin_inft_prosga_sector_create',);
                        }

                        // admin_inft_prosga_sector_batch
                        if ($pathinfo === '/admin/inft/prosga/sector/batch') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::batchAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_batch',  '_route' => 'admin_inft_prosga_sector_batch',);
                        }

                        // admin_inft_prosga_sector_edit
                        if (preg_match('#^/admin/inft/prosga/sector/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_sector_edit')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::editAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_edit',));
                        }

                        // admin_inft_prosga_sector_delete
                        if (preg_match('#^/admin/inft/prosga/sector/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_sector_delete')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::deleteAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_delete',));
                        }

                        // admin_inft_prosga_sector_show
                        if (preg_match('#^/admin/inft/prosga/sector/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_sector_show')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::showAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_show',));
                        }

                        // admin_inft_prosga_sector_export
                        if ($pathinfo === '/admin/inft/prosga/sector/export') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\SectorController::exportAction',  '_sonata_admin' => 'prosga.admin.sector',  '_sonata_name' => 'admin_inft_prosga_sector_export',  '_route' => 'admin_inft_prosga_sector_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/inft/prosga/cargo')) {
                        // admin_inft_prosga_cargo_list
                        if ($pathinfo === '/admin/inft/prosga/cargo/list') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::listAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_list',  '_route' => 'admin_inft_prosga_cargo_list',);
                        }

                        // admin_inft_prosga_cargo_create
                        if ($pathinfo === '/admin/inft/prosga/cargo/create') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::createAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_create',  '_route' => 'admin_inft_prosga_cargo_create',);
                        }

                        // admin_inft_prosga_cargo_batch
                        if ($pathinfo === '/admin/inft/prosga/cargo/batch') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::batchAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_batch',  '_route' => 'admin_inft_prosga_cargo_batch',);
                        }

                        // admin_inft_prosga_cargo_edit
                        if (preg_match('#^/admin/inft/prosga/cargo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_cargo_edit')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::editAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_edit',));
                        }

                        // admin_inft_prosga_cargo_delete
                        if (preg_match('#^/admin/inft/prosga/cargo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_cargo_delete')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::deleteAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_delete',));
                        }

                        // admin_inft_prosga_cargo_show
                        if (preg_match('#^/admin/inft/prosga/cargo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_cargo_show')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::showAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_show',));
                        }

                        // admin_inft_prosga_cargo_export
                        if ($pathinfo === '/admin/inft/prosga/cargo/export') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\CargoController::exportAction',  '_sonata_admin' => 'prosga.admin.cargo',  '_sonata_name' => 'admin_inft_prosga_cargo_export',  '_route' => 'admin_inft_prosga_cargo_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/inft/prosga/estado')) {
                        // admin_inft_prosga_estado_list
                        if ($pathinfo === '/admin/inft/prosga/estado/list') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::listAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_list',  '_route' => 'admin_inft_prosga_estado_list',);
                        }

                        // admin_inft_prosga_estado_create
                        if ($pathinfo === '/admin/inft/prosga/estado/create') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::createAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_create',  '_route' => 'admin_inft_prosga_estado_create',);
                        }

                        // admin_inft_prosga_estado_batch
                        if ($pathinfo === '/admin/inft/prosga/estado/batch') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::batchAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_batch',  '_route' => 'admin_inft_prosga_estado_batch',);
                        }

                        // admin_inft_prosga_estado_edit
                        if (preg_match('#^/admin/inft/prosga/estado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_estado_edit')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::editAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_edit',));
                        }

                        // admin_inft_prosga_estado_delete
                        if (preg_match('#^/admin/inft/prosga/estado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_estado_delete')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::deleteAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_delete',));
                        }

                        // admin_inft_prosga_estado_show
                        if (preg_match('#^/admin/inft/prosga/estado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_estado_show')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::showAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_show',));
                        }

                        // admin_inft_prosga_estado_export
                        if ($pathinfo === '/admin/inft/prosga/estado/export') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\EstadoController::exportAction',  '_sonata_admin' => 'prosga.admin.estado',  '_sonata_name' => 'admin_inft_prosga_estado_export',  '_route' => 'admin_inft_prosga_estado_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/inft/prosga/frecuencia')) {
                        // admin_inft_prosga_frecuencia_list
                        if ($pathinfo === '/admin/inft/prosga/frecuencia/list') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::listAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_list',  '_route' => 'admin_inft_prosga_frecuencia_list',);
                        }

                        // admin_inft_prosga_frecuencia_create
                        if ($pathinfo === '/admin/inft/prosga/frecuencia/create') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::createAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_create',  '_route' => 'admin_inft_prosga_frecuencia_create',);
                        }

                        // admin_inft_prosga_frecuencia_batch
                        if ($pathinfo === '/admin/inft/prosga/frecuencia/batch') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::batchAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_batch',  '_route' => 'admin_inft_prosga_frecuencia_batch',);
                        }

                        // admin_inft_prosga_frecuencia_edit
                        if (preg_match('#^/admin/inft/prosga/frecuencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_frecuencia_edit')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::editAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_edit',));
                        }

                        // admin_inft_prosga_frecuencia_delete
                        if (preg_match('#^/admin/inft/prosga/frecuencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_frecuencia_delete')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::deleteAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_delete',));
                        }

                        // admin_inft_prosga_frecuencia_show
                        if (preg_match('#^/admin/inft/prosga/frecuencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_frecuencia_show')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::showAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_show',));
                        }

                        // admin_inft_prosga_frecuencia_export
                        if ($pathinfo === '/admin/inft/prosga/frecuencia/export') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\FrecuenciaController::exportAction',  '_sonata_admin' => 'prosga.admin.frecuencia',  '_sonata_name' => 'admin_inft_prosga_frecuencia_export',  '_route' => 'admin_inft_prosga_frecuencia_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/inft/prosga/norma')) {
                        // admin_inft_prosga_norma_list
                        if ($pathinfo === '/admin/inft/prosga/norma/list') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::listAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_list',  '_route' => 'admin_inft_prosga_norma_list',);
                        }

                        // admin_inft_prosga_norma_create
                        if ($pathinfo === '/admin/inft/prosga/norma/create') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::createAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_create',  '_route' => 'admin_inft_prosga_norma_create',);
                        }

                        // admin_inft_prosga_norma_batch
                        if ($pathinfo === '/admin/inft/prosga/norma/batch') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::batchAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_batch',  '_route' => 'admin_inft_prosga_norma_batch',);
                        }

                        // admin_inft_prosga_norma_edit
                        if (preg_match('#^/admin/inft/prosga/norma/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_norma_edit')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::editAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_edit',));
                        }

                        // admin_inft_prosga_norma_delete
                        if (preg_match('#^/admin/inft/prosga/norma/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_norma_delete')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::deleteAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_delete',));
                        }

                        // admin_inft_prosga_norma_show
                        if (preg_match('#^/admin/inft/prosga/norma/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_norma_show')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::showAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_show',));
                        }

                        // admin_inft_prosga_norma_export
                        if ($pathinfo === '/admin/inft/prosga/norma/export') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\NormaController::exportAction',  '_sonata_admin' => 'prosga.admin.norma',  '_sonata_name' => 'admin_inft_prosga_norma_export',  '_route' => 'admin_inft_prosga_norma_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/inft/prosga/alarma')) {
                        // admin_inft_prosga_alarma_list
                        if ($pathinfo === '/admin/inft/prosga/alarma/list') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::listAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_list',  '_route' => 'admin_inft_prosga_alarma_list',);
                        }

                        // admin_inft_prosga_alarma_create
                        if ($pathinfo === '/admin/inft/prosga/alarma/create') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::createAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_create',  '_route' => 'admin_inft_prosga_alarma_create',);
                        }

                        // admin_inft_prosga_alarma_batch
                        if ($pathinfo === '/admin/inft/prosga/alarma/batch') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::batchAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_batch',  '_route' => 'admin_inft_prosga_alarma_batch',);
                        }

                        // admin_inft_prosga_alarma_edit
                        if (preg_match('#^/admin/inft/prosga/alarma/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_alarma_edit')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::editAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_edit',));
                        }

                        // admin_inft_prosga_alarma_delete
                        if (preg_match('#^/admin/inft/prosga/alarma/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_alarma_delete')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::deleteAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_delete',));
                        }

                        // admin_inft_prosga_alarma_show
                        if (preg_match('#^/admin/inft/prosga/alarma/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inft_prosga_alarma_show')), array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::showAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_show',));
                        }

                        // admin_inft_prosga_alarma_export
                        if ($pathinfo === '/admin/inft/prosga/alarma/export') {
                            return array (  '_controller' => 'INFT\\prosgaBundle\\Controller\\AlarmaController::exportAction',  '_sonata_admin' => 'prosga.admin.alarma',  '_sonata_name' => 'admin_inft_prosga_alarma_export',  '_route' => 'admin_inft_prosga_alarma_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    if (0 === strpos($pathinfo, '/admin/login')) {
                        // sonata_user_admin_security_login
                        if ($pathinfo === '/admin/login') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                        }

                        // sonata_user_admin_security_check
                        if ($pathinfo === '/admin/login_check') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                        }

                    }

                    // sonata_user_admin_security_logout
                    if ($pathinfo === '/admin/logout') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

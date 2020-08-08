<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admins' => [[['_route' => 'admin_liste', '_controller' => 'App\\Controller\\AdminController::getAdmin', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_admins'], null, ['GET' => 0], null, false, false, null]],
        '/api/apprenants' => [[['_route' => 'apprenant_liste', '_controller' => 'App\\Controller\\ApprenantController::getApprenant', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_apprenants'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/apprenants' => [
            [['_route' => 'app_apprenant_addapprenant', '__controller' => 'App\\Controller\\ApprenantController::addApprenant', '__api_resource_class' => 'Apprenant', '__api_collection_operation_name' => 'add_apprenant', '_controller' => 'App\\Controller\\ApprenantController::addApprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_add_apprenant_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/competences' => [
            [['_route' => 'app_competence_addcompetence', '__controller' => 'App\\Controller\\CompetenceController::addCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'add_competence', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_add_competence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'add_competence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_show_competence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'show_competence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/Competences' => [[['_route' => 'app_competence_showcompetence', '__controller' => 'App\\Controller\\CompetenceController::showCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'show_Competence', '_controller' => 'App\\Controller\\CompetenceController::showCompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/formateurs' => [[['_route' => 'formateur_liste', '_controller' => 'App\\Controller\\FormateurController::getFormateur', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_formateurs'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/formateurs' => [
            [['_route' => 'app_formateur_addformateur', '__controller' => 'App\\Controller\\FormateurController::addFormateur', '__api_resource_class' => 'Formateur', '__api_collection_operation_name' => 'add_formateur', '_controller' => 'App\\Controller\\FormateurController::addFormateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_add_formateur_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/groupecompetences' => [
            [['_route' => 'app_groupecompetence_addgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::addGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'add_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::addGroupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_groupecompetence_showgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::showGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'show_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::showGroupecompetence'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupecompetences_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupecompetences_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/promos' => [
            [['_route' => 'app_promo_addpromo', '__controller' => 'App\\Controller\\PromoController::addPromo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'add_promo', '_controller' => 'App\\Controller\\PromoController::addPromo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_add_promo_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'add_promo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_show_promo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'show_promo'], null, ['GET' => 0], null, false, false, null],
        ],
        '/promo' => [[['_route' => 'promo', '_controller' => 'App\\Controller\\PromoController::index'], null, null, null, false, false, null]],
        '/api/admin/users' => [
            [['_route' => 'app_user_adduser', '__controller' => 'App\\Controller\\UserController::addUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/(?'
                        .'|a(?'
                            .'|dmin(?'
                                .'|s/([^/]++)(*:74)'
                                .'|/(?'
                                    .'|competences/([^/]++)(*:105)'
                                    .'|groupecompetences/([^/]++)(*:139)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(*:167)'
                        .')'
                        .'|formateurs/([^/]++)(*:195)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:232)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:263)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:305)'
                                .'|mpetences/([^/]++)/(?'
                                    .'|groupecompetences(?'
                                        .'|(?:\\.([^/]++))?(*:370)'
                                        .'|/([^/]++)/(?'
                                            .'|user(?:\\.([^/]++))?(*:410)'
                                            .'|competences(?'
                                                .'|(?:\\.([^/]++))?(*:447)'
                                                .'|/([^/]++)/niveaux(?:\\.([^/]++))?(*:487)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|niveaux(?:\\.([^/]++))?(*:520)'
                                .')'
                            .')'
                            .'|_ms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:554)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:592)'
                                .')'
                            .')'
                        .')'
                        .'|niveaux(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:631)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:669)'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|apprenants(?'
                                        .'|(?:/([^/]++))?(*:721)'
                                        .'|/([^/]++)(?'
                                            .'|(*:741)'
                                        .')'
                                    .')'
                                    .'|users(?'
                                        .'|(?:/([^/]++))?(*:773)'
                                        .'|/([^/]++)(?'
                                            .'|(*:793)'
                                        .')'
                                    .')'
                                    .'|pro(?'
                                        .'|fils/([^/]++)(?'
                                            .'|(*:825)'
                                        .')'
                                        .'|mos/([^/]++)(?'
                                            .'|(*:849)'
                                        .')'
                                    .')'
                                    .'|groupecompetences/(?'
                                        .'|competences(*:891)'
                                        .'|([^/]++)(?'
                                            .'|(*:910)'
                                        .')'
                                    .')'
                                    .'|competences/([^/]++)(?'
                                        .'|(*:943)'
                                    .')'
                                    .'|formateurs(?'
                                        .'|(?:/([^/]++))?(*:979)'
                                        .'|/([^/]++)(?'
                                            .'|(*:999)'
                                        .')'
                                    .')'
                                .')'
                                .'|s/(\\d+)(*:1017)'
                            .')'
                            .'|pprenants/(\\d+)(*:1042)'
                        .')'
                        .'|profils(?'
                            .'|/([^/]++)/users(?:\\.([^/]++))?(*:1092)'
                            .'|orties(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1128)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1167)'
                                .')'
                            .')'
                        .')'
                        .'|tags(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1204)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1243)'
                            .')'
                        .')'
                        .'|groupe(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1285)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1324)'
                                .')'
                            .')'
                            .'|competences/([^/]++)/(?'
                                .'|user(?:\\.([^/]++))?(*:1378)'
                                .'|competences(?'
                                    .'|(?:\\.([^/]++))?(*:1416)'
                                    .'|/([^/]++)/(?'
                                        .'|groupecompetences(?'
                                            .'|(?:\\.([^/]++))?(*:1473)'
                                            .'|/([^/]++)/user(?:\\.([^/]++))?(*:1511)'
                                        .')'
                                        .'|niveaux(?:\\.([^/]++))?(*:1543)'
                                    .')'
                                .')'
                            .')'
                            .'|tags(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1580)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1619)'
                                .')'
                            .')'
                        .')'
                        .'|referentiels(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1664)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1703)'
                            .')'
                        .')'
                        .'|formateurs/(\\d+)(*:1730)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'admin_find', '_controller' => 'App\\Controller\\AdminController::getAdminById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'app_competence_updatecompetence', '__controller' => 'App\\Controller\\CompetenceController::updateCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'update_competence', '_controller' => 'App\\Controller\\CompetenceController::updateCompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        139 => [[['_route' => 'app_groupecompetence_updategroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'update_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        167 => [[['_route' => 'apprenant_find', '_controller' => 'App\\Controller\\ApprenantController::getApprenantById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        195 => [[['_route' => 'formateur_find', '_controller' => 'App\\Controller\\FormateurController::getFormateurById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        263 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        305 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        370 => [[['_route' => 'api_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'api_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'api_competences_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_competences_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_competences_get_subresource']], ['id', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        487 => [[['_route' => 'api_competences_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetences', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'api_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_niveaux_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        554 => [
            [['_route' => 'api_c_ms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        592 => [
            [['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        631 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        669 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        721 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        741 => [
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        773 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        793 => [
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        825 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        849 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        891 => [[['_route' => 'api_groupecompetences_show_groupecompetence_competence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'show_groupecompetence_competence'], [], ['GET' => 0], null, false, false, null]],
        910 => [
            [['_route' => 'api_groupecompetences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        943 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_update_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'update_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        979 => [[['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        999 => [
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1017 => [[['_route' => 'api_users_get_admin_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        1042 => [[['_route' => 'api_apprenants_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        1092 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1128 => [
            [['_route' => 'api_profilsorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1167 => [
            [['_route' => 'api_profilsorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1204 => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1243 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1285 => [
            [['_route' => 'api_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1324 => [
            [['_route' => 'api_groupes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1378 => [[['_route' => 'api_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_user_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1416 => [[['_route' => 'api_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1473 => [[['_route' => 'api_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        1511 => [[['_route' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        1543 => [[['_route' => 'api_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_niveaux_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        1580 => [
            [['_route' => 'api_groupetags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1619 => [
            [['_route' => 'api_groupetags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1664 => [
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1703 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1730 => [
            [['_route' => 'api_formateurs_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

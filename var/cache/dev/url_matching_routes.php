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
            [['_route' => 'api_competences_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
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
        '/groupetag' => [[['_route' => 'groupetag', '_controller' => 'App\\Controller\\GroupetagController::index'], null, null, null, false, false, null]],
        '/api/admin/groupetags' => [
            [['_route' => 'app_groupetag_addgroupetag', '__controller' => 'App\\Controller\\GroupetagController::addGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'add_groupetags', '_controller' => 'App\\Controller\\GroupetagController::addGroupetag'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_groupetag_showgroupetag', '__controller' => 'App\\Controller\\GroupetagController::showGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'show_groupetagss', '_controller' => 'App\\Controller\\GroupetagController::showGroupetag'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupetags_add_groupetags_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'add_groupetags'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupetags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupetags_show_groupetags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'show_groupetags'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/users' => [
            [['_route' => 'app_user_adduser', '__controller' => 'App\\Controller\\UserController::addUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/tags' => [
            [['_route' => 'api_tags_add_groupetags_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'add_groupetags'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_tags_show_tags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'show_tags'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/groupecompetences/competences' => [[['_route' => 'api_groupecompetences_show_groupecompetence_competence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'show_groupecompetence_competence'], null, ['GET' => 0], null, false, false, null]],
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
                                    .'|competences/([^/]++)(?'
                                        .'|(*:108)'
                                    .')'
                                    .'|groupetags/([^/]++)(*:136)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(*:164)'
                        .')'
                        .'|formateurs/([^/]++)(*:192)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:229)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:260)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:302)'
                                .'|mpetences/([^/]++)/competences(?'
                                    .'|(?:\\.([^/]++))?(*:358)'
                                    .'|/([^/]++)/(?'
                                        .'|user(?:\\.([^/]++))?(*:398)'
                                        .'|competences(?:\\.([^/]++))?(*:432)'
                                    .')'
                                .')'
                            .')'
                            .'|_ms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:467)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:505)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|groupe(?'
                                        .'|tags/(?'
                                            .'|tags(*:552)'
                                            .'|([^/]++)(?'
                                                .'|(*:571)'
                                            .')'
                                        .')'
                                        .'|competences/([^/]++)(?'
                                            .'|(*:604)'
                                        .')'
                                    .')'
                                    .'|tags/([^/]++)(?'
                                        .'|(*:630)'
                                    .')'
                                    .'|users(?'
                                        .'|(?:/([^/]++))?(*:661)'
                                        .'|/([^/]++)(?'
                                            .'|(*:681)'
                                        .')'
                                    .')'
                                    .'|competences/([^/]++)(?'
                                        .'|(*:714)'
                                    .')'
                                    .'|profils/([^/]++)(?'
                                        .'|(*:742)'
                                    .')'
                                    .'|formateurs(?'
                                        .'|(?:/([^/]++))?(*:778)'
                                        .'|/([^/]++)(?'
                                            .'|(*:798)'
                                        .')'
                                    .')'
                                    .'|apprenants(?'
                                        .'|(?:/([^/]++))?(*:835)'
                                        .'|/([^/]++)(?'
                                            .'|(*:855)'
                                        .')'
                                    .')'
                                .')'
                                .'|s/(\\d+)(*:873)'
                            .')'
                            .'|pprenants/(\\d+)(*:897)'
                        .')'
                        .'|groupe(?'
                            .'|tags/([^/]++)/tags(?:\\.([^/]++))?(*:948)'
                            .'|competences/([^/]++)/(?'
                                .'|user(?:\\.([^/]++))?(*:999)'
                                .'|competences(?'
                                    .'|(?:\\.([^/]++))?(*:1036)'
                                    .'|/([^/]++)/competences(?'
                                        .'|(?:\\.([^/]++))?(*:1084)'
                                        .'|/([^/]++)/user(?:\\.([^/]++))?(*:1122)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1156)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1195)'
                                .')'
                            .')'
                        .')'
                        .'|pro(?'
                            .'|mos(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1237)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1276)'
                                .')'
                            .')'
                            .'|fils(?'
                                .'|orties(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1321)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1360)'
                                    .')'
                                .')'
                                .'|/([^/]++)/users(?:\\.([^/]++))?(*:1401)'
                            .')'
                        .')'
                        .'|niveaux(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1440)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1479)'
                            .')'
                        .')'
                        .'|referentiels(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1523)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1562)'
                            .')'
                        .')'
                        .'|formateurs/(\\d+)(*:1589)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'admin_find', '_controller' => 'App\\Controller\\AdminController::getAdminById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        108 => [
            [['_route' => 'app_competence_updatecompetence', '__controller' => 'App\\Controller\\CompetenceController::updateCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'update_competence', '_controller' => 'App\\Controller\\CompetenceController::updateCompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'app_groupecompetence_updategroupecompetence', '__controller' => 'App\\Controller\\CompetenceController::updatecompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'update_competence', '_controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
        ],
        136 => [[['_route' => 'app_groupetag_updategroupetag', '__controller' => 'App\\Controller\\GroupetagController::updateGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'update_Groupetag', '_controller' => 'App\\Controller\\GroupetagController::updateGroupetag'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        164 => [[['_route' => 'apprenant_find', '_controller' => 'App\\Controller\\ApprenantController::getApprenantById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => 'formateur_find', '_controller' => 'App\\Controller\\FormateurController::getFormateurById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        260 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        302 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        358 => [[['_route' => 'api_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'api_competences_competences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_competences_competences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['competences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_competences_competences_user_get_subresource']], ['id', 'competences', '_format'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'api_competences_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_competences_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['competences', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_competences_competences_competences_get_subresource']], ['id', 'competences', '_format'], ['GET' => 0], null, false, true, null]],
        467 => [
            [['_route' => 'api_c_ms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        505 => [
            [['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        552 => [[['_route' => 'api_groupetags_show_groupetags_tags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'show_groupetags_tags'], [], ['GET' => 0], null, false, false, null]],
        571 => [
            [['_route' => 'api_groupetags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_updateGroupeGroupetag_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'updateGroupeGroupetag'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        604 => [
            [['_route' => 'api_groupecompetences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        630 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        661 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        681 => [
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        714 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_update_competence_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'update_competence'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        742 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        778 => [[['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        798 => [
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        835 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        855 => [
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        873 => [[['_route' => 'api_users_get_admin_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        897 => [[['_route' => 'api_apprenants_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        948 => [[['_route' => 'api_groupetags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_groupetags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tag', 'identifiers' => [['id', 'App\\Entity\\Groupetag', true]], 'collection' => true, 'operationId' => 'api_groupetags_tags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        999 => [[['_route' => 'api_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_user_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1036 => [[['_route' => 'api_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1084 => [[['_route' => 'api_groupecompetences_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_competences_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        1122 => [[['_route' => 'api_groupecompetences_competences_competences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_competences_competences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['competences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_competences_competences_user_get_subresource']], ['id', 'competence', 'competences', '_format'], ['GET' => 0], null, false, true, null]],
        1156 => [
            [['_route' => 'api_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1195 => [
            [['_route' => 'api_groupes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1237 => [
            [['_route' => 'api_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1276 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1321 => [
            [['_route' => 'api_profilsorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1360 => [
            [['_route' => 'api_profilsorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1401 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1440 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1479 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1523 => [
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1562 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1589 => [
            [['_route' => 'api_formateurs_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

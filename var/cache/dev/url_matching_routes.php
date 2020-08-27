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
        '/brief' => [[['_route' => 'brief', '_controller' => 'App\\Controller\\BriefController::index'], null, null, null, false, false, null]],
        '/api/formateur/briefs' => [
            [['_route' => 'app_brief_addbrief', '__controller' => 'App\\Controller\\BriefController::addBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'add_briefs', '_controller' => 'App\\Controller\\BriefController::addBrief'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_briefs_add_briefs_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'add_briefs'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_briefs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_briefs_show_briefs_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'show_briefs'], null, ['GET' => 0], null, false, false, null],
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
        '/api/admin/groupes' => [
            [['_route' => 'app_groupe_addgroupe', '__controller' => 'App\\Controller\\GroupeController::addGroupe', '__api_resource_class' => 'App\\Entity\\Groupe', '__api_collection_operation_name' => 'add_groupe', '_controller' => 'App\\Controller\\GroupeController::addGroupe'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupes_add_groupe_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'add_groupe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/groupe' => [[['_route' => 'groupe', '_controller' => 'App\\Controller\\GroupeController::index'], null, null, null, false, false, null]],
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
        '/api/admin/promos' => [
            [['_route' => 'app_promo_addpromo', '__controller' => 'App\\Controller\\PromoController::addPromo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'add_promo', '_controller' => 'App\\Controller\\PromoController::addPromo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_add_promo_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'add_promo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_show_promo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'show_promo'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/promos/principal' => [[['_route' => 'app_promo_promo_gp_principal', '__controller' => 'App\\Controller\\PromoController::promo_gp_principal', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'promo_gprincipal', '_controller' => 'App\\Controller\\PromoController::promo_gp_principal'], null, ['GET' => 0], null, false, false, null]],
        '/promo' => [[['_route' => 'promo', '_controller' => 'App\\Controller\\PromoController::index'], null, null, null, false, false, null]],
        '/referentiel' => [[['_route' => 'referentiel', '_controller' => 'App\\Controller\\ReferentielController::index'], null, null, null, false, false, null]],
        '/api/admin/referentiels' => [
            [['_route' => 'app_referentiel_addreferentiel', '__controller' => 'App\\Controller\\ReferentielController::addReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'add_referentiel', '_controller' => 'App\\Controller\\ReferentielController::addReferentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_add_referentiel_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'add_referentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
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
        '/api/admin/profilsorties' => [
            [['_route' => 'api_profilsorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profilsorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
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
                                    .'|groupe(?'
                                        .'|s/([^/]++)(*:132)'
                                        .'|competences/([^/]++)(*:160)'
                                        .'|tags/([^/]++)(*:181)'
                                    .')'
                                    .'|promos/([^/]++)(?'
                                        .'|/(?'
                                            .'|apprenants(?'
                                                .'|/attente(*:233)'
                                                .'|(*:241)'
                                            .')'
                                            .'|principal(*:259)'
                                            .'|formateurs(*:277)'
                                            .'|groupes(*:292)'
                                        .')'
                                        .'|(*:301)'
                                    .')'
                                    .'|referentiels/([^/]++)(*:331)'
                                .')'
                            .')'
                            .'|pprenants/([^/]++)(*:359)'
                        .')'
                        .'|formateur(?'
                            .'|/(?'
                                .'|briefs/([^/]++)(*:399)'
                                .'|promo/([^/]++)/brief/([^/]++)(?'
                                    .'|/assignation(*:451)'
                                    .'|(*:459)'
                                .')'
                            .')'
                            .'|s/([^/]++)(*:479)'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:517)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:548)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:590)'
                                .'|mpetences/([^/]++)/(?'
                                    .'|groupecompetences(?'
                                        .'|(?:\\.([^/]++))?(*:655)'
                                        .'|/([^/]++)/(?'
                                            .'|user(?:\\.([^/]++))?(*:695)'
                                            .'|competences(?'
                                                .'|(?:\\.([^/]++))?(*:732)'
                                                .'|/([^/]++)/niveaux(?:\\.([^/]++))?(*:772)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|niveaux(?:\\.([^/]++))?(*:805)'
                                .')'
                            .')'
                            .'|_ms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:839)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:877)'
                                .')'
                            .')'
                        .')'
                        .'|formateur(?'
                            .'|/briefs(?'
                                .'|(?:/([^/]++))?(*:924)'
                                .'|/([^/]++)(*:941)'
                            .')'
                            .'|s/(?'
                                .'|promo/([^/]++)/brief/([^/]++)/assignation(*:996)'
                                .'|(\\d+)(*:1009)'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|groupe(?'
                                        .'|tags/(?'
                                            .'|tags(*:1056)'
                                            .'|([^/]++)(?'
                                                .'|(*:1076)'
                                            .')'
                                        .')'
                                        .'|competences/(?'
                                            .'|competences(*:1113)'
                                            .'|([^/]++)(?'
                                                .'|(*:1133)'
                                            .')'
                                        .')'
                                        .'|s/(?'
                                            .'|apprenants(*:1159)'
                                            .'|([^/]++)(?'
                                                .'|(*:1179)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|tags/([^/]++)(?'
                                        .'|(*:1207)'
                                    .')'
                                    .'|users(?'
                                        .'|(?:/([^/]++))?(*:1239)'
                                        .'|/([^/]++)(?'
                                            .'|(*:1260)'
                                        .')'
                                    .')'
                                    .'|pro(?'
                                        .'|mos/(?'
                                            .'|principal(*:1293)'
                                            .'|([^/]+)principal(*:1318)'
                                            .'|([^/]++)(?'
                                                .'|/(?'
                                                    .'|apprenants(?'
                                                        .'|/attente(*:1363)'
                                                        .'|(*:1372)'
                                                    .')'
                                                    .'|referentiel(*:1393)'
                                                    .'|groupes(?'
                                                        .'|/apprenants(*:1423)'
                                                        .'|(*:1432)'
                                                    .')'
                                                    .'|formateurs(?'
                                                        .'|(*:1455)'
                                                    .')'
                                                .')'
                                                .'|(*:1466)'
                                            .')'
                                        .')'
                                        .'|fils(?'
                                            .'|orties/([^/]++)(?'
                                                .'|(*:1502)'
                                            .')'
                                            .'|/([^/]++)(?'
                                                .'|(*:1524)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|competences/([^/]++)(?'
                                        .'|(*:1559)'
                                    .')'
                                    .'|referentiels/(?'
                                        .'|groupecompetences(*:1602)'
                                        .'|([^/]++)(?'
                                            .'|(*:1622)'
                                        .')'
                                    .')'
                                    .'|formateurs(?'
                                        .'|(?:/([^/]++))?(*:1660)'
                                        .'|/([^/]++)(?'
                                            .'|(*:1681)'
                                        .')'
                                    .')'
                                    .'|apprenants(?'
                                        .'|(?:/([^/]++))?(*:1719)'
                                        .'|/([^/]++)(?'
                                            .'|(*:1740)'
                                        .')'
                                    .')'
                                .')'
                                .'|s/(\\d+)(*:1759)'
                            .')'
                            .'|p(?'
                                .'|i/profilsorties/([^/]++)/apprenants(*:1808)'
                                .'|prenants/(\\d+)(*:1831)'
                            .')'
                        .')'
                        .'|groupe(?'
                            .'|tags/([^/]++)/tags(?:\\.([^/]++))?(*:1884)'
                            .'|competences/([^/]++)/(?'
                                .'|user(?:\\.([^/]++))?(*:1936)'
                                .'|competences(?'
                                    .'|(?:\\.([^/]++))?(*:1974)'
                                    .'|/([^/]++)/(?'
                                        .'|groupecompetences(?'
                                            .'|(?:\\.([^/]++))?(*:2031)'
                                            .'|/([^/]++)/user(?:\\.([^/]++))?(*:2069)'
                                        .')'
                                        .'|niveaux(?:\\.([^/]++))?(*:2101)'
                                    .')'
                                .')'
                            .')'
                            .'|s/([^/]++)/apprenants(?:\\.([^/]++))?(*:2149)'
                        .')'
                        .'|pro(?'
                            .'|mos/([^/]++)/(?'
                                .'|groupes(?'
                                    .'|(?:\\.([^/]++))?(*:2206)'
                                    .'|/([^/]++)/apprenants(?:\\.([^/]++))?(*:2250)'
                                .')'
                                .'|referentiel(?'
                                    .'|(?:\\.([^/]++))?(*:2289)'
                                    .'|/groupecompetences(?'
                                        .'|(?:\\.([^/]++))?(*:2334)'
                                        .'|/([^/]++)/(?'
                                            .'|user(?:\\.([^/]++))?(*:2375)'
                                            .'|competences(?'
                                                .'|(?:\\.([^/]++))?(*:2413)'
                                                .'|/([^/]++)/(?'
                                                    .'|groupecompetences(?'
                                                        .'|(?:\\.([^/]++))?(*:2470)'
                                                        .'|/([^/]++)/user(?:\\.([^/]++))?(*:2508)'
                                                    .')'
                                                    .'|niveaux(?:\\.([^/]++))?(*:2540)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|fils(?'
                                .'|orties/([^/]++)/apprenants(?:\\.([^/]++))?(*:2603)'
                                .'|/([^/]++)/users(?:\\.([^/]++))?(*:2642)'
                            .')'
                        .')'
                        .'|niveaux(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2681)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:2720)'
                            .')'
                        .')'
                        .'|referentiels/([^/]++)/groupecompetences(?'
                            .'|(?:\\.([^/]++))?(*:2788)'
                            .'|/([^/]++)/(?'
                                .'|user(?:\\.([^/]++))?(*:2829)'
                                .'|competences(?'
                                    .'|(?:\\.([^/]++))?(*:2867)'
                                    .'|/([^/]++)/(?'
                                        .'|groupecompetences(?'
                                            .'|(?:\\.([^/]++))?(*:2924)'
                                            .'|/([^/]++)/user(?:\\.([^/]++))?(*:2962)'
                                        .')'
                                        .'|niveaux(?:\\.([^/]++))?(*:2994)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'admin_find', '_controller' => 'App\\Controller\\AdminController::getAdminById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'app_competence_updatecompetence', '__controller' => 'App\\Controller\\CompetenceController::updateCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'update_competence', '_controller' => 'App\\Controller\\CompetenceController::updateCompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        132 => [[['_route' => 'app_groupe_updategroupe', '__controller' => 'App\\Controller\\GroupeController::updateGroupe', '__api_resource_class' => 'App\\Entity\\Groupe', '__api_collection_operation_name' => 'update_groupe', '_controller' => 'App\\Controller\\GroupeController::updateGroupe'], ['id'], ['PUT' => 0], null, false, true, null]],
        160 => [[['_route' => 'app_groupecompetence_updategroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'update_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        181 => [[['_route' => 'app_groupetag_updategroupetag', '__controller' => 'App\\Controller\\GroupetagController::updateGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'update_Groupetag', '_controller' => 'App\\Controller\\GroupetagController::updateGroupetag'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        233 => [[['_route' => 'app_promo_apprenantenattente', '__controller' => 'App\\Controller\\PromoController::apprenantEnAttente', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'apprenants_attente', '_controller' => 'App\\Controller\\PromoController::apprenantEnAttente'], ['id'], ['GET' => 0], null, false, false, null]],
        241 => [[['_route' => 'app_promo_gerer_apprenant', '__controller' => 'App\\Controller\\PromoController::gerer_apprenant', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'gerer_apprenants', '_controller' => 'App\\Controller\\PromoController::gerer_apprenant'], ['id'], ['PUT' => 0], null, false, false, null]],
        259 => [[['_route' => 'app_promo_promo_id_gp_principal', '__controller' => 'App\\Controller\\PromoController::promo_id_gp_principal', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'promo_id_gprincipal', '_controller' => 'App\\Controller\\PromoController::promo_id_gp_principal'], ['id'], ['GET' => 0], null, false, false, null]],
        277 => [[['_route' => 'app_promo_gerer_formateur', '__controller' => 'App\\Controller\\PromoController::gerer_formateur', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'gerer_formateurs', '_controller' => 'App\\Controller\\PromoController::gerer_formateur'], ['id'], ['PUT' => 0], null, false, false, null]],
        292 => [[['_route' => 'app_promo_gerer_groupe', '__controller' => 'App\\Controller\\PromoController::gerer_groupe', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'gerer_groupes', '_controller' => 'App\\Controller\\PromoController::gerer_groupe'], ['id'], ['PUT' => 0], null, false, false, null]],
        301 => [[['_route' => 'app_promo_updatepromo', '__controller' => 'App\\Controller\\PromoController::updatePromo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'update_promo', '_controller' => 'App\\Controller\\PromoController::updatePromo'], ['id'], ['PUT' => 0], null, false, true, null]],
        331 => [[['_route' => 'app_referentiel_updatereferentiel', '__controller' => 'App\\Controller\\ReferentielController::updateReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'update_referentiel', '_controller' => 'App\\Controller\\ReferentielController::updateReferentiel'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        359 => [[['_route' => 'apprenant_find', '_controller' => 'App\\Controller\\ApprenantController::getApprenantById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'app_brief_dupliquebrief', '__controller' => 'App\\Controller\\BriefController::addBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'duplique_briefs', '_controller' => 'App\\Controller\\BriefController::dupliqueBrief'], ['id'], ['POST' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_brief_assignationbrief', '__controller' => 'App\\Controller\\BriefController::assignationBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'assignation_briefs', '_controller' => 'App\\Controller\\BriefController::assignationBrief'], ['idpromo', 'idbrief'], ['GET' => 0], null, false, false, null]],
        459 => [[['_route' => 'app_brief_updatebrief', '__controller' => 'App\\Controller\\BriefController::assignationBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'update_briefs', '_controller' => 'App\\Controller\\BriefController::UpdateBrief'], ['idpromo', 'idbrief'], ['PUT' => 0], null, false, true, null]],
        479 => [[['_route' => 'formateur_find', '_controller' => 'App\\Controller\\FormateurController::getFormateurById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        517 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        548 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        590 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        655 => [[['_route' => 'api_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'api_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        732 => [[['_route' => 'api_competences_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_competences_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_competences_get_subresource']], ['id', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        772 => [[['_route' => 'api_competences_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetences', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        805 => [[['_route' => 'api_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_niveaux_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        839 => [
            [['_route' => 'api_c_ms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        877 => [
            [['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        924 => [[['_route' => 'api_briefs_duplique_briefs_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'duplique_briefs', 'id' => null], ['id'], ['POST' => 0], null, false, true, null]],
        941 => [[['_route' => 'api_briefs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        996 => [[['_route' => 'api_briefs_assignation_briefs_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'assignation_briefs'], ['idpromo', 'idbrief'], ['GET' => 0], null, false, false, null]],
        1009 => [[['_route' => 'api_formateurs_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        1056 => [[['_route' => 'api_groupetags_show_groupetags_tags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'show_groupetags_tags'], [], ['GET' => 0], null, false, false, null]],
        1076 => [
            [['_route' => 'api_groupetags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_updateGroupeGroupetag_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'updateGroupeGroupetag'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1113 => [[['_route' => 'api_groupecompetences_show_groupecompetence_competence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'show_groupecompetence_competence'], [], ['GET' => 0], null, false, false, null]],
        1133 => [
            [['_route' => 'api_groupecompetences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1159 => [[['_route' => 'api_groupes_show_apprenants_groupe_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'show_apprenants_groupe'], [], ['GET' => 0], null, false, false, null]],
        1179 => [
            [['_route' => 'api_groupes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_update_groupe_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'update_groupe'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1207 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1239 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1260 => [
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1293 => [[['_route' => 'api_promos_promo_gprincipal_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'promo_gprincipal'], [], ['GET' => 0], null, false, false, null]],
        1318 => [[['_route' => 'api_promos_promo_id_gprincipal_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_id_gprincipal'], ['id'], ['GET' => 0], null, false, false, null]],
        1363 => [[['_route' => 'api_promos_apprenants_attente_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'apprenants_attente'], ['id'], ['GET' => 0], null, false, false, null]],
        1372 => [[['_route' => 'api_promos_gerer_apprenants_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'gerer_apprenants'], ['id'], ['PUT' => 0], null, false, false, null]],
        1393 => [[['_route' => 'api_promos_promo_referentiel_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_referentiel'], ['id'], ['GET' => 0], null, false, false, null]],
        1423 => [[['_route' => 'api_promos_promo_groupe_apprenants_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_groupe_apprenants'], ['id'], ['GET' => 0], null, false, false, null]],
        1432 => [[['_route' => 'api_promos_gerer_groupes_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'gerer_groupes'], ['id'], ['PUT' => 0], null, false, false, null]],
        1455 => [
            [['_route' => 'api_promos_promo_groupe_formateurs_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_groupe_formateurs'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_promos_gerer_formateurs_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'gerer_formateurs'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        1466 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_update_promo_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'update_promo'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1502 => [
            [['_route' => 'api_profilsorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1524 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1559 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_update_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'update_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1602 => [[['_route' => 'api_referentiels_show_referentiel_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_referentiel_groupecompetence'], [], ['GET' => 0], null, false, false, null]],
        1622 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_update_referentiel_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'update_referentiel'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1660 => [[['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1681 => [
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1719 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1740 => [
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1759 => [[['_route' => 'api_users_get_admin_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        1808 => [[['_route' => 'api_profilsorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, false, null]],
        1831 => [[['_route' => 'api_apprenants_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        1884 => [[['_route' => 'api_groupetags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_groupetags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tag', 'identifiers' => [['id', 'App\\Entity\\Groupetag', true]], 'collection' => true, 'operationId' => 'api_groupetags_tags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1936 => [[['_route' => 'api_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_user_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1974 => [[['_route' => 'api_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2031 => [[['_route' => 'api_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        2069 => [[['_route' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        2101 => [[['_route' => 'api_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_niveaux_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        2149 => [[['_route' => 'api_groupes_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_groupes_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenants', 'identifiers' => [['id', 'App\\Entity\\Groupe', true]], 'collection' => true, 'operationId' => 'api_groupes_apprenants_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2206 => [[['_route' => 'api_promos_groupes_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_subresource_operation_name' => 'api_promos_groupes_get_subresource', '_api_subresource_context' => ['property' => 'groupes', 'identifiers' => [['id', 'App\\Entity\\Promo', true]], 'collection' => true, 'operationId' => 'api_promos_groupes_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2250 => [[['_route' => 'api_promos_groupes_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_promos_groupes_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenants', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['groupes', 'App\\Entity\\Groupe', true]], 'collection' => true, 'operationId' => 'api_promos_groupes_apprenants_get_subresource']], ['id', 'groupes', '_format'], ['GET' => 0], null, false, true, null]],
        2289 => [[['_route' => 'api_promos_referentiel_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_subresource_operation_name' => 'api_promos_referentiel_get_subresource', '_api_subresource_context' => ['property' => 'referentiel', 'identifiers' => [['id', 'App\\Entity\\Promo', true]], 'collection' => false, 'operationId' => 'api_promos_referentiel_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2334 => [[['_route' => 'api_promos_referentiel_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetence', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2375 => [[['_route' => 'api_promos_referentiel_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_promos_referentiel_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        2413 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        2470 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        2508 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        2540 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        2603 => [[['_route' => 'api_profilsorties_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_profilsorties_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenants', 'identifiers' => [['id', 'App\\Entity\\Profilsortie', true]], 'collection' => true, 'operationId' => 'api_profilsorties_apprenants_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2642 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2681 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2720 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2788 => [[['_route' => 'api_referentiels_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetence', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2829 => [[['_route' => 'api_referentiels_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_referentiels_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        2867 => [[['_route' => 'api_referentiels_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_competences_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        2924 => [[['_route' => 'api_referentiels_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        2962 => [[['_route' => 'api_referentiels_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_referentiels_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        2994 => [
            [['_route' => 'api_referentiels_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php
/**
 * Ce code génère la structure HTML de l'en-tête d'une page web.
 * Il inclut la déclaration DOCTYPE, les balises <head>, le corps de la page et l'en-tête de la navigation.
 * La mise en page de l'en-tête dépend des rôles de l'utilisateur actuel.
 */

// Début du document HTML.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<!-- BODY -->
<?php
// Récupération de l'utilisateur actuel.
$current_user = wp_get_current_user();

// Vérification du rôle de l'utilisateur pour déterminer la classe CSS du corps de la page.
if (in_array('television', $current_user->roles)) :
?>
<body class="body_television_ecran" <?php body_class(); ?>>
<?php else: ?>
<body <?php body_class(); ?>>
<?php endif; ?>

<!-- HEADER -->
<?php
// Vérification du rôle de l'utilisateur pour déterminer l'affichage de l'en-tête.
if (!in_array('television', $current_user->roles)) :
    ?>
    <header class="text-white" style="background-color: #1476c6;">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <?php
                    if (get_header_image()) :
                        // Affichage du logo du site si une image d'en-tête est définie.
                        ?>
                        <img class="bi mx-2" width="40" height="40" src="<?php header_image(); ?>" class="d-inline-block align-top logo" alt="Logo du site">
                    <?php endif; ?>
                    <?php bloginfo('name'); ?>
                </a>

                <?php if (is_user_logged_in()) :
                    $user_id = get_current_user_id();
                    $user_info = get_userdata($user_id); ?>

                    <!-- Affichage du menu de navigation pour les utilisateurs connectés avec certains rôles. -->
                    <ul class="navbar-nav mr-auto">
                        <?php if (in_array('administrator', $user_info->roles) || in_array('secretaire', $user_info->roles) || in_array('directeuretude', $user_info->roles) || in_array('enseignant', $user_info->roles)) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarInformationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Informations
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarInformationsDropdown">
                                    <li><a class="dropdown-item" href="<?php echo home_url('/creer-information') ?>">Créer une information</a></li>
                                    <li><a class="dropdown-item" href="<?php echo home_url('/gerer-les-informations') ?>">Voir mes informations</a></li>
                                </ul>
                            </li>
                        <?php endif;

                        if (in_array('administrator', $user_info->roles) || in_array('secretaire', $user_info->roles) || in_array('directeuretude', $user_info->roles) || in_array('enseignant', $user_info->roles)) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarInformationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Alertes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarInformationsDropdown">
                                    <li><a class="dropdown-item" href="<?php echo home_url('/creer-une-alerte') ?>">Créer une alerte</a></li>
                                    <li><a class="dropdown-item" href="<?php echo home_url('/gerer-les-alertes') ?>">Voir mes alertes</a></li>
                                </ul>
                            </li>
                        <?php endif;

                        if (in_array('administrator', $user_info->roles) || in_array('secretaire', $user_info->roles)) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarInformationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Utilisateurs
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarInformationsDropdown">
                                    <li><a class="dropdown-item" href="<?php echo home_url('/creer-utilisateur') ?>">Créer un utilisateur</a></li>
                                    <li><a class="dropdown-item" href="<?php echo home_url('/users/list') ?>">Voir les utilisateurs</a></li>
                                </ul>
                            </li>
                        <?php endif;

                        if (in_array('administrator', $user_info->roles)) : ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo home_url('/gestion-codes-ade') ?>">Code ADE</a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <?php
                    // Affichage du nom d'utilisateur et du lien de déconnexion pour les utilisateurs connectés.
                    $current_user = wp_get_current_user();
                    if (!in_array('television', $current_user->roles)) :
                        ?>
                        <ul class="navbar-nav d-flex">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_title("Mon compte"))); ?>"><?php echo wp_get_current_user()->user_login; ?></a>
                            </li>
                            <li class="nav-item active my-2 my-lg-0">
                                <a class="nav-link" href="<?php echo wp_logout_url(get_home_url()); ?>">Déconnexion</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                <?php else : ?>
                    <!-- Affichage du lien de connexion pour les utilisateurs non connectés. -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo wp_login_url(get_home_url()); ?>">Connexion</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>
    </header>
<?php endif; ?>

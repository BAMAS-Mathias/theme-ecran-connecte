<?php
/**
 * Ce code génère la structure HTML de base d'une page web.
 * Il inclut la déclaration DOCTYPE, les balises <head>, le corps de la page,
 * et il masque la barre d'administration WordPress pour les utilisateurs connectés.
 */

// Début du document HTML.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <?php
    // Masque la barre d'administration WordPress pour les utilisateurs connectés.
    add_filter('show_admin_bar', '__return_false');

    // Inclusion des scripts et des styles WordPress.
    wp_head();
    ?>
</head>

<!-- BODY -->
<?php
// Récupération de l'utilisateur actuel.
$current_user = wp_get_current_user();
?>

<body>
<main class="main dark">
    <!-- Le contenu principal de la page va ici -->
</main>
</body>
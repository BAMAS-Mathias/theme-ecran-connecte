<?php
/**
 * Ce code génère la structure HTML de base d'une page web.
 * Il inclut la déclaration DOCTYPE, les balises <head>, le corps de la page,
 * et fait référence à la police Google Fonts "Lato".
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

    <!-- Préconnexion aux serveurs Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Inclusion de la police Google Fonts "Lato" avec différentes épaisseurs de poids -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<!-- BODY -->
<body <?php body_class(); ?> style="overflow: hidden;">
<!-- Le contenu principal de la page va ici -->
</body>
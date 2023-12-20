<?php ?>

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
<?php $current_user = wp_get_current_user();
if(in_array('television', $current_user->roles)) : ?>
<body class="body_television_ecran" <?php body_class(); ?>>
<?php else: ?>
<body <?php body_class(); ?>>
<?php endif; ?>

<!-- HEADER -->
<?php $current_user = wp_get_current_user();
if(!in_array('television', $current_user->roles)) : ?>
    <header class="text-white" style="background-color: #1476c6;">
        <div class="header-bg">
            <div class="header">
                <img src="https://iut.univ-amu.fr/themes/amu/amu_iut/logo.svg" alt="logo-iut">
                <h1 id="titre-header">ACCUEIL</h1>
                <h1> </h1>
            </div>
        </div>
    </header>
<?php endif; ?>

<?php
/**
 * Ce code génère une page de contenu WordPress avec la possibilité d'afficher les articles et leurs commentaires.
 * Il utilise les fonctions de base de WordPress pour afficher les articles et gérer la navigation entre eux.
 */

// Inclut le fichier d'en-tête de WordPress.
get_header();

// Débute la section principale du contenu.
echo '
<main id="content">
    <section>';

// Vérifie s'il y a des articles à afficher.
if (have_posts()) {
    while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>
            <div class="post_content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
    <div class="comments-template"> <?php comments_template(); ?> </div>
    <?php previous_post_link() ?><?php next_post_link();
} else {
    // Affiche un message si aucun article ne correspond aux critères.
    echo '<p>Désolé, aucun article ne correspond à vos critères.</p>';
}

// Termine la section principale du contenu.

echo '
    </section>
</main>';

// Inclut le fichier de pied de page de WordPress.
get_footer();

// Termine le document HTML.
echo '
    </body>
</html>';
<?php
/**
 * Ce code génère la structure HTML d'une page web avec un en-tête, un contenu principal et un pied de page.
 * Il affiche une liste d'articles provenant de la boucle WordPress.
 */

// Inclusion de l'en-tête de la page.
get_header(); ?>

    <!-- MAIN -->
    <main class="container">
        <section class="content-area content-thin">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="article-loop">
                    <header>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        By: <?php the_author(); ?>
                    </header>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; else : ?>
                <article>
                    <p>Aucun article trouvé !</p>
                </article>
            <?php endif; ?>
        </section>
        <?php get_sidebar(); ?>
    </main>

    <!-- Inclusion du pied de page -->
<?php get_footer(); ?>
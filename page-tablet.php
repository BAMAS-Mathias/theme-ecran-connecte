<?php
/**
 * Ce code génère une page web avec un en-tête, une barre latérale, une section de contenu, et un pied de page pour une version tablette.
 * Il inclut un champ de recherche avec des suggestions.
 */

// Inclusion de l'en-tête de la page pour la version tablette.
get_header( 'tablet' ); ?>

<?php // Inclusion de la barre latérale spécifique à la tablette.
get_sidebar('tablet'); ?>

    <section class="content">
        <header class="tablet">
            <div class="content">
                <div class="input-container">
                    <div class="icon">
                        <!-- Icône de recherche -->
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <!-- Le contenu de l'icône de recherche -->
                        </svg>
                    </div>
                    <input id="search" name="search" type="text" placeholder="Recherchez des utilisateurs, des groupes" autoComplete="off" />
                </div>
                <ul class="searchbar-suggestions">
                    <!-- Liste des suggestions de recherche -->
                </ul>
                <div class="no-suggestions" style="display: none;">
                    <em>Aucune suggestion disponible.</em>
                </div>
            </div>
        </header>
        <!-- Contenu principal -->
        <div class="container">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <script>
            // Définition de la variable HOST pour l'utilisation dans le script JavaScript.
            const HOST = location.protocol + '//' + location.hostname + '<?php echo URL_PATH ?>';
        </script>
    </section>

<?php // Inclusion du pied de page spécifique à la tablette.
get_footer('tablet'); ?>
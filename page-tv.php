<?php
/**
 * Ce code génère une page web spécifique pour la télévision avec un en-tête, une section principale de contenu, une barre latérale, et un pied de page.
 */

// Inclusion de l'en-tête spécifique pour la télévision.
get_header('tv'); ?>

    <!-- MAIN -->
    <main>
        <div class="px-0 container-fluid" style="background-color: #F2EFF2 !important;">
            <div class="flex-row my-4 position-sticky col col-9 d-flex align-items-center" style="z-index:1000;background-color: #F2EFF2;top: 0;">
                <!-- Logo Aix-Marseille -->
                <img style="padding-left: 3.5rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/aixmarseille.png" width="auto" height="70px" alt="Logo Aix-Marseille" />

                <!-- Affichage de l'heure -->
                <span id="time">00:00</span>
                <!-- Affichage de la date -->
                <span id="date" class="ps-2 text-muted">Jeudi<br />1er Janvier 1970</span>
            </div>
            <div class="row flex-nowrap">
                <section class="px-5 py-5 col col-9">
                    <?php the_content(); ?>
                    <?php // Affichage du widget d'alerte ?>
                    <?php the_widget('WidgetAlert'); ?>
                </section>
                <?php // Inclusion de la barre latérale spécifique pour la télévision ?>
                <?php get_sidebar('tv'); ?>
            </div>
        </div>
    </main>

<?php // Inclusion du pied de page spécifique pour la télévision ?>
<?php get_footer('tv'); ?>
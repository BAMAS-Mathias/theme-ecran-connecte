<?php
/**
 * Ce code génère une ou deux barres latérales (selon les préférences de l'utilisateur) à droite et/ou à gauche du contenu principal.
 * Les barres latérales contiennent des widgets ou un widget d'information par défaut si aucune sidebar dynamique n'est disponible.
 */

// Vérifie si l'affichage de la barre latérale droite est activé dans les réglages du thème.
if (get_theme_mod('sidebar_right_display', 'show') == 'show') : ?>
    <!-- SIDEBAR DROITE -->
    <aside id="sidebar" class="col-md-4 order-md-3 text-center sidebar" role="complementary">
        <?php
        // Vérifie si une sidebar dynamique est disponible et l'affiche, sinon affiche un widget d'information par défaut.
        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Colonne Droite')) :
            the_widget('WidgetInformation');
        endif;
        ?>
    </aside>
<?php endif; ?>

<?php
// Vérifie si l'affichage de la barre latérale gauche est activé dans les réglages du thème.
if (get_theme_mod('sidebar_left_display', 'hide') == 'show') : ?>
    <!-- SIDEBAR GAUCHE -->
    <aside id="sidebar" class="col-md-4 order-md-1 text-center sidebar" role="complementary">
        <?php
        // Vérifie si une sidebar dynamique est disponible et l'affiche, sinon affiche un widget d'information par défaut.
        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Colonne Gauche')) :
            the_widget('WidgetInformation');
        endif;
        ?>
    </aside>
<?php endif; ?>
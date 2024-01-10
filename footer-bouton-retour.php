<?php ?>
<!-- FOOTER -->
<style>
    body{
        overflow-x: hidden;
    }
    #fleche-icon {
        max-width: 6vw;
    }

    .container-retour {
        position: absolute;
        right: 0;
    }
</style>
<footer >
    <div class="container-retour">
        <a onclick="history.back()">
            <img id="fleche-icon" src='/wp-content/themes/theme-ecran-connecte/assets/images/en-arriere.png'>
            <h3 id="texte"> RETOUR </h3>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

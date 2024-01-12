<?php ?>
<!-- FOOTER -->
<style>
    body{
        overflow-x: hidden;
    }

    main{
        display: flex;
        flex-direction: column;
    }

    #fleche-icon {
        max-width: 3vw;
    }

    .container-retour {
        display: flex;
        justify-content: flex-end;
        padding-right: 10%;
        padding-bottom: 5%;
    }
</style>
<footer >
    <div class="container-retour">
        <a onclick="history.back()">
            <img id="fleche-icon" src='/wp-content/themes/theme-ecran-connecte/assets/images/en-arriere.png'>
            <h6 id="texte"> RETOUR </h6>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
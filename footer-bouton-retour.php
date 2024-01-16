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
        justify-content: space-between;
        padding-bottom: 5%;
        width: 80vw;
        margin: 0 auto;
    }

</style>
<div class="container-retour">
    <a href="https://ecran1.alwaysdata.net/secretary/config/">
        <img id="fleche-icon" src='/wp-content/themes/theme-ecran-connecte/assets/images/Option.png'>
        <h6 id="texte"> OPTION </h6>
    </a>
    <a onclick="history.back()">
        <img id="fleche-icon" src='/wp-content/themes/theme-ecran-connecte/assets/images/en-arriere.png'>
        <h6 id="texte"> RETOUR </h6>
    </a>
</div>
</footer>
<?php wp_footer(); ?>

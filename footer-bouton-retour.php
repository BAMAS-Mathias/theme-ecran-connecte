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
        padding-right: 5vw;
        padding-bottom: 5%;
    }

    .container-retour a{
        cursor: pointer;
        transition: all 0.15s ease;
    }
    .container-retour a:hover{
        transform: scale(1.1);
    }

</style>
<footer >
    <div class="container-retour">
        <a onclick="history.back()">
            <img id="fleche-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/en-arriere.png" alt="Logo retour">
            <h6 id="texte"> RETOUR </h6>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

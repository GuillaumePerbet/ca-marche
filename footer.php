<!-- no footer in 404 page -->
<?php if (!is_404()){ ?>

    <footer>
        <div class="container">
            <div class="row">

                <!-- logo -->
                <div class="col-4 col-md-2">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo avec le texte 'ça marche' en dessous d'un dessin de montagne" width="200" height="200">
                </div>

                <!-- author -->
                <div class="col-4">
                    <p><i class="fas fa-feather-alt"></i> Guillaume Perbet</p>
                    <p class="display-md"><a href="https://guillaumeperbet.fr" target="_blank" rel="noopener noreferrer">www.guillaumeperbet.fr</a></p>
                    <p class="display-md"><i id="github" class="fab fa-github-square"></i> &nbsp; <i id="linkedin" class="fab fa-linkedin"></i></p>
                </div>

                <!-- context -->
                <div class="col-4 display-md">
                    <p><i class="fas fa-graduation-cap"></i> Access Code School</p>
                    <p><i class="fas fa-map-pin"></i> &nbsp;&nbsp; Besançon</p>
                    <p><i class="fas fa-calendar-alt"></i> &nbsp; Septembre 2020</p>
                </div>

                <!-- terms -->
                <div class="col-4 col-md-2">
                    <p class="text-center">Politique de confidentialité</p>
                </div>

            </div>
        </div>
    </footer>

<?php } ?>

<!-- load scripts -->
<?php wp_footer(); ?>

</body>
</html>
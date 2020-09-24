<?php get_header(); ?>

<main id="page404">
    <div class="container">

        <!-- logo with home link -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-xl-4 offset-xl-4">
                <a href="<?php echo home_url( '/' ); ?>">
                    <img class="size-image" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo avec le texte 'ça marche' en dessous d'un dessin de montagne" width="200" height="200">
                </a>
            </div>
        </div>
    
        <!-- text -->
        <div class="row">
            <div class="col-12 col-xl-8 offset-xl-2">
                <h1>SENTIER NON BALISÉ</h1>
                <p class="text">La page demandée n’existe pas</p>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
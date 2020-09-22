<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <!-- utiliser l'image de mise en avant pour le background -->

    <!-- logo with home link -->
    <a href="<?php echo home_url( '/' ); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo avec le texte 'ça marche' en dessous d'un dessin de montagne" width="200" height="200">
    </a>

    <!-- text -->
    <h1><?php the_content() ?></h1>
    <p>La page demandée n’existe pas</p>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
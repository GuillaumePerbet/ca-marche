<?php get_header(); ?>

<!-- logo -->
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo avec le texte 'ça marche' en dessous d'un dessin de montagne" width="200" height="200">

<!-- Titre de la page dans wp-admin-->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <h1><?php the_title(); ?></h1>

    <!-- utiliser l'image de mise en avant pour le background -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
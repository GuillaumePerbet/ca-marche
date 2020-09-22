<?php get_header(); ?>

<!-- logo -->
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">

<!-- Titre de la page dans wp-admin-->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <h1><?php the_title(); ?></h1>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
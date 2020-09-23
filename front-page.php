<?php get_header(); ?>

<!-- logo -->
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo avec le texte 'ça marche' en dessous d'un dessin de montagne" width="200" height="200">

<!-- wp loop -->
<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
    <!-- title from wp -->
    <h1><?php the_title(); ?></h1>
<?php }} ?>

<?php get_footer(); ?>
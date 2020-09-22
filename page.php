<?php get_header(); ?>

<!-- Ajout du menu des catégories -->
<?php
    if (has_nav_menu('category-menu')){
        wp_nav_menu(
            array(
                'theme_location' => 'category-menu',
                'menu_class' => 'category-menu'
            )
        );
    }
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
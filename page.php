<?php get_header(); ?>

<main>
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        <h1><?php the_title(); ?></h1>

        <div>
        <h1><?php the_content(); ?></h1>
        </div>
    <?php }} ?>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main id="terms">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                    <h1><?php the_title(); ?></h1>
            
                    <div><?php the_content(); ?></div>
                <?php }} ?>
            </dic>
        </div>
    </div>
</main>

<?php get_footer(); ?>
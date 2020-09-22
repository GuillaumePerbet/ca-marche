<?php get_header(); ?>

<!-- header bar -->

<!-- category menu -->
<nav>
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
</nav>

<!-- boucle sur tous les posts -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <h2><?php the_title(); ?></h2>
    
        <?php if ( has_post_thumbnail() ): ?>
            <div class="post__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        
        <p class="post__meta">
            Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
            par <?php the_author(); ?> • <?php comments_number(); ?>
        </p>
        
        <?php the_excerpt(); ?>
            
        <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>
    </article>

<?php endwhile; endif; ?>

<!-- footer bar -->

<?php get_footer(); ?>
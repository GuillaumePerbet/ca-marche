<?php get_header(); ?>

<main>

    <!-- category menu -->
    <!-- ajouter le bouton actif si on est dans une page catégorie is_category()? -->
    <nav id="category">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                        if (has_nav_menu('category')){
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'category',
                                    'container' => 'ul'
                                )
                            );
                        }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- wp loop -->
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

        <article>

            <!-- title -->
            <h2>
                <?php the_title(); ?>
            </h2>
        
            <!-- image -->
            <?php if ( has_post_thumbnail() ){ ?>
                <div>
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php } ?>
            
            <!-- content -->
            <p>
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
            <p>
                <?php the_excerpt(); ?>
            </p>

            <p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </article>

    <?php }} ?>

</main>

<?php get_footer(); ?>
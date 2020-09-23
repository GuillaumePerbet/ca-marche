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

    <section id="blog">
        <div class="container">
            <div class="row">
                <!-- wp loop -->
                <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        
                <div class="col-12 col-md-6 col-xl-4">
                    <article>
            
                        <!-- image -->
                        <?php if ( has_post_thumbnail() ){ ?>
                            <div class="image">
                                <?php the_post_thumbnail(); ?>
                                <p class="tag"><?php the_tags(''); ?></p>
                            </div>
                        <?php } ?>

                        <!-- content -->
                        <div class="post-content">
                            <!-- title -->
                            <h2>
                                <?php the_title(); ?>
                            </h2>

                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
            
                        
                        
                        <!-- date -->
                        <p>
                            <?php the_time( get_option( 'date_format' ) ); ?>
                        </p>
                        
                        
            
                        <p>
                            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                        </p>
                    </article>
                </div>
        
                <?php }} ?>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>
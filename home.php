<?php get_header(); ?>

<main id="blog">

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

    <section>
        <div class="container">
            <div class="row">
                <!-- wp loop -->
                <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        
                <div class="col-12 col-md-6 col-xl-4">
                    <?php get_template_part('parts/article'); ?>
                </div>
        
                <?php }} ?>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main id="blog">

    <section>

        <!-- category menu -->
        <!-- ajouter le bouton actif si on est dans une page catégorie is_category()? -->
        <header>
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
        </header>

        <section>
            <div class="container">
    
                <!-- title -->
                <div class="row">
                    <div class="col">
                        <header>
                            <h1 class="title">Mes plus belles randos</h1>
                        </header>
                    </div>
                </div>
    
                <div class="row">
                    
                    <!-- loop on posts and get articles -->
                    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                        <div class="col-12 col-md-6 col-xl-4">
                            <?php get_template_part('parts/article'); ?>
                        </div>
                    <?php }} ?>
    
                </div>
            </div>
        </section>

    </section>

</main>

<?php get_footer(); ?>
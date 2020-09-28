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

            <!-- add active class to menu item -->
            <?php if( is_category('jura') ){ ?>
                <script>
                    activateJura();
                </script>
            <?php } ?>

            <?php if( is_category('france') ){ ?>
                <script>
                    activateFrance();
                </script>
            <?php } ?>

            <?php if( is_category('etranger') ){ ?>
                <script>
                    activateEtranger();
                </script>
            <?php } ?>
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

                <!-- pagination -->
                <div class="row">
                    <div class="col col-md-6 offset-md-3 col-xl-4 offset-xl-4">
                        <div id="pagination"><?php posts_nav_link(); ?></div>
                    </div>
                </div>
            </div>
        </section>

    </section>

</main>

<?php get_footer(); ?>
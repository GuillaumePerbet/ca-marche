<?php get_header(); ?>

<main id="home">

    <section id="hero">
        <div class="container">
    
            <div class="row">

                <!-- logo -->
                <div class="col-8 offset-2 col-sm-6 offset-sm-3 col-md-4 offset-md-0">
                    <p><img class="size-image" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo avec le texte 'ça marche' en dessous d'un dessin de montagne" width="200" height="200"></p>
                </div>
            
                <!-- title -->
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 offset-md-0 col-lg-6 offset-lg-1">
                    <header>
                        <h1>
                            <span>mes</span>
                            <span>plus</span>
                            <span>belles</span>
                            <span>randos</span>
                        </h1>
                    </header>
                </div>

            </div>

            <!-- blog link -->
            <div class="row">
                <div class="col-4">
                    <p class="blog-link display-none-md"><a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>"><i class="fas fa-arrow-circle-right"></i> Blog</a></p>
                </div>
            </div>

        </div>
    </section>
    
    <section class="display-md">

        <div class="container">
            <!-- title -->
            <div class="row">
                <div class="col">
                    <h2 class="title">Les derniers articles</h2>
                </div>
            </div>
    
            <div class="row">

                <!-- query last posts -->
                <?php
                $wp_query = new WP_Query(
                    array(
                        'posts_per_page' => 3
                    )
                );
                ?>
                
                <!-- first post -->
                <?php $wp_query->the_post(); ?>
                <div class="col-md-6 col-xl-4 display-md">
                    <?php get_template_part('parts/article'); ?>
                </div>

                <!-- second post -->
                <?php $wp_query->the_post(); ?>
                <div class="col-md-6 col-xl-4 display-md">
                    <?php get_template_part('parts/article'); ?>
                </div>

                <!-- third post -->
                <?php $wp_query->the_post(); ?>
                <div class="col-xl-4 display-xl">
                    <?php get_template_part('parts/article'); ?>
                </div>

                <?php wp_reset_postdata(); ?>
                        
            </div>
    
    
            <!-- blog link -->
            <div class="row">
                <div class="col">
                    <p class="blog-link" class="display-none-md"><a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>"><i class="fas fa-arrow-circle-right"></i> Blog</a></p>
                </div>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>
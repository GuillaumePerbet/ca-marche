<?php get_header(); ?>

<main id="single">

    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
    <article >

        <!-- image -->
        <?php if ( has_post_thumbnail() ){ ?>
            <div class="image">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php } ?>

        <div id="category">
            <!-- tag -->
            <p><?php the_tags(''); ?></p>

            <!-- category -->
            <p><?php the_category(' '); ?></p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- title -->
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!-- excerpt -->
                    <div class="text">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            
            <!-- technic -->
            <div class="row">

                <!-- title -->
                <div class="col-12">
                    <h3>
                        FICHE TECHNIQUE
                    </h3>
                </div>

                <!-- description -->
                <div class="col-4 col-xl-2 offset-xl-4">
                    <p class="text technic"><i class="fas fa-clock"></i> 2 jours</p>
                </div>

                <div class="col-4 col-xl-2">
                    <p class="text technic"><i class="fas fa-mountain"></i> 830m</p>
                </div>

                <div class="col-4 col-xl-8 offset-xl-2 map">
                    <p class="text technic display-none-xl"><i class="fas fa-map-marked-alt"></i> carte</p>
                    <p class="display-xl"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" alt="itinéraire sur une carte"></p>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <!-- content -->
                    <h3>
                        RÉCIT COMPLET
                    </h3>

                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        </div>
    </article>
    <?php }} ?>
</main>

<?php get_footer(); ?>
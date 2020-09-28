<?php get_header(); ?>

<main id="single">

    <!-- get the_post -->
    <?php if( have_posts() ){ the_post(); ?>

    <article >

        <header>

            <!-- image -->
            <?php if ( has_post_thumbnail() ){ ?>
                <div class="size-image-parent"><?php the_post_thumbnail(); ?></div>
            <?php } ?>
    
            <div id="category">
    
                <!-- tag -->
                <p><?php the_tags(''); ?></p>
    
                <!-- category -->
                <p><?php the_category(' '); ?></p>
    
            </div>

        </header>

        <section>
            <div class="container">

                <!-- post title -->
                <div class="row">
                    <div class="col">
                        <header>
                            <h1 class="title"><?php the_title(); ?></h1>
                        </header>
                    </div>
                </div>
    
                <!-- excerpt -->
                <div class="row">
                    <div class="col">
                        <div class="text"><?php the_field('excerpt'); ?></div>
                    </div>
                </div>
                
                <!-- technic section -->
                <section>

                    <!-- section title -->
                    <div class="row">
                        <div class="col">
                            <header>
                                <h2 class="subtitle">FICHE TECHNIQUE</h2>
                            </header>
                        </div>
                    </div>
        
                    <!-- description -->
                    <div class="row">
                        
                        <!-- duration -->
                        <div class="col-4 col-xl-2 offset-xl-4">
                            <p class="text technic"><i class="fas fa-clock"></i> <?php the_field('duration'); ?></p>
                        </div>
        
                        <!-- elevation -->
                        <div class="col-4 col-xl-2">
                            <p class="text technic"><i class="fas fa-mountain"></i> <?php the_field('elevation'); ?>m</p>
                        </div>
        
                        <!-- map -->
                        <div class="col-4 col-xl-8 offset-xl-2 map">
                            <p class="text technic display-none-xl"><a href="<?php the_field('map'); ?>" target="_blank"><i class="fas fa-map-marked-alt"></i> carte</a></p>
                            <p class="display-xl"><img class="size-image" src="<?php the_field('map') ?>" alt="itinéraire sur une carte"></p>
                        </div>
        
                    </div>

                </section>

                <!-- content section -->
                <section>

                    <!-- section title -->
                    <div class="row">
                        <div class="col">
                            <header>
                                <h2 class="subtitle">RÉCIT COMPLET</h2>
                            </header>
                        </div>
                    </div>

                    <!-- content -->
                    <div class="row">
                        <div class="col">
                            <div class="text"><?php the_content(); ?></div>
                        </div>
                    </div>

                </section>
    
            </div>
        </section>
    </article>
    <?php } ?>
</main>

<?php get_footer(); ?>
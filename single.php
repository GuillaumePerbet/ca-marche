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
                    <p class="text">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
    
            <!-- content -->
            <p>
                Publié le <?php the_date(); ?>
                par <?php the_author(); ?>
                Dans la catégorie <?php the_category(); ?>
                Avec les étiquettes <?php the_tags(); ?>
            </p>
    
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </article>
    <?php }} ?>
</main>

<?php get_footer(); ?>
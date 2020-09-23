<?php get_header(); ?>

<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

    <article>

        <!-- image -->
        <?php if ( has_post_thumbnail() ){ ?>
            <div>
                <?php the_post_thumbnail(); ?>
            </div>
        <?php } ?>

        <!-- title -->
        <h1>
            <?php the_title(); ?>
        </h1>

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
    </article>

<?php }} ?>

<?php get_footer(); ?>
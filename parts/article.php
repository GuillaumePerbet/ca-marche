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

        <!-- excerpt -->
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        
    </div>

    <div class="container-fluid post-footer">
        <div class="row">

            <!-- category -->
            <div class="col-4">
                <p><?php the_category(' ') ?></p>
            </div>

            <!-- date -->
            <div class="col-4">
                <p><?php the_time( get_option( 'date_format' ) ); ?></p>
            </div>

            <!-- link -->
            <div class="col-4">
                <p><a class="post-link" href="<?php the_permalink(); ?>"><i class="fas fa-eye"></i> article</a></p>
            </div>

        </div>
    </div>
    
</article>
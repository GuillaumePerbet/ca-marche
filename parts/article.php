<article class="card">

    <header class="size-image-parent">
        <!-- check if image is present -->
        <?php if ( has_post_thumbnail() ){ ?>

            <!-- image -->
            <?php the_post_thumbnail(); ?>
            
            <!-- tag -->
            <p class="tag"><?php the_tags(''); ?></p>

        <?php } ?>
    </header>

    <!-- content -->
    <section class="post-content">

        <!-- title -->
        <header>
            <h3><?php the_title(); ?></h3>
        </header>

        <!-- excerpt -->
        <div class="excerpt"><?php the_field('excerpt'); ?></div>

    </section>

    <footer>
        <div class="container-fluid">
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
                    <p><a class="link" href="<?php the_permalink(); ?>"><i class="fas fa-eye"></i> article</a></p>
                </div>
    
            </div>
        </div>
    </footer>
    
</article>
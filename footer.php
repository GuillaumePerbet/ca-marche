<!-- no footer in 404 page -->
<?php if (!is_404()){ ?>

    <?php
    //query user data
    $user = get_userdata(wp_get_current_user()->ID);


    ?>

    <footer>
        <div class="container">
            <div class="row">

                <!-- logo -->
                <div class="col-4 col-md-2">
                   <div class="footer-items">
                       <img class="size-image" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo du site" width="200" height="200">
                    </div>
                </div>

                <!-- author -->
                <div class="col-4">
                    <div class="footer-items">
                        <p>
                            <?= $user->first_name ?> 
                            <?= $user->last_name ?>
                        </p>
                        <p class="display-md"><a href="<?= $user->user_url ?>" target="_blank" rel="noopener noreferrer"><?= $user->user_url ?></a></p>
                        <p class="social">
                            <a href="<?= $user->github ?>" target="_blank" rel="noopener noreferrer"><i id="github" class="fab fa-github-square"></i></a>
                            &nbsp; 
                            <a href="<?= $user->linkedin ?>" target="_blank" rel="noopener noreferrer"><i id="linkedin" class="fab fa-linkedin"></i></a>
                            &nbsp; 
                            <a href="<?= $user->facebook ?>" target="_blank" rel="noopener noreferrer"><i id="facebook" class="fab fa-facebook-square"></i></a>
                            &nbsp; 
                            <a href="<?= $user->twitter ?>" target="_blank" rel="noopener noreferrer"><i id="twitter" class="fab fa-twitter-square"></i></a>
                        </p>
                    </div>
                </div>

                <!-- context -->
                <div class="col-4 display-md">
                    <div class="footer-items">
                        <p><i class="fas fa-graduation-cap"></i> <?= $user->company ?></p>
                        <p><i class="fas fa-map-pin"></i> &nbsp;&nbsp; <?= $user->city ?></p>
                        <p><i class="fas fa-calendar-alt"></i> &nbsp; <?= $user->date ?></p>
                    </div>
                </div>

                <!-- terms -->
                <div class="col-4 col-md-2">
                    <div class="footer-items">
                        <p class="display-md"><i class="fas fa-feather-alt"></i> Guillaume Perbet</p>
                        <p><a href="<?php echo get_permalink(get_page_by_title('Politique de confidentialité')); ?>">Politique de confidentialité</a></p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

<?php } ?>

<!-- load scripts -->
<?php wp_footer(); ?>

</body>
</html>
<!-- header menu -->
<header>
    <?php
        if (has_nav_menu('header-menu')){
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'header-menu'
                )
            );
        }
    ?>
</header>
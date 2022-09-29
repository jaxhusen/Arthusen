<header>
    <?php
    $site_title = get_bloginfo('name');
    $site_url = network_site_url('/');
    ?>

    <a href="<?php echo $site_url; ?>">
        <h1>
            <?php echo $site_title ?>
        </h1>
    </a>

    <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
    )); ?>
</header>
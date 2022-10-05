<?php
get_header();
?>


<div class="search-container">
    <h2 class="search-title"><?php the_title(); ?></h2>

    <div class="search-form">
        <div class="search-vad"> Vad letar du efter? </div>
        <div class="search-field"><?= get_search_form(); ?></div>
    </div>

    <?php
    if (have_posts()) : ?>

        <?php
        while (have_posts()) : the_post(); ?>
        <?php
        endwhile; ?>
    <?php
    endif;
    ?>
</div>

<?php
get_footer();

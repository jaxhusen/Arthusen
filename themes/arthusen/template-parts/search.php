<?php
get_header();
?>

<div class="search-form">
    <div class="search-vad"> Vad söker du efter? </div>
    <div class="search-field"><?= get_search_form(); ?></div>
</div>

<div class="search-container">


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

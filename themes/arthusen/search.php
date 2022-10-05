<?php
get_header();
?>

<?= get_search_form(); ?>

<?php
if (have_posts()) : ?>

<?php
while (have_posts()) : the_post(); ?>
        <?php the_title(); ?>
        <?php the_permalink(); ?>
        <?php the_
        <?php the_content(); ?>

<?php
    endwhile; ?>
    <?php
endif;
?>

<?php
get_footer();
<?php
get_header();
?>
inlägg
<?php

$the_query = new WP_Query(array(
    'post_per_page' => 100,
));
?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
 
    <?php get_template_part('template-parts/post-block'); ?>

 <?php endwhile; ?>

 <?php wp_reset_postdata(); ?>



<?php endif; ?>

<?php 

get_footer();
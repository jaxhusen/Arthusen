
<?php
get_header();
?>

<?php
$my_id = 278;
$post_id_278 = get_post($my_id);
$content = $post_id_278->post_content;
$content = apply_filters('the_content', $content);
?>

<div class="indexpost"> <?php echo $content; ?></div>

<?php

$the_query = new WP_Query(array(
    'post_per_page' => 6,
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
<?php
$args = array(
    'post_type' => 'butiker',
    'post_status' => 'publish',
);
$loop = new WP_Query($args);
?>


<div class="butiker">

<?php
if($loop->have_posts()) : ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <?php get_template_part('template-parts/butiker-cards');?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
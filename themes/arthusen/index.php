<?php
get_header();
?>
<div class="index-content">


    <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/post-block'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        
</div>
<?php
get_footer();


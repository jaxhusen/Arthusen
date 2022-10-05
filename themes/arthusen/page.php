hej page.php 
<?php get_header(); ?>


<div class="content">
    <img src="<?php the_post_thumbnail_url("post_image") ?>" alt="">
   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; else: endif; ?>
</div>

<!-- Ifall man klickat på search sidan så visar den nyheterna -->
<?php if (is_page('259')) : ?>
<div>
<?php get_template_part('template-parts/search'); ?>
</div>
<?php endif; ?>

<?php
get_footer();



<?php get_header(); ?>

<div class="content">
    <img src="<?php the_post_thumbnail_url("post_image") ?>" alt="">
   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; else: endif; ?>
</div>

<!-- Ifall man klickat på search sidan så visar den: -->
<?php if (is_page('259')) : ?>
<div>
<?php get_template_part('template-parts/search-template'); ?>
</div>
<?php endif; ?>


<!-- Ifall man klickat på myaccount så visar den: -->
<?php if (is_page('38')) : ?>
<div>
<?php get_template_part('template-parts/my-account'); ?>
</div>
<?php endif; ?>

<?php
get_footer();


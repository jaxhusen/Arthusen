<?php get_header(); ?>

<div class="content">

    <img src="<?php the_post_thumbnail_url("post_image") ?>" alt="">


    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; else: endif; ?>
</div>

<?php get_footer(); ?>
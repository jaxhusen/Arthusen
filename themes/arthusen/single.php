<?php get_header(); ?>

<div class="content">

        <?php if(has_post_thumbnail()): ?>
            <img src="<?= the_post_thumbnail("post_url") ?>" alt="">
        <?php endif; ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; else: endif; ?>
</div>

<?php get_footer(); ?>
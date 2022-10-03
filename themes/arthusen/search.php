<?php
get_header();

if(have_posts()) :
    ?>

    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-part')
<?php
    endif;
    get_footer();
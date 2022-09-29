<?php
get_header();
?>

<div class="page-content">
    <?php
    if (get_field('show_heading')) :
    ?>
        <h1 class="header-text"> <?php the_field('header'); ?> </h1>
        <?php
        $image = get_field('header_img');
        $size = 'full';
        if($image){
            echo wp_get_attachment_image($image, $size);
        }
?>
<?php endif; ?>

    <?php the_content(); ?>

</div>

 <!-- Ifall de är första sidan så visar den nyheterna -->
<?php if (is_front_page()) : ?>
 <div>
<?php get_template_part('template-parts/news-template'); ?>
 </div>
<?php endif; ?>

<?php
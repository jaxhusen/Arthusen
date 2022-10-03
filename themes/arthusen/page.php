<?php
get_header();
?>
PAGEEEEEE
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

<?php
get_footer();
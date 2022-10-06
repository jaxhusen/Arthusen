hej wocoommerce.php 
<?php
get_header();
?>

    <?php
    if (is_product_category()) {
    ?>
        
       
    <?php
    } ?>
<?php woocommerce_content(); ?>



<?php get_footer(); ?>


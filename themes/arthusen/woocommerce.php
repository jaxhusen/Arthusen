hej wocoommerce.php
<?php
get_header();
?>
<div class="endiv"> 
<?php
    if (is_product_category()) {
    ?>
        <h1 class="omh1">Show categories</h1>

    <?php
    } ?>
<?php woocommerce_content(); ?>

</div>

<?php get_footer(); ?>


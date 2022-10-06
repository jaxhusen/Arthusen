hej wocoommerce.php
<?php
get_header();
?>

<?php woocommerce_content(); ?>


    <?php
    if (is_product_category()) {
    ?>
        <h1 class="omh1">Show categories</h1>

    <?php
    } ?>
<?php woocommerce_content(); ?>

</div>

<?php get_footer(); ?>


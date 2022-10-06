hej wocoommerce.php
<?php
get_header();
?>

<?php woocommerce_content(); ?>


    <?php
    if (is_product_category()) {
    ?>
        <h1>Show categories</h1>

    <?php
    } ?>
</div>

<?php get_footer(); ?>


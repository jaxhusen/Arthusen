hej wocoommerce.php
<?php
get_header();
?>

<h1>Mina sidor</h1>
<h3>Orderhistorik</h3>
<?php woocommerce_content(); ?>


    <?php
    if (is_product_category()) {
    ?>
        <h1>Show categories</h1>

    <?php
    } ?>
</div>

<?php get_footer(); ?>


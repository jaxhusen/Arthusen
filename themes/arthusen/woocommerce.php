hej wocoommerce.php
<?php
get_header();
?>

<h1>Mina sidor</h1>
<h3>Orderhistorik</h3>

<div class="endiv">
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


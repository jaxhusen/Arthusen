<?php
get_header(); ?>
<!-- Gör så att länken på knappen är tillbaka till nyheter-sidan -->
<?php $back_link = network_site_url('/nyheter'); ?>

<div class="page-header-content">
    <h1 class="title"> <?php the_title(); ?> </h1>
    <h2> <?php the_date(); ?> </h2>

</div>

<div class="page-content">
    <?php the_content(); ?>
</div>
<!-- lägger till en knapp för att återgå till menyn -->
<div class="back-link">
    <a href="<?php echo $back_link; ?>" class="news-btn"> < Tillbaka till nyheter </a>
</div>

<?php

get_footer();
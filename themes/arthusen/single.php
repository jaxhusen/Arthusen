<?php
get_header(); ?>

<div class="page-header-content">
    <h1 class="title"> <?php the_title(); ?> </h1>
    <h2> <?php the_date(); ?> </h2>

</div>

<div class="page-content">
    <?php the_content(); ?>
</div>

<?php

get_footer();
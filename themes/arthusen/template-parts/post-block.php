<!-- Kod för att hämta alla posts--> 

<div class="post-block">

<a href="<?php the_permalink(); ?>" class="news-title"> <?php the_title(); ?> </a>

 <?php the_post_thumbnail('medium'); ?>

<span><?php the_time(get_option('date_format')); ?> </span>

<div>

    <?php the_excerpt(); ?>

</div>



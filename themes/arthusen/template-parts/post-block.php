<!-- Kod för att hämta alla posts--> 

<div class="post-block">
<div class="post-box">

 <?php the_post_thumbnail('medium'); ?>
 <a href="<?php the_permalink(); ?>" class="news-title"> <?php the_title(); ?> </a>
<div class="excerpt-block">
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="read-title"> Läs mer </a>

</div>
</div>


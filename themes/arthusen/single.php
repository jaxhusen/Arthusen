hej single.php hej
<?php
get_header(); ?>


<?php if (is_single()) : ?>
 <div>
<?php get_template_part('template-parts/single-block'); ?>
 </div>
<?php endif; ?>


<?php
get_footer();
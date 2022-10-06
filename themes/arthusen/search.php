<?php
get_header();
?>

<?= get_search_form(); ?>
<h1 class="resultat-title">Resultat</h1>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>

        <div class="resultat-container">
            <h3>Resultat</h3>
            <?php the_title(); ?>
            <?php the_content(); ?>
            <?php the_category(); ?>

            <h4 class="view-collection">VIEW COLLECTION</h4>
            <hr>
        </div>

<?php
    endwhile;
endif;
?>
</div>

<?php
get_footer();

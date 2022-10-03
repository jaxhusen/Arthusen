<div class="schack">

<?php 
$image = get_field('image'); 
$size = "full"; 

// Visar bild-headern ifall det finns någon med ACF
if($image) {
    echo wp_get_attachment_image($image, $size);
}
?>
<!-- Visar titel på sidan med ACF -->
    <div class="schack-content">
        <h1><?php the_field('heading')?></h1>
    </div>
</div>
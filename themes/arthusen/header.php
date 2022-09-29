<!-- Kod för att lägga in menyn i alla headers -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="wrapper-header">
    <?php get_template_part('template-parts/nav'); ?>

</div>
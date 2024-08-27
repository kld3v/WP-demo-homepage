<!DOCTYPE html>
<html style="margin-top: 0 !important;" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>


<?php


// ACF Fields
$logo = get_field('custom_logo');
$banner = get_field('custom_banner');
$banner_title = get_field('banner_title');
$banner_subheading = get_field('banner_subheading');
$banner_button_link = get_field('banner_button_link');

?>
<div class="banner" id="banner" style="background-image: url('<?php echo esc_url($banner['url']); ?>');">
  <img src="<?php echo esc_url($logo['url']); ?>" alt="Fifteen Ten Logo" />
        <div class="banner__overlay-items">
          <h1 class="inter-bold"><?php echo esc_html($banner_title); ?></h1>
          <h2 class="inter-regular"><?php echo esc_html($banner_subheading); ?></h2>
          <a href="<?php echo esc_url($banner_button_link); ?>" class="banner-button">Example Link
          <img id="banner__overlay-arrow-right" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/UpArrow.svg" />
             </a>
        </div>

</div>
<div class="content-section">
    <div class="content-grid">
        <div class="content-item ">
          <?php
          // Check if the WYSIWYG field has content
          $column_1_content = get_field('column_1');

          if ($column_1_content) :
              
              echo $column_1_content; // Output the content, includes both text and images
              
          endif;
          ?>
        </div>
        <div class="content-item">
        <?php
          // Check if the WYSIWYG field has content
          $column_1_content = get_field('column_2');

          if ($column_1_content) :
              
              echo $column_1_content; // Output the content, includes both text and images
              
          endif;
          ?>
        </div>
        <div class="content-item">
        <?php
          // Check if the WYSIWYG field has content
          $column_1_content = get_field('column_3');

          if ($column_1_content) :
              
              echo $column_1_content; // Output the content, includes both text and images
              
          endif;
          ?>
        </div>
    </div>
</div>

<footer class="site-footer">
    <p>This is an example footer</p>
    <img id="scrollToTop" src="<?php echo get_template_directory_uri(); ?>/assets/images/UpArrow.svg" alt="Upwards Facing Arrow">
</footer>


<script>
    document.getElementById('scrollToTop').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

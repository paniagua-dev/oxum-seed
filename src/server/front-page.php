<?php
get_header();
get_template_part('template-parts/section', 'header');

/** GET POST TYPE ARTWORKS **/
$args = array(
    'post_type' => 'artwork',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'DEC'
);
$loop = new WP_Query($args);
?>
<!-- CONTENT GOES HERE -->
<?php get_footer(); ?>

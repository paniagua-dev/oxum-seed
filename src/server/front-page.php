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
    <section class="section section-content shadow-lg">
        <?php include('inc/artowrks-loop.php'); ?>
        <div
            id="artwork-ui"
            class="artwork-ui container"
            uk-scrollspy="target: .portfolio > .item-in-view; cls: opacity; delay: 500"
            style="max-width: 1030px; margin: auto;"
        >
        </div>
    </section>
<?php get_footer(); ?>

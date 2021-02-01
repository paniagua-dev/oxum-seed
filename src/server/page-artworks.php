<?php
	get_header();
	get_template_part('template-parts/page/section', 'header');

	/** GET POST TYPE ARTWORKS **/
	$args = array(
		'post_type' => 'artwork',
		'post_status' => 'publish',
        'posts_per_page' => -1,
		'order' => 'DEC'
	);
	$loop = new WP_Query($args);
?>
<section id="firstSection" class="section section-content shadow-lg">
    <div class="container-md">
        <?php include('inc/artworks-loop.php'); ?>
        <div
            id="artwork-ui"
            class="artwork-ui container"
            uk-scrollspy="target: .portfolio > .item-in-view; cls: opacity; delay: 500"
            style="max-width: 1030px; margin: auto;"
        >
        </div>
    </div>
    <div class="container-md">
		<?php if(have_posts()) : while(have_posts()) :
			the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>

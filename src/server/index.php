<?php
	get_header();
	get_template_part('template-parts/section', 'header');

	/** GET POST TYPE ARTWORKS **/
	$args = array(
		'post_type' => 'artwork',
		'post_status' => 'publish',
		'posts_per_page' => 8,
		'order' => 'ASC'
	);
	$loop = new WP_Query($args);
?>
    <section class="section section-content shadow-lg">
        <div class="container">
            <script>
                var artworks = {
                    works: [
						<?php
						$categories = array();
						/** ARTWORK UI CONFIG **/
						while($loop->have_posts()) : $loop->the_post();
						?>
						<?php for ($i = 0; $i < 21; $i++) : ?>
                        {
                            src: '<?php echo htmlspecialchars(get_field('painting')); ?>',
                            description: '<?php echo htmlspecialchars(get_field('description')); ?>',
                            label: '<?php the_title(); ?>',
                            category: '<?php echo get_the_category()[0]->name; ?>'
                        },
						<?php endfor; ?>
						<?php
						/** SET CATEGORIES **/
						$categories[get_the_category()[0]->name] = get_the_category()[0]->name;
						?>
						<?php endwhile; ?>
                    ],
                    categories: [
						<?php
						foreach($categories as $category) {
							echo "'" . $category . "',";
						}
						?>

                    ]
                };
            </script>
            <div id="artwork-ui" class="artwork-ui" style="max-width: 1030px; margin: auto;"></div>
        </div>
    </section>
<?php get_footer(); ?>
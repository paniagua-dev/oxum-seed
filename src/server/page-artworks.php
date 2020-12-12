<?php
	get_header();
	get_template_part('template-parts/page/section', 'header');

	/** GET POST TYPE ARTWORKS **/
	$args = array(
		'post_type' => 'artwork',
		'post_status' => 'publish',
		'posts_per_page' => 8,
		'order' => 'DEC'
	);
	$loop = new WP_Query($args);
?>
<section class="section section-content shadow-lg">
    <div class="container-md">
        <script>
            var artworks = {
                works: [
					<?php
					$categories = array();
					/** ARTWORK UI CONFIG **/
					while($loop->have_posts()) : $loop->the_post();
					?>
                    {
                        src: '<?php echo htmlspecialchars(get_field('painting')); ?>',
                        description: '<?php echo htmlspecialchars(get_field('description'));?>',
                        label: '<?php the_title(); ?>',
                        category: '<?php echo get_the_category()[0]->name; ?>',
                        filter: '<?php echo htmlspecialchars(get_field('year')); ?>'
                    },
					<?php

					/** SET CATEGORIES **/
					$categories[get_the_category()[0]->name] = get_the_category()[0]->name;

					/** SET FILTERS **/
					$filters[get_field('year')] = get_field('year');
					?>
					<?php endwhile; ?>
                ],
                categories: [
					<?php
					foreach($categories as $category) {
						if(!empty($category) && $category !== '') {
							echo "'" . $category . "',";
						}
					}
					?>
                ],
                filters: [
					<?php
					foreach($filters as $filter) {
						if(!empty($filter) && $filter !== '') {
							echo "'" . $filter . "',";
						}
					}
					?>
                ]
            };
        </script>
        <div
            id="artwork-ui"
            class="artwork-ui"
            uk-scrollspy="target: .portfolio > .item-in-view; cls: opacity; delay: 500"
            style="max-width: 1030px; margin: auto;"
        >
        </div>
    </div>
</section>
<?php get_footer(); ?>

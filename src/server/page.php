<?php
	get_header();
	get_template_part('template-parts/page/section', 'header');
?>
<section class="section section-content shadow-lg">
    <div class="container-md">
		<?php if(have_posts()) : while(have_posts()) :
			the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/page-title/page-title', 'error' ); ?>

<main class="vlt-main vlt-main--padding">
	<div class="container">
		<?php get_template_part( 'template-parts/content/content', 'empty' ); ?>
	</div>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>
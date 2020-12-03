<footer class="main-footer text-center">
	<div class="main-footer-container container">
		<h3><?php echo get_bloginfo(); ?></h3>
		<div class="">
			<div class="menu-footer-menu-container">
				<ul id="menu-footer-menu" class="menu">

				</ul>
			</div>
		</div>
		<p class="copyright">
			Copyright © <?php echo date('Y') . ' ' . get_bloginfo(); ?> - All rights reserved
            <br/>
            Made with
            <img class="footer-made-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/heart.svg" /> and
            <img class="footer-made-icon" src="<?php echo get_template_directory_uri();?>/assets/icons/coffee.svg" />
            by <a href="http://paniagua.dev">Paniagua.dev</a>
		</p>
	</div>
</footer>
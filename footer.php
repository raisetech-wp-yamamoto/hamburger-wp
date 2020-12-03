<footer class="l-footer">

	<div class="l-footer__sitemap">
		<?php 
			wp_nav_menu( array( 
			'theme_location' => 'footer_nav' 
			)); 
		?>
	</div>
	<small>Copyright: RaiseTech</small>
	<?php wp_footer(); ?>
</footer>
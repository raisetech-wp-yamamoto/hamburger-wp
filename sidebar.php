<div class="l-wrapper__right off">
    <aside class="l-sidebar">
        <h2 class="c-title c-title--side-menu">Menu</h2>
        <h2 id="menu-close" class="c-close-button">×</h2>
        <?php 
			wp_nav_menu( array( 
            'theme_location' => 'category_nav',
            'menu_class' => 'c-menu'
			)); 
		?>
    </aside>
</div>
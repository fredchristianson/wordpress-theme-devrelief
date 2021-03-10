<footer class="site-footer">
<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>

	<?php
		get_template_part( 'template/footer/footer', 'widgets' );
	?>
</footer>
 
 </div> <!-- close class='page' -->
<?php wp_footer() ?>
</body>
</html>
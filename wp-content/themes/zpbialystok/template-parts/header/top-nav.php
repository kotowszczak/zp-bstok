<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Zp_Bialystok
 * @since Zp Bialystok 1.0
 */

?>

<?php if ( has_nav_menu( 'top' ) ) : ?>
	<nav id="top-navigation" class="top-navigation nav justify-content-end" role="navigation" aria-label="<?php esc_attr_e( 'Top menu', 'zpbialystok' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'top',
				'menu_class'      => 'nav justify-content-end',
				'container_class' => 'top-menu-container',
				'items_wrap'      => '<ul id="top-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>

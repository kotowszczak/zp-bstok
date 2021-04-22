<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Zp_Bialystok
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php
		//get_template_part( 'template-parts/footer/footer-widgets' );
	?>

	<footer id="footer">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav id="footer-menu" aria-label="<?php esc_attr_e( 'Secondary menu', 'zpbialystok' ); ?>" class="footer-navigation">
				<ul class="nav justify-content-end">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .nav justify-content-end -->
			</nav><!-- #footer-menu -->
		<?php endif; ?>

		<div class="update-date">
			Data aktualizacji: <span class="date">11.04.2021</span>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

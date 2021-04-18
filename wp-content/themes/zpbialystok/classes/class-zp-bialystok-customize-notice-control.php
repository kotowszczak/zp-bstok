<?php
/**
 * Customize API: Zp_Bialystok_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Zp_Bialystok
 * @since Zp Bialystok 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Zp Bialystok 1.0
 *
 * @see WP_Customize_Control
 */
class Zp_Bialystok_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Zp Bialystok 1.0
	 *
	 * @var string
	 */
	public $type = 'zp-bialystok-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since Zp Bialystok 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'zpbialystok' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/zp-bialystok/#dark-mode-support', 'zpbialystok' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'zpbialystok' ); ?>
			</a></p>
		</div>
		<?php
	}
}

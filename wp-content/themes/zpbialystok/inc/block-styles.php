<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Zp_Bialystok
 * @since Zp Bialystok 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Zp Bialystok 1.0
	 *
	 * @return void
	 */
	function zp_bialystok_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'zpbialystok-columns-overlap',
				'label' => esc_html__( 'Overlap', 'zpbialystok' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'zpbialystok-border',
				'label' => esc_html__( 'Borders', 'zpbialystok' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'zpbialystok-border',
				'label' => esc_html__( 'Borders', 'zpbialystok' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'zpbialystok-border',
				'label' => esc_html__( 'Borders', 'zpbialystok' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'zpbialystok-image-frame',
				'label' => esc_html__( 'Frame', 'zpbialystok' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'zpbialystok-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'zpbialystok' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'zpbialystok-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'zpbialystok' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'zpbialystok-border',
				'label' => esc_html__( 'Borders', 'zpbialystok' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'zpbialystok-separator-thick',
				'label' => esc_html__( 'Thick', 'zpbialystok' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'zpbialystok-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'zpbialystok' ),
			)
		);
	}
	add_action( 'init', 'zp_bialystok_register_block_styles' );
}

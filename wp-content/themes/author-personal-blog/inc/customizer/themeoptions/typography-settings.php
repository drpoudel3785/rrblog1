<?php
/**
 * Typography Settings
 */
Kirki::add_section( 'author_personal_blog_typography_settings', array(
    'title'          => esc_html__( 'Typography Settings', 'author-personal-blog' ),
    'panel'          => 'author_personal_blog_global_panel',
) );

Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'body_typography',
	'label'       => esc_html__( 'Body Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '1rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'h1_typography',
	'label'       => esc_html__( 'H1 Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '2.5rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'h2_typography',
	'label'       => esc_html__( 'H2 Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '2rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h2',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'h3_typography',
	'label'       => esc_html__( 'H3 Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '1.75rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h3',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'h4_typography',
	'label'       => esc_html__( 'H4 Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '1.5rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h4',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'h5_typography',
	'label'       => esc_html__( 'H5 Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '1.25rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h5',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'h6_typography',
	'label'       => esc_html__( 'H6 Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '1rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h6',
		],
	],
] );
Kirki::add_field( 'author_personal_blog_config', [
	'type'        => 'typography',
	'settings'    => 'widget_title_typography',
	'label'       => esc_html__( 'Widgets Typography', 'author-personal-blog' ),
	'section'     => 'author_personal_blog_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '1.3rem',
		'line-height'    => '1.6',
		'letter-spacing' => '0px',
		'color'          => '#000000',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'aside.widget-area  .widget .widget-title,aside.widget-area .widget .widgettitle',
		],
	],
] );
<?php
if (function_exists('acf_register_block_type')) {
	/**
	 * ==============================
	 * Blog 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'blog-1',
		'title' => 'Blog 1',
		'description' => 'Blog 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/blog-1/blog-1.php',
	));

	/**
	 * ==============================
	 * Contact Form 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'contact-form-1',
		'title' => 'Contact Form 1',
		'description' => 'Contact Form 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/contact-form-1/contact-form-1.php',
	));

	/**
	 * ==============================
	 * CTA 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'cta-1',
		'title' => 'CTA 1',
		'description' => 'CTA 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/cta-1/cta-1.php',
	));

	/**
	 * ==============================
	 * CTA 2 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'cta-2',
		'title' => 'CTA 2',
		'description' => 'CTA 2',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/cta-2/cta-2.php',
	));

	/**
	 * ==============================
	 * FAQ 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'faq-1',
		'title' => 'FAQ 1',
		'description' => 'FAQ 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/faq-1/faq-1.php',
	));

	/**
	 * ==============================
	 * Features 2 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'features-1',
		'title' => 'Features 1',
		'description' => 'Features 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/features-1/features-1.php',
	));

	/**
	 * ==============================
	 * Features 2 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'features-2',
		'title' => 'Features 2',
		'description' => 'Features 2',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/features-2/features-2.php',
	));

	/**
	 * ==============================
	 * Hero 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'hero-1',
		'title' => 'Hero 1',
		'description' => 'Hero 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/hero-1/hero-1.php',
	));

	/**
	 * ==============================
	 * Hero 2 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'hero-2',
		'title' => 'Hero 2',
		'description' => 'Hero 2',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/hero-2/hero-2.php',
	));

	/**
	 * ==============================
	 * Popular 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'popular-1',
		'title' => 'Popular 1',
		'description' => 'Popular 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/popular-1/popular-1.php',
	));

	/**
	 * ==============================
	 * Popular 3 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'popular-3', 'title' => 'Popular 3',
		'description' => 'Popular 3',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/popular-3/popular-3.php',
	));

	/**
	 * ==============================
	 * Service 2 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'service-2',
		'title' => 'Service 2',
		'description' => 'Service 2',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/service-2/service-2.php',
	));

	/**
	 * ==============================
	 * Service 3 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'service-3',
		'title' => 'Service 3',
		'description' => 'Service 3',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/service-3/service-3.php',
	));


	/**
	 * ==============================
	 * Trusted 1 Block
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'trusted-1',
		'title' => 'Trusted 1',
		'description' => 'Trusted 1',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/trusted-1/trusted-1.php',
	));


	/**
	 * ==============================
	 * Bg Image
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'bg-image',
		'title' => 'Bg Image',
		'description' => 'Bg Image',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/bg-image/bg-image.php',
	));


	/**
	 * ==============================
	 * Pricing table
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'pricing-table',
		'title' => 'Pricing Table',
		'description' => 'Pricing Table',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/pricing-table/pricing-table.php',
	));


	/**
	 * ==============================
	 * clone components
	 * ==============================
	 */
	acf_register_block_type(array(
		'name' => 'clone-components',
		'title' => 'Clone Components',
		'description' => 'Clone Components for internal use',
		'category' => 'maxwell-blocks',
		'mode' => 'preview',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
			<circle cx="12" cy="12" r="10" fill="none" stroke="#ff0000" stroke-width="2"/>
			<text x="12" y="16" text-anchor="middle" font-size="12" font-family="Arial, sans-serif" fill="#ff0000" font-weight="bold"> M </text>
		</svg>',
		'supports' => array(
			'align' => true,
			'mode' => true,
			'jsx' => true,
			'anchor' => true,
		),
		'render_template' => 'blocks/pricing-table/pricing-table.php',
	));
}

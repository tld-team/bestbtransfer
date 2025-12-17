<?php
/**
 * Get the URL, alt and srcset of an image by its ID.
 *
 * @param int $image_id The ID of the image.
 * @return array An array containing the URL, alt and srcset of the image.
 *     - string 'url' The URL of the image.
 *     - string 'alt' The alt text of the image.
 *     - string 'srcset' The srcset of the image.
 */
function get_image($image_id): array {
    return [
        'url' => wp_get_attachment_url($image_id),
        'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', TRUE),
        'srcset' => wp_get_attachment_image_srcset($image_id),
    ];
}


/**
 * Renders an SVG image.
 *
 * This function takes an URL or path to an SVG image and returns the SVG content
 * with optional classes and aria-label added.
 *
 * @param string $svg_url The URL or path to the SVG image.
 * @param string $classes Optional. The classes to add to the SVG element.
 * @param string $aria_label Optional. The aria-label attribute for the SVG element.
 * @return string The SVG content with optional classes and aria-label added.
 */
function maxwell_render_svg($svg_url, $classes = '', $aria_label = '') {
    // Check if the URL is empty
    if (empty($svg_url)) {
        return '';
    }
    
    // Check if the URL is valid
    if (!filter_var($svg_url, FILTER_VALIDATE_URL)) {
        return '';
    }
    
    // If the URL is local, convert it to a file path
    $wp_upload_dir = wp_upload_dir();
    $site_url = site_url();
    
    $file_path = str_replace($site_url, ABSPATH, $svg_url);
    
    // If the file exists, get its content
    if (file_exists($file_path)) {
        $svg_content = file_get_contents($file_path);
    } else {
        // If it's not a local file, try to get it via wp_remote_get
        $response = wp_remote_get($svg_url);
        
        if (is_wp_error($response)) {
            return '';
        }
        
        $svg_content = wp_remote_retrieve_body($response);
    }

    
    // Check if the content is an SVG
    if (strpos($svg_content, '<svg') === false) {
        return '';
    }
    
    // Add classes if provided
    if (!empty($classes)) {
        $svg_content = preg_replace(
            '/<svg([^>]*)>/',
            '<svg$1 class="' . esc_attr($classes) . '">',
            $svg_content
        );
    }
    
    // Add focusable="false" for IE
    $svg_content = str_replace('<svg', '<svg focusable="false"', $svg_content);
    
    return $svg_content;
}


/**
 * Function to create a custom post meta field for storing ACF blocks list.
 *
 * This function is triggered when a post is saved. It checks if the post has ACF blocks and if so,
 * it creates a custom post meta field '_acf_blocks_list' with an array of ACF blocks used in the post.
 * If the post does not have any ACF blocks, the custom post meta field is deleted.
 *
 * @param int $post_id The ID of the post being saved.
 * @param WP_Post $post The post object being saved.
 * @return void
 */
function maxwell_create_acf_blocks_list( $post_id, $post ) {
	// Check if the post is a revision or if it has ACF blocks
	if ( wp_is_post_revision( $post_id ) || ! has_blocks( $post->post_content ) ) {
		return;
	}

	// Parse the post content and get the ACF blocks
	$blocks     = parse_blocks( $post->post_content );
	$acf_blocks = [];
	foreach ( $blocks as $key => $block ) {
		if ( isset( $block['blockName'] ) ) {
			$acf_blocks[ $key ] = $block['blockName'];
		}
	}

	// Update or delete the custom post meta field
	if ( ! empty( $acf_blocks ) ) {
		update_post_meta( $post_id, '_acf_blocks_list', $acf_blocks );
	} else {
		delete_post_meta( $post_id, '_acf_blocks_list' );
	}
}
add_action( 'save_post', 'maxwell_create_acf_blocks_list', 10, 2 );


/**
 * Deletes the '_acf_blocks_list' custom post meta field when a post is deleted.
 *
 * @param int $post_id The ID of the post being deleted.
 * @return void
 */
function maxwell_delete_post_meta_acf_blocks_list( $post_id ) {
	$custom_meta = get_post_meta( $post_id, '_acf_blocks_list', true );

	if ( ! empty( $custom_meta ) ) {
		delete_post_meta( $post_id, '_acf_blocks_list' );
	}
}
add_action( 'delete_post', 'maxwell_delete_post_meta_acf_blocks_list', 10, 1 );


/**
 * Prints a heading HTML element based on the given order and block name.
 *
 * @param array $order The order of the block names.
 * @param string $block_name The name of the block.
 * @param string $title The title of the heading.
 * @param string $class The CSS class of the heading.
 * @param array $args Additional arguments for the heading.
 * @return void
 */
function print_heading( $order, $block_name, $title = '', $class = '', $args = [] ): void {
	if ( isset( $order[0] ) ) {
		if ( $order[0] === $block_name ) {
			?>
            <!-- Prints an H1 heading if the block name is the first in the order -->
            <h1 class="<?php echo $class ?>"><?php echo $title; ?></h1>
			<?php
		} else {
			?>
            <!-- Prints an H2 heading if the block name is not the first in the order -->
            <h2 class="<?php echo $class ?>"><?php echo $title; ?></h2>
			<?php
		}
	} else {
		?>
        <!-- Prints an H2 heading if the order is empty -->
        <h2 class="<?php echo $class ?>"><?php echo $title; ?></h2>
		<?php
	}
}

// U functions.php ili custom plugin
add_filter('acf/load_field/name=choose_form', 'populate_cf7_forms_in_acf');
// Ili ako koristite key umesto name:
// add_filter('acf/load_field/key=field_choose_form', 'populate_cf7_forms_in_acf');

function populate_cf7_forms_in_acf($field) {
    // Proveri da li je to polje koje želimo da popunimo
    if ($field['name'] === 'choose_form' || $field['_name'] === 'choose_form') {
        
        // Resetuj choices array
        $field['choices'] = array();
        
        // Dodaj praznu opciju
        $field['choices'][''] = '— Izaberite formu —';
        
        // Preuzmi sve CF7 forme
        $forms = get_posts(array(
            'post_type' => 'wpcf7_contact_form',
            'numberposts' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
            'post_status' => 'publish'
        ));
        
        // Popuni choices sa formama
        foreach ($forms as $form) {
            $field['choices'][$form->ID] = $form->post_title . ' (ID: ' . $form->ID . ')';
        }
        
        // Opsionalno: dodaj poruku ako nema formi
        if (empty($forms)) {
            $field['choices'][''] = 'Nema dostupnih Contact Form 7 formi';
            $field['disabled'] = true;
        }
        
        // Opsionalno: postavi defaultnu vrednost
        // $field['default_value'] = '';
    }
    
    return $field;
}
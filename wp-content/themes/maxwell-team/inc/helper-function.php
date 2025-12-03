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

function maxwell_render_svg($svg_url, $classes = '', $aria_label = '') {
    if (empty($svg_url)) {
        return '';
    }
    
    // Proveravamo da li je URL
    if (!filter_var($svg_url, FILTER_VALIDATE_URL)) {
        return '';
    }
    
    // Dobijamo putanju fajla ako je lokalni URL
    $wp_upload_dir = wp_upload_dir();
    $site_url = site_url();
    
    // Ako je lokalni fajl, koristimo file_get_contents
    // Konvertujemo URL u lokalnu putanju
    $file_path = str_replace($site_url, ABSPATH, $svg_url);
    
    if (file_exists($file_path)) {
        $svg_content = file_get_contents($file_path);
    } else {
        // Pokušaj preko wp_remote_get za bilo koji URL
        $response = wp_remote_get($svg_url);
        
        if (is_wp_error($response)) {
            return '';
        }
        
        $svg_content = wp_remote_retrieve_body($response);
    }

    
    // Proveravamo da li je SVG
    if (strpos($svg_content, '<svg') === false) {
        return '';
    }
    
    // Dodajemo klase ako postoje
    if (!empty($classes)) {
        $svg_content = preg_replace(
            '/<svg([^>]*)>/',
            '<svg$1 class="' . esc_attr($classes) . '">',
            $svg_content
        );
    }
    
    // // Dodajemo ARIA atribute
    // if (!empty($aria_label)) {
    //     $svg_content = preg_replace(
    //         '/<svg([^>]*)>/',
    //         '<svg$1 aria-label="' . esc_attr($aria_label) . '" role="img">',
    //         $svg_content
    //     );
    // } else {
    //     $svg_content = str_replace('<svg', '<svg aria-hidden="true"', $svg_content);
    // }
    
    // Dodajemo focusable="false" za IE
    $svg_content = str_replace('<svg', '<svg focusable="false"', $svg_content);
    
    return $svg_content;
}
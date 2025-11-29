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

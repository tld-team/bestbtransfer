<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package mma-future
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mma_future_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (! is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (! is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'mma_future_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mma_future_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'mma_future_pingback_header');



function maxwell_block_category($block_categories)
{

	$block_categories = array_merge(
		array(
			array(
				'slug' => 'maxwell-blocks',
				'title' => 'Blocks by Maxwell'
			)
		),
		$block_categories
	);

	return $block_categories;
}
add_filter('block_categories_all', 'maxwell_block_category');


/**
 * Funkcija koja vraća primarnu kategoriju odredenog posta.
 * Ako postoji, primarna kategorija je ona koja je postavljena u Yoast SEO pluginu.
 * U suprotnom, prva kategorija posta se uzima kao primarna kategorija.
 *
 * @param int|null $post_id ID posta. Ako nije proslijeđen, uzima se trenutni post.
 * @return mixed Objekt primarne kategorije ili false ako nema primarne kategorije.
 */
function get_primary_category($post_id = null)
{
	// Ako nije proslijeđen ID, uzmi trenutni post
	if (empty($post_id)) {
		$post_id = get_the_ID();
	}

	// Provjeri da li Yoast postoji i ima li primarnu kategoriju
	if (class_exists('WPSEO_Primary_Term')) {
		$primary_term = new WPSEO_Primary_Term('category', $post_id);
		$primary_category_id = $primary_term->get_primary_term();

		if ($primary_category_id) {
			$primary_category = get_term($primary_category_id, 'category');
			if (!is_wp_error($primary_category)) {
				return [
					'link' => get_term_link($primary_category),
					'name' => $primary_category->name
				];
			}
		}
	}

	// Fallback: vrati prvu kategoriju ako nema primarne
	$categories = wp_get_post_categories($post_id, array('number' => 1));
	if (!empty($categories)) {
		$category = get_term($categories[0], 'category');
		if ($category) {
			return [
				'link' => get_term_link($category),
				'name' => $category->name
			];
		}
	}

	return false;
}

/**
 * Funkcija koja vraća array s ID-evima poslednjih postova,
 * određenog tipa i broja po želji.
 *
 * @param int $count Broj postova koji se vraća. Zadani je 3.
 * @param string $post_type Tip postova koji se vraća. Zadani je 'post'.
 * @return array Array sa ID-evima poslednjih postova. Ako nema postova, vraća prazan array.
 */
function get_post_by_type($type = 'last', $post_type = 'post', $posts_per_page = 3, $posts_ids = array())
{
	if ($type == 'last') {
		$args = array(
			'post_type' => $post_type,
			'post_status' => 'publish',
			'posts_per_page' => $posts_per_page,
			'orderby' => 'date',
			'order' => 'DESC',
		);
	} elseif ($type == 'choose') {
		$args = array(
			'post_type' => $post_type,
			'post_status' => 'publish',
			'posts_per_page' => $posts_per_page,
			'orderby' => 'date',
			'order' => 'ASC',
			'post__in' => $posts_ids,
		);
	}

	$query = new WP_Query($args);

	$output = array();

	if ($query->have_posts()) {
		$key = 1;
		while ($query->have_posts()) {
			$query->the_post();
			$output[$key]['id'] = get_the_ID();
			$output[$key]['primary_category'] = get_primary_category(get_the_ID());
			$output[$key]['title'] = get_the_title();
			$output[$key]['excerpt'] = get_the_excerpt();
			$output[$key]['image'] = get_image(get_post_thumbnail_id());
			$output[$key]['link'] = array(
				'url' => get_the_permalink(),
				'title' => 'Read more',
				'target' => false
			);
			$output[$key]['date'] = get_the_date();
			$key++;
		}
	}

	return $output;
}


function add_call_menu_icons()
{
	echo '
    <style>
        /* Stil za glavni meni ikonu */
        .phone-float {
            position: fixed;
            bottom: 48px;
            right: 20px;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
			background-color: #fff;
            cursor: pointer;
        }

        .phone-float:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .call-icons {
            position: fixed;
            bottom: 122px;
            right: 20px;
            display: none;
            flex-direction: column;
            gap: 10px;
            z-index: 999;
        }

        .call-icons .icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .call-icons .icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .call-icons .icon img {
            width: 40px;
            height: 40px;
        }

        .icon.whatsapp {
            background-color: #25D366;
        }

        .icon.viber {
            background-color: #e2c2f8ff;
        }
    </style>

    <div class="phone-float" id="phoneMenu">
        <img src="/wp-content/themes/maxwell-team/assets/dist/icon/phone.svg" alt="Phone" style="width: 30px; height: 30px;">
    </div>
    <div class="call-icons" id="callIcons">
        <div class="icon whatsapp">
            <a href="https://wa.me/381692784544?text=Zdravo!%20Imam%20pitanje%20u%20vezi%20sa%20vašim%20uslugama." target="_blank" style="display: flex;">
                <img src="/wp-content/themes/maxwell-team/assets/dist/icon/whatsapp.svg" alt="WhatsApp">
            </a>
        </div>
        <div class="icon viber">
            <a  href="viber://chat?number=+381692784544&text=Pozdrav!%20Želeo%20bih%20više%20informacija." style="display: flex;">
                <img src="/wp-content/themes/maxwell-team/assets/dist/icon/viber.svg" alt="Viber">
            </a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const phoneMenu = document.getElementById("phoneMenu");
            const callIcons = document.getElementById("callIcons");

            phoneMenu.addEventListener("click", function() {
                const isVisible = callIcons.style.display === "flex";
                callIcons.style.display = isVisible ? "none" : "flex";
            });
        });
    </script>
    ';
}
add_action('wp_footer', 'add_call_menu_icons');


/**
 * Adds inline contact table to the page.
 *
 * Retrieves phone numbers from ACF options and displays them in a table.
 * The table consists of rows for phone, WhatsApp, and Viber. Each row
 * contains an icon, the name of the service, and a link to call or send
 * a message using the corresponding app.
 *
 * @return void
 */
function add_inline_contact()
{
	// Preuzmi brojeve telefona iz ACF opcija

	$contact_options = get_field('contact_options', 'option');
	$phone_number = $contact_options['phone'];
	$whatsapp_number = $contact_options['whatsapp'];
	$viber_number = $contact_options['viber'];

?>
	<?php if ($phone_number || $whatsapp_number || $viber_number) : ?>
		<div class="inline-flex items-center gap-2">

			<?php if ($phone_number) :
				$phone_formatted = preg_replace('/[^0-9+]/', '', $phone_number);
			?>
				<a href="tel:<?php echo esc_attr($phone_formatted); ?>"
					class="group inline-flex items-center gap-2 px-3 py-2 hover:bg-button-50 transition-all duration-200 text-sm font-medium">
					<div class="!w-8 !h-8 rounded-full flex items-center justify-center group-hover:bg-button/20 group-hover:text-button transition-colors duration-200">

						<?php if (!empty($contact_options['phone_icon']['subtype'] == 'svg+xml')) {
							echo maxwell_render_svg($contact_options['phone_icon']['url'], 'w-7 h-7 p-1');
						} else {
						?>
							<img src="/wp-content/themes/maxwell-team/assets/dist/icon/phone.svg" alt="Telefon" class="w-4 h-4 group-hover:brightness-0 group-hover:invert">
						<?php

						} ?>

					</div>
					<span>Phone</span>
				</a>
			<?php endif; ?>

			<?php if ($whatsapp_number) :
				$whatsapp_formatted = preg_replace('/[^0-9]/', '', $whatsapp_number);
			?>
				<a href="https://wa.me/<?php echo esc_attr($whatsapp_formatted); ?>?text=<?php echo urlencode('Zdravo! Imam pitanje u vezi sa vašim uslugama.'); ?>"
					target="_blank"
					class="group inline-flex items-center gap-2 px-3 py-2 bg-white text-green-600 hover:bg-green-50 transition-all duration-200 text-sm font-medium">
					<div class="!w-8 !h-8 bg-green-100 rounded-full flex items-center justify-center group-hover:bg-green-600 group-hover:text-green-50 transition-colors duration-200">

						<?php if (!empty($contact_options['whatsapp_icon']['subtype'] == 'svg+xml')) {
							echo maxwell_render_svg($contact_options['whatsapp_icon']['url'], 'w-7 h-7 p-1');
						} else {
						?>
							<img src="/wp-content/themes/maxwell-team/assets/dist/icon/phone.svg" alt="Telefon" class="w-4 h-4 group-hover:brightness-0 group-hover:invert">
						<?php

						} ?>

					</div>
					<span>WhatsApp</span>
				</a>
			<?php endif; ?>

			<?php if ($viber_number) :
				$viber_formatted = preg_replace('/[^0-9+]/', '', $viber_number);
			?>
				<a href="viber://chat?number=<?php echo esc_attr($viber_formatted); ?>&text=<?php echo urlencode('Pozdrav! Želeo bih više informacija.'); ?>"
					class="group inline-flex items-center gap-2 px-3 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 transition-all duration-200 text-sm font-medium">
					<div class="!w-8 !h-8 bg-purple-100 rounded-full flex items-center justify-center group-hover:bg-purple-600 group-hover:text-purple-50 transition-colors duration-200">

						<?php if (!empty($contact_options['viber_icon']['subtype'] == 'svg+xml')) {
							echo maxwell_render_svg($contact_options['viber_icon']['url'], 'w-7 h-7 p-1');
						} else {
						?>
							<img src="/wp-content/themes/maxwell-team/assets/dist/icon/viber.svg" alt="Viber" class="w-4 h-4 group-hover:brightness-0 group-hover:invert">
						<?php

						} ?>

					</div>
					<span>Viber</span>
				</a>
			<?php endif; ?>

		</div>
	<?php endif; ?>
<?php
}

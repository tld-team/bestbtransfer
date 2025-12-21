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



/**
 * Super optimized floating buttons - minimal code
 */
function add_super_optimized_buttons()
{

	$contact_data = get_field('contact_options', 'options');

	$wa = $contact_data['whatsapp'];
	$vb = $contact_data['viber'];

	// Desktop
?>
	<style>
		.fb {
			z-index: 9999;
			position: fixed
		}

		.d-btns {
			bottom: 50%;
			right: 1.5rem
		}

		.m-btns {
			bottom: 0;
			left: 0;
			right: 0;
			background: #fff;
			border-top: 1px solid #e5e7eb
		}

		@media(max-width:767px) {
			.d-btns {
				display: none
			}
		}

		@media(min-width:768px) {
			.m-btns {
				display: none
			}
		}
	</style>

	<div class="fixed right-6 top-1/2 -translate-y-1/2 z-[9999] hidden md:flex flex-col gap-3">

		<!-- WhatsApp -->
		<a href="https://wa.me/<?php echo $wa; ?>"
			target="_blank"
			rel="noopener noreferrer"
			aria-label="WhatsApp"
			class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#25D366] shadow-lg transition hover:scale-105 hover:shadow-xl">

			<?php echo maxwell_render_svg($contact_data['whatsapp_icon']['url'], 'w-8 h-8 text-white'); ?>
		</a>

		<!-- Viber -->
		<a href="viber://add?number=<?php echo $vb; ?>"
			aria-label="Viber"
			class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#7360F2] shadow-lg transition hover:scale-105 hover:shadow-xl">

			<?php echo maxwell_render_svg($contact_data['viber_icon']['url'], 'w-8 h-8 text-white'); ?>
		</a>

	</div>


	<div class="fixed bottom-0 left-0 right-0 z-[9999] md:hidden grid grid-cols-2 border-t border-gray-200 bg-white">

		<!-- WhatsApp -->
		<a href="https://wa.me/<?php echo $contact_data['whatsapp']; ?>"
			target="_blank"
			rel="noopener noreferrer"
			class="flex items-center justify-center bg-[#25D366] py-4 transition hover:brightness-110">

			<?php if (!empty($contact_data['whatsapp_icon']) && $contact_data['whatsapp_icon']['subtype'] === 'svg+xml') : ?>
				<?php echo maxwell_render_svg($contact_data['whatsapp_icon']['url'], 'w-8 h-8 text-white'); ?>
			<?php endif; ?>
		</a>

		<!-- Viber -->
		<a href="viber://chat?number=<?php echo $contact_data['viber']; ?>"
			target="_blank"
			rel="noopener noreferrer"
			class="flex items-center justify-center bg-[#7360F2] py-4 transition hover:brightness-110">

			<?php if (!empty($contact_data['viber_icon']) && $contact_data['viber_icon']['subtype'] === 'svg+xml') : ?>
				<?php echo maxwell_render_svg($contact_data['viber_icon']['url'], 'w-8 h-8 text-white'); ?>
			<?php endif; ?>
		</a>

	</div>

<?php
}

add_action('wp_footer', 'add_super_optimized_buttons');




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
					class="group inline-flex items-center gap-2 pr-3 py-2 hover:bg-button-50 transition-all duration-200 text-sm font-medium">
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
					class="group inline-flex items-center gap-2 pr-3 py-2 bg-white text-green-600 hover:bg-green-50 transition-all duration-200 text-sm font-medium">
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
					class="group inline-flex items-center gap-2 pr-3 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 transition-all duration-200 text-sm font-medium">
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

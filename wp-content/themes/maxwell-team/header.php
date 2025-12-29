<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('font-body scroll-smooth'); ?>>
	<?php wp_body_open(); ?>
	<!-- <div id="page" class="site"> -->
	<a class="skip-link screen-reader-text hidden" href="#primary"><?php esc_html_e('Skip to content', 'mma-future'); ?></a>

	<?php $top_bar = get_field('top_bar', 'option'); ?>

	<div class="bg-background text-white md:block hidden">
		<div class="flex flex-col md:flex-row justify-between items-center p-2 max-w-7xl mx-auto">
			<?php if (!empty($top_bar)) : ?>
				<div class="flex flex-col md:flex-row md:items-center md:space-x-8 mb-4 md:mb-0 w-full md:w-auto ">
					<?php if (!empty($top_bar['address'])) : ?>
						<div class="flex items-center space-x-2 mb-3 md:mb-0 hover:text-secondary">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-4 h-4">
								<path fill="currentColor" d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
							</svg>
							<div class="text-sm md:text-base"><?php echo apply_filters('the_content', $top_bar['address']); ?></div>
						</div>
					<?php endif; ?>

					<?php if (!empty($top_bar['phone'])) : ?>
						<!-- Phone -->
						<div class="flex items-center space-x-2 mb-3 md:mb-0 hover:text-secondary">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
								<path fill="currentColor" d="M160.2 25C152.3 6.1 131.7-3.9 112.1 1.4l-5.5 1.5c-64.6 17.6-119.8 80.2-103.7 156.4 37.1 175 174.8 312.7 349.8 349.8 76.3 16.2 138.8-39.1 156.4-103.7l1.5-5.5c5.4-19.7-4.7-40.3-23.5-48.1l-97.3-40.5c-16.5-6.9-35.6-2.1-47 11.8l-38.6 47.2C233.9 335.4 177.3 277 144.8 205.3L189 169.3c13.9-11.3 18.6-30.4 11.8-47L160.2 25z" />
							</svg>

							<div class="flex flex-col">
								<div class="text-sm md:text-base font-medium"><?php echo apply_filters('the_content', $top_bar['phone']); ?></div>
							</div>
						</div>
					<?php endif; ?>

					<?php if (!empty($top_bar['work_time'])) : ?>
						<!-- Hours -->
						<div class="flex items-center space-x-2 hover:text-secondary">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
								<path fill="currentColor" d="M256 0a256 256 0 1 1 0 512 256 256 0 1 1 0-512zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
							</svg>
							<div class="flex flex-col">
								<div class="text-sm md:text-base font-medium"><?php echo apply_filters('the_content', $top_bar['work_time']); ?></div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php $social_network = get_field('social_network', 'option'); ?>
			<?php if (!empty($social_network)) : ?>
				<!-- Right Section - Social Media Icons -->
				<div class="flex items-center space-x-4">

					<?php foreach ($social_network as $key => $media) : ?>
						<?php if (!empty($media)) :

							$svg_path = get_template_directory_uri() . '/assets/dist/icon/' . $key . '.svg';
						?>
							<a href="<?php echo $media; ?>" class="hover:text-secondary hover:scale-110 transition-all duration-300" aria-label="<?php echo ucfirst($key); ?> social media link">
								<?php if (!empty($svg_path)): ?>
									<?php echo maxwell_render_svg($svg_path, 'nav-svg-arrow w-4 h-4'); ?>
								<?php endif; ?>
							</a>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<header id="masthead" class="site-header sticky top-0 z-50 w-full bg-white pt-4 pb-0 md:pt-4 md:pb-4 bg-[#F3F4F5] shadow-sm border-b border-border/50">
		<div class="w-full mx-auto">
			<nav class="nav-container px-4">
				<div class="flex items-center justify-between text-base text-primary">
					<!-- Logo -->
					<div class="flex-shrink-0 custom-logo-link">
						<?php the_custom_logo(); ?>
					</div>

					<!-- Desktop Menu -->
					<div class="hidden md:flex flex-1 justify-center items-center space-x-8">
						<?php
						// Get the primary menu
						$menu_locations = get_nav_menu_locations();
						$menu_1_id = $menu_locations['menu-1'];
						$menu_1 = wp_get_nav_menu_object($menu_1_id);
						$menu_1_items = wp_get_nav_menu_items($menu_1_id);


						foreach ($menu_1_items as $item) {
							if ($item->menu_item_parent == 0) {
								$children = array_filter($menu_1_items, function ($child) use ($item) {
									return $child->menu_item_parent == $item->ID;
								});

								if (!empty($children)) {
									// Dropdown item
						?>
									<div class="dropdown relative">
										<button class="flex items-center transition-colors font-medium">
											<span><?php echo $item->title; ?></span>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="ml-1 text-xs">
												<path fill="currentColor" d="M201.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 338.7 54.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
											</svg>
										</button>
										<div class="dropdown-content absolute left-1/2 transform -translate-x-1/2 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 z-10 border">
											<?php foreach ($children as $child) { ?>
												<a href="<?php echo $child->url; ?>" class="block px-4 py-2 text-gray-700 hover:bg-teal-50">
													<?php echo $child->title; ?>
												</a>
											<?php } ?>
										</div>
									</div>
								<?php
								} else {
									// Simple menu item
								?>
									<a href="<?php echo $item->url; ?>" class="transition-colors font-medium">
										<?php echo $item->title; ?>
									</a>
						<?php
								}
							}
						}
						?>
					</div>
					
							<div class="lang-switcher mr-4 p-3">
								<?php echo do_shortcode('[lang_switcher]'); ?>
							</div>

					<!-- Call Button -->
					<div class="hidden md:flex flex-shrink-0">
						<?php link_4(['url' => '/contact-us', 'title' => 'Contact us']) ?>
					</div>

					<!-- Mobile Menu Button -->
					<button class="md:hidden text-button" id="menu4-toggle" aria-label="Toggle navigation" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6">
							<path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
						</svg>
					</button>
				</div>


				<!-- Mobile Menu -->
				<div class="mobile-menu md:hidden mt-4" id="menu4">
					<div class="flex flex-col space-y-4 py-4">
						<?php
						foreach ($menu_1_items as $item) {
							if ($item->menu_item_parent == 0) {
								$children = array_filter($menu_1_items, function ($child) use ($item) {
									return $child->menu_item_parent == $item->ID;
								});

								if (!empty($children)) {
									// Mobile dropdown
						?>
									<div class="mobile-dropdown">
										<button class="flex items-center justify-between w-full transition-colors py-2 font-medium" onclick="toggleMobileDropdown(this)">
											<span><?php echo $item->title; ?></span>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"><!--! Font Awesome Free 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2025 Fonticons, Inc. -->
												<path fill="currentColor" d="M201.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 338.7 54.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
											</svg>
										</button>
										<div class="mobile-dropdown-content ml-4">
											<?php foreach ($children as $child) { ?>
												<a href="<?php echo $child->url; ?>" class="block py-2 text-white"><?php echo $child->title; ?></a>
											<?php } ?>
										</div>
									</div>
								<?php
								} else {
									// Simple mobile item
								?>
									<a href="<?php echo $item->url; ?>" class="transition-colors py-2 font-medium">
										<?php echo $item->title; ?>
									</a>
						<?php
								}
							}
						}
						?>

						<div class="pt-4 border-t border-gray-200 flex justify-between">
							<div class="lang-switcher">
								<?php echo do_shortcode('[lang_switcher]'); ?>
							</div>
							<?php link_4(['url' => '/contact-us', 'title' => 'Contact us']) ?>

						</div>
					</div>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
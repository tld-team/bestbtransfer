
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('font-body'); ?>>
<?php wp_body_open(); ?>
<!-- <div id="page" class="site"> -->
	<a class="skip-link screen-reader-text hidden" href="#primary"><?php esc_html_e('Skip to content', 'mma-future'); ?></a>

	<header id="masthead" class="site-header sticky top-0 z-50 w-full bg-white">
		<div class="w-full mx-auto">
			<nav class="nav-container px-4">
				<div class="flex items-center justify-between">
					<!-- Logo -->
					<div class="flex items-center">
						<?php the_custom_logo(); ?>
					</div>
					
					<!-- Desktop Menu -->
					<div class="hidden md:flex items-center space-x-8">
						<?php
						// Get the primary menu
						$menu_items = wp_get_nav_menu_items('menu-1');
						foreach ($menu_items as $item) {
							if ($item->menu_item_parent == 0) {
								$children = array_filter($menu_items, function($child) use ($item) {
									return $child->menu_item_parent == $item->ID;
								});
								
								if (!empty($children)) {
									// This is a dropdown item
									?>
									<div class="dropdown relative">
										<button class="flex items-center transition-colors font-medium">
											<span><?php echo $item->title; ?></span>
											<i class="fas fa-chevron-down ml-1 text-xs"></i>
										</button>
										<div class="dropdown-content absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 z-10 border">
											<?php foreach ($children as $child) { ?>
												<a href="<?php echo $child->url; ?>" class="block px-4 py-2 text-gray-700 hover:bg-teal-50">
													<?php echo $child->title; ?>
												</a>
											<?php } ?>
										</div>
									</div>
									<?php
								} else {
									// This is a simple menu item
									?>
									<a href="<?php echo $item->url; ?>" class="transition-colors font-medium">
										<?php echo $item->title; ?>
									</a>
									<?php
								}
							}
						}
						?>
						
						<!-- Language Selector -->
						<div class="dropdown relative">
							<button class="flex items-center transition-colors font-medium">
								<i class="fas fa-globe mr-1"></i>
								<span>EN</span>
								<i class="fas fa-chevron-down ml-1 text-xs"></i>
							</button>
							<div class="dropdown-content absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg py-2 z-10 border">
								<a href="#" class="block px-4 py-2 hover:bg-teal-50">English</a>
								<a href="#" class="block px-4 py-2 hover:bg-teal-50">Español</a>
								<a href="#" class="block px-4 py-2 hover:bg-teal-50">Français</a>
							</div>
						</div>
						
						<?php link_4(['url' => '#', 'title' => 'Call us +386 5 222 222']) ?>
					</div>
					
					<!-- Mobile Menu Button -->
					<button class="md:hidden text-white" id="menu4-toggle">
						<i class="fas fa-bars text-xl"></i>
					</button>
				</div>
		
				<!-- Mobile Menu -->
				<div class="mobile-menu md:hidden mt-4" id="menu4">
					<div class="flex flex-col space-y-4 py-4">
						<?php
						foreach ($menu_items as $item) {
							if ($item->menu_item_parent == 0) {
								$children = array_filter($menu_items, function($child) use ($item) {
									return $child->menu_item_parent == $item->ID;
								});
								
								if (!empty($children)) {
									// Mobile dropdown
									?>
									<div class="mobile-dropdown">
										<button class="flex items-center justify-between w-full transition-colors py-2 font-medium" onclick="toggleMobileDropdown(this)">
											<span><?php echo $item->title; ?></span>
											<i class="fas fa-chevron-down text-xs"></i>
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
							<!-- Language Selector -->
							<div class="flex items-center">
								<i class="fas fa-globe mr-2 text-white"></i>
								<select class="bg-transparent text-white font-medium">
									<option>EN</option>
									<option>ES</option>
									<option>FR</option>
								</select>
							</div>
							
							<?php link_4(['url' => '#', 'title' => 'Call us +386 5 222 222']) ?>
							
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->

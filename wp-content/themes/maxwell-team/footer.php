<?php
$footer_data = get_field('footer_data', 'option');
$social_network = get_field('social_network', 'option');
?>

<footer class="bg-background text-white">
    <div class="container py-16 px-4 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center">
                        <span class="font-display font-bold text-xl text-secondary-foreground">ST</span>
                    </div>
                    <div>
                        <span class="font-display font-bold text-xl">Slovenia</span><span class="font-display font-bold text-xl text-secondary"> Transfers</span>
                    </div>
                </div>
                <?php if (!empty($footer_data['description'])) : ?>
                    <div class="mb-6"><?php echo apply_filters('the_content', $footer_data['description']); ?></div>
                <?php endif; ?>



                <div class="flex items-center gap-3 mb-6">
                    <?php foreach ($social_network as $key => $media) : ?>
                        <?php if (!empty($media)) :

                            $svg_path = get_template_directory_uri() . '/assets/dist/icon/' . $key . '.svg';
                        ?>
                            <a href="<?php echo $media; ?>" class="hover:text-secondary hover:scale-110 transition-all duration-300 w-10 h-10" aria-label="<?php echo ucfirst($key); ?> social media link">
                                <?php if (!empty($svg_path)): ?>
                                    <?php echo maxwell_render_svg($svg_path, 'w-6 h-6'); ?>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
            <?php
            $menu_locations = get_nav_menu_locations();
            $menu_1_id = $menu_locations['footer-menu-1'];
            $menu_1 = wp_get_nav_menu_object($menu_1_id);
            $menu_1_items = wp_get_nav_menu_items($menu_1_id);

            if ($menu_1) :
            ?>
                <div>
                    <h2 class="text-white font-bold text-lg mb-6"><?php echo $menu_1->name ?></h2>
                    <ul class="space-y-3">
                        <?php foreach ($menu_1_items as $item) : ?>
                            <li>
                                <a class="text-white hover:text-secondary transition-colors" href="<?php echo esc_url($item->url) ?>">
                                    <?php echo esc_html($item->title) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php
            $menu_2_id = $menu_locations['footer-menu-2'];
            $menu_2 = wp_get_nav_menu_object($menu_2_id);
            $menu_2_items = wp_get_nav_menu_items($menu_2_id);

            if ($menu_2) :
            ?>
                <div>
                    <h2 class="text-white font-bold text-lg mb-6"><?php echo $menu_2->name ?></h2>
                    <ul class="space-y-3">
                        <?php foreach ($menu_2_items as $item) : ?>
                            <li>
                                <a class="text-white hover:text-secondary transition-colors" href="<?php echo esc_url($item->url) ?>">
                                    <?php echo esc_html($item->title) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>


            <?php if (!empty($footer_data['contact_data'])) : ?>
                <div>
                    <h2 class="text-white font-bold text-lg mb-6"><?php echo __('Contact Us', 'maxwell-team'); ?></h2>
                    <ul class="space-y-4">
                        <?php foreach ($footer_data['contact_data'] as $item) : ?>
                            <li>
                                <?php if ($item['text']['url'] == '#'): ?>
                                    <div class="flex items-center gap-3 transition-colors">
                                        <?php if (!empty($item['icon'])): ?>
                                            <?php echo maxwell_render_svg($item['icon'], 'w-6 h-6'); ?>
                                        <?php endif; ?>
                                        <?php echo $item['text']['title']; ?>
                                    </div>
                                <?php else: ?>
                                    <a href="<?php echo esc_url($item['text']['url']); ?>" class="lex items-center gap-3 text-white hover:text-secondary transition-colors">
                                        <?php if (!empty($item['icon'])): ?>
                                            <?php echo maxwell_render_svg($item['icon'], 'w-6 h-6'); ?>
                                        <?php endif; ?>
                                        <?php echo $item['text']['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </div>
        <div class="border-t border-primary-foreground/20 mt-12 pt-8 text-center text-primary-foreground/60">
            <p>© <?php echo date('Y'); ?> TLD team All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- </div>#page -->

<?php wp_footer(); ?>

<script>
    // Mobile menu toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Navigation 4
        const menu4Toggle = document.getElementById('menu4-toggle');
        const menu4 = document.getElementById('menu4');

        menu4Toggle.addEventListener('click', function() {
            menu4.classList.toggle('open');
        });
    });

    // Mobile dropdown toggle functionality
    function toggleMobileDropdown(button) {
        const dropdown = button.parentElement;
        dropdown.classList.toggle('open');

        // Rotate the chevron icon
        const icon = button.querySelector('i');
        if (dropdown.classList.contains('open')) {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    }
</script>
</body>

</html>
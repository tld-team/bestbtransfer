<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('hero_1');
$bg_image = get_image($data['bg_image']);

$text_color = $data['text_color'] ?? '#fff';
?>
<style>
    .hero-2-<?php echo esc_attr($blocks_id); ?>,
    .hero-2-<?php echo esc_attr($blocks_id); ?> p,
    .hero-2-<?php echo esc_attr($blocks_id); ?> h1,
    .hero-2-<?php echo esc_attr($blocks_id); ?> span,
    .hero-2-<?php echo esc_attr($blocks_id); ?> ul,
    .hero-2-<?php echo esc_attr($blocks_id); ?> li {
        color: <?php echo esc_attr($text_color); ?> !important;
    }
</style>
<section class="py-8 sm:py-12 lg:py-18 hero-2-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">

            <?php if ($data['title']) : ?>
            <h1 class="h1-responsive mb-6 leading-tight">
                <?php echo esc_html($data['title']); ?>
            </h1>
            <?php endif; ?>
            
            <?php if ($data['description']) : ?>
            <div class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto opacity-90">
                <?php echo apply_filters('the_content', $data['description']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($data['link_1']['url'] || $data['link_2']['url']) : ?>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <?php if ($data['link_1']['url']) : ?>
                <?php link_1($data['link_1']); ?>
                <?php endif; ?>
                
                <?php if ($data['link_2']['url']) : ?>
                <?php link_2($data['link_2']); ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 max-w-2xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold">500+</div>
                    <div class="text-white/70">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold">24/7</div>
                    <div class="text-white/70">Service</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold">50+</div>
                    <div class="text-white/70">Destinations</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold">5★</div>
                    <div class="text-white/70">Rating</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="">
        <div class="flex flex-col items-center">
            <span class="text-sm mb-2">Scroll to explore</span>
            <i class="fas fa-chevron-down animate-bounce"></i>
        </div>
    </div>
</section>
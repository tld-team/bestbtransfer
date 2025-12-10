<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('hero_1');

$bg_image = get_image($data['bg_image']);

$text_color = $data['text_color'] ?? '#fff';
$overlay_color = $data['overlay_color']?? 'rgba(0, 0, 0, 0.5)';
?>
<style>
    .hero-1-<?php echo esc_attr($blocks_id); ?>,
    .hero-1-<?php echo esc_attr($blocks_id); ?> p,
    .hero-1-<?php echo esc_attr($blocks_id); ?> h1,
    .hero-1-<?php echo esc_attr($blocks_id); ?> span,
    .hero-1-<?php echo esc_attr($blocks_id); ?> ul,
    .hero-1-<?php echo esc_attr($blocks_id); ?> li {
        color: <?php echo esc_attr($text_color); ?> !important;
    }
    
    .hero-1-<?php echo esc_attr($blocks_id); ?> .overlay {
        background-color: <?php echo esc_attr($overlay_color); ?> !important;
    }
</style>

<section class="hero-1-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="relative py-16 sm:py-20 lg:py-24">    
        <?php if ($bg_image) : ?>
        <!-- Background Image -->
        <img src="<?php echo esc_url($bg_image['url']); ?>" 
             alt="<?php echo esc_attr($bg_image['alt'] ?? ''); ?>"
             srcset="<?php echo $bg_image['srcset']; ?>"
             sizes="100vw"
             class="absolute inset-0 w-full h-full object-cover" fetchpriority="high">
        <?php endif; ?>
        
        <!-- Overlay layer - koristi custom klasu -->
        <div class="overlay absolute inset-0 z-0"></div>
    
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-2xl">
                <?php if ($data['title']) : ?>
                    <h1 class="h1-responsive mb-4"><?php echo $data['title']; ?></h1>
                <?php endif; ?>
                <?php if ($data['description']) : ?>
                    <div class="mb-8 content-list-link"><?php echo apply_filters('the_content', $data['description']); ?></div>
                <?php endif; ?>
                <div class="flex flex-col sm:flex-row gap-4">
                    <?php if ($data['link_1']) : ?>
                        <?php link_1($data['link_1']); ?>
                    <?php endif; ?>
                    <?php if ($data['link_2']) : ?>
                        <?php link_2($data['link_2']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Sekcija -->
 <?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('cta_2');
$text_color = $data['text_color'] ?? '#fff';
$background_color = $data['background_color']?? "#000";
?>
<style>
    .cta_2-<?php echo esc_attr($blocks_id); ?>,
    .cta_2-<?php echo esc_attr($blocks_id); ?> p,
    .cta_2-<?php echo esc_attr($blocks_id); ?> h1,
    .cta_2-<?php echo esc_attr($blocks_id); ?> h2,
    .cta_2-<?php echo esc_attr($blocks_id); ?> span,
    .cta_2-<?php echo esc_attr($blocks_id); ?> ul,
    .cta_2-<?php echo esc_attr($blocks_id); ?> li {
        color: <?php echo $text_color; ?> !important;
    }

    .cta_2-<?php echo esc_attr($blocks_id); ?> {
        background-color: <?php echo $background_color; ?> !important;
    }
</style>

<section class="py-16 sm:py-20 lg:py-24 bg-background cta-2-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <?php if (!empty($data['title'])) : ?>
                <h2 class="h2-responsive mb-4 text-white"><?php echo $data['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($data['description'])) : ?>
                <div class="content-list-link mb-8 opacity-90 text-white text-xl"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <?php if (!empty($data['link_1'])) : ?>
                    <?php link_1($data['link_1']) ?>
                <?php endif; ?>
                <?php if (!empty($data['link_2'])) : ?>
                    <?php link_2($data['link_2']) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
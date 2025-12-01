<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['className']) ? $block['className'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$revers = get_field('revers', $block['id']);
$data = get_field('features_2');
$background_color = $data['background_color'] ?? '#fff';
$revers = $data['reverse'] == 'yes' ? true : false;
$internal_padding = str_contains("$blocks_class", "internal-padding") ? 'py-10 sm:py-16 lg:py-24' : '';
?>
<style>
    .features-2-<?php echo esc_attr($blocks_id); ?>,
    .features-2-<?php echo esc_attr($blocks_id); ?> p,
    .features-2-<?php echo esc_attr($blocks_id); ?> h1,
    .features-2-<?php echo esc_attr($blocks_id); ?> span,
    .features-2-<?php echo esc_attr($blocks_id); ?> ul,
    .features-2-<?php echo esc_attr($blocks_id); ?> li {
        background-color: <?php echo esc_attr($background_color); ?> !important;
    }
</style>

<section class="py-10 sm:py-16 lg:py-24 features-2-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="px-4 mx-auto max-w-7xl <?php echo $internal_padding; ?>">
        <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
            <div class="<?php echo $revers ? 'lg:order-2' : 'lg:order-1'; ?>">
                <?php if (!empty($data['top_title'])) : ?>
                <p class="text-base font-semibold tracking-wider text-blue-600 uppercase"><?php echo $data['top_title']; ?></p>
                <?php endif; ?>
                
                <?php if (!empty($data['title'])) : ?>
                <h2 class="h2-responsive mt-4"><?php echo $data['title']; ?></h2>
                <?php endif; ?>
                
                <?php if (!empty($data['content'])) : ?>
                <div class="mt-4"><?php echo apply_filters('the_content', $data['content']); ?></div>
                <?php endif; ?>

                <?php if (!empty($data['link'])) : ?>
                <a href="<?php echo $data['link']['url']; ?>" title="<?php echo $data['link']['title']; ?>" target="<?php echo $data['link']['target']; ?>" class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400" role="button">
                    <?php echo $data['link']['title']; ?>
                    <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
                <?php endif; ?>
            </div>

            <?php if (!empty($data['image'])) : ?>
            <div class="<?php echo $revers ? 'lg:order-1' : 'lg:order-2'; ?>">
                <img class="w-full rounded-xl overflow-hidden shadow-sm hover:shadow-md transition" src="<?php echo $data['image']['url']; ?>" alt="<?php echo $data['image']['alt']; ?>" />
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>


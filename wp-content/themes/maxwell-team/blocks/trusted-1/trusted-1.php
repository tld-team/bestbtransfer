<!-- Hero Sekcija -->
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('trusted_1');
?>

<!-- 4. Trust Signals sekcija -->
<section class="py-20 <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <?php if (!empty($data['top_title'])) : ?>
                <span class="font-semibold"><?php echo $data['top_title']; ?></span>
            <?php endif; ?>
            <?php if (!empty($data['title'])) : ?>
                <h2 class="h2-responsive mt-2 mb-4"><?php echo $data['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($data['description'])) : ?>
                <div class="max-w-2xl mx-auto"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <?php if (!empty($data['items'])) : ?>
                <?php foreach ($data['items'] as $item) : ?>
                    <div class="text-center p-6">
                        <?php if (!empty($item['icon'])) : ?>
                            <div class="rounded-2xl flex items-center justify-center mx-auto w-16 h-16 bg-gradient-to-r from-primary to-blue-600 mb-6 shadow-md">
                                <i class="fas fa-<?php echo $item['icon']; ?> text-white text-3xl"></i>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($item['title'])) : ?>
                            <h3 class="h3-responsive mt-2 mb-2"><?php echo $item['title']; ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($item['description'])) : ?>
                            <div class="mt-2"><?php echo apply_filters('the_content', $item['description']); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
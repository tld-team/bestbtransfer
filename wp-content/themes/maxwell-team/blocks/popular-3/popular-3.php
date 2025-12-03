<!-- Hero Sekcija -->
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('popular_3');
?>
<!-- Popular Tours Section -->
<section class="py-8 sm:py-12 lg:py-18 <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <?php if (!empty($data['top_title'])) : ?>
                <span class="maxwell-top-title"><?php echo $data['top_title']; ?></span>
            <?php endif; ?>
            <?php if (!empty($data['title'])) : ?>
                <h2 class="h2-responsive mt-2 mb-4"><?php echo $data['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($data['description'])) : ?>
                <div class="max-w-2xl mx-auto  content-list-link"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php if (!empty($data['items'])) : ?>
                <?php foreach ($data['items'] as $item) : ?>
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <div class="h-48 relative overflow-hidden">
                            <img src="<?php echo $item['image']['url']; ?>" class="w-full h-full object-cover" alt="<?php echo $item['image']['url']; ?>">

                            <!-- Tag - gore desno -->
                            <?php if (!empty($item['tag'])): ?>
                                <div class="absolute top-4 right-4">
                                    <a href="<?php echo $item['tag']['url']; ?>" class="text-sm text-white bg-black bg-opacity-50 px-2 py-1 rounded-xl">
                                        <?php echo $item['tag']['title']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <!-- Naslov - dole levo -->
                            <?php if (!empty($item['title'])): ?>
                                <div class="absolute bottom-0 left-0 w-full">
                                    <h3 class="font-semibold text-lg text-white bg-white bg-opacity-20 backdrop-blur-sm px-3 py-2 rounded">
                                        <?php echo $item['title']; ?>
                                    </h3>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-2">
                                <?php if (!empty($item['time'])): ?>
                                    <span class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2 text-button"><!--! Font Awesome Free 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2025 Fonticons, Inc. -->
                                            <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512 256 256 0 1 1 0-512zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                        </svg>
                                        <?php echo $item['time']; ?>
                                    </span>

                                <?php endif; ?>
                                <?php if (!empty($item['price'])): ?>
                                    <span class="font-semibold"><?php echo $item['price']; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($item['description'])): ?>
                                <div class="mb-4 content-list-link"><?php echo apply_filters('the_content', $item['description']); ?></div>
                            <?php endif; ?>
                            <?php if (!empty($item['link'])): ?>
                                <?php link_inline_arrow($item['link'], 'font-bold'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php if (!empty($data['link'])): ?>
            <div class="text-center mt-10">
                <?php link_inline_arrow($data['link'], 'text-xl font-bold'); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Hero Sekcija -->
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('popular_3');
?>
<!-- Popular Tours Section -->
<section class="py-10 sm:py-16 lg:py-24 <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <?php if (!empty($data['top_title'])) : ?>
                <span><?php echo $data['top_title']; ?></span>
            <?php endif; ?>
            <?php if (!empty($data['title'])) : ?>
                <h2 class="h2-responsive mt-2 mb-4"><?php echo $data['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($data['description'])) : ?>
                <div class="max-w-2xl mx-auto"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php if (!empty($data['items'])) : ?>
                <?php foreach ($data['items'] as $item) : ?>
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <div class="h-48 relative overflow-hidden">
                            <img src="<?php echo $item['image']['url']; ?>" class="w-full h-full object-cover" alt="">

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
                                    <span class=""><i class="fas fa-clock mr-1"></i> <?php echo $item['time']; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($item['price'])): ?>
                                    <span class="font-semibold"><?php echo $item['price']; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($item['description'])): ?>
                                <div class="mb-4"><?php echo apply_filters('the_content', $item['description']); ?></div>
                            <?php endif; ?>
                            <?php if (!empty($item['link'])): ?>
                                <a href="<?php echo $item['link']['url']; ?>" class="flex items-center"><?php echo $item['link']['title'] ?> <i class="fas fa-arrow-right ml-2 text-xs group-hover:translate-x-1 transition "></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php if (!empty($data['link'])): ?>
        <div class="text-center mt-10">
            <a href="<?php echo $data['link']['url']; ?>" class="inline-flex items-center">
                <?php echo $data['link']['title']; ?>
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition "></i>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('service_2');
$right = $data['right'];
?>
<section class="py-10 sm:py-16 lg:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <?php if (!empty($data['top_title'])) { ?>
                <span class="text-primary font-semibold"><?php echo $data['top_title']; ?></span>
            <?php } ?>
            <?php if (!empty($data['title'])) { ?>
                <h2 class="h2-responsive mt-2 mb-4"><?php echo $data['title']; ?></h2>
            <?php } ?>
            <?php if (!empty($data['description'])) { ?>
                <div class="max-w-2xl mx-auto"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php } ?>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <?php if (!empty($data['left'])) : ?>
            <div class="grid grid-cols-2 gap-6">
                <?php foreach ($data['left'] as $item) : ?>
                    <div class="relative rounded-2xl overflow-hidden h-64 group hover:shadow-xl transition-all duration-300 [&_.overlay]:opacity-80 [&_.overlay]:group-hover:opacity-90 [&_.text-content]:z-20">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent z-10 transition-opacity duration-300"></div>
                        <!-- Background slika -->
                        <img 
                            src="<?php echo $item['image']['url']; ?>" 
                            alt="<?php echo $item['image']['alt']; ?>" 
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        >
                        <div class="text-content relative z-10 p-6 text-white flex flex-col justify-between h-full transition-opacity duration-300">
                            <div>
                                <i class="fas fa-<?php echo $item['icon']; ?> text-3xl mb-4 text-white/90"></i>
                                <h3 class="text-xl text-white font-bold mb-2"><?php echo $item['title']; ?></h3>
                            </div>

                            <a href="#" class="inline-flex items-center font-semibold group/link text-white/90 hover:text-white">
                                <?php echo $item['link']['title']; ?>
                                <i class="fas fa-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <!-- Right Column - Details -->
            <div class="flex flex-col justify-center">
                <?php if (!empty($right['title'])) : ?>
                <h3 class="h3-responsive mt-2 mb-6"><?php echo $right['title']; ?></h3>
                <?php endif; ?>
                <?php if (!empty($right['description'])) : ?>
                <div class="mb-8"><?php echo apply_filters('the_content', $right['description']); ?></div>
                <?php endif; ?>
                
                <div class="space-y-6">
                    <?php if (!empty($right['items'])) : ?>
                    <?php foreach ($right['items'] as $item) : ?>
                    <div class="flex items-center">
                        <?php if (!empty($item['icon'])) : ?>
                        <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-<?php echo $item['icon']; ?> text-primary text-xl"></i>
                        </div>
                        <?php endif; ?>
                        <div>
                            <h4 class="h4-responsive mt-2 mb-1"><?php echo $item['title']; ?></h4>
                            <?php if (!empty($item['description'])) : ?>
                            <div><?php echo apply_filters('the_content', $item['description']); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                
                <div class="mt-8">
                    <?php if (!empty($right['button'])) : ?>
                    <?php link_1($right['button']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Sekcija -->
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('popular_3');
?>
<style>
    .popular-2-<?php echo esc_attr($blocks_id); ?> {
        background-color: <?php echo $data['background_color'] ?? "#ffffff" ?>;
    }
</style>
<!-- Popular Tours Section -->
<section class="py-8 sm:py-12 lg:py-18 popular-2-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
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
                                    <a href="<?php echo $item['tag']['url']; ?>" class="text-sm text-white bg-black bg-opacity-50 px-2 py-1 rounded-xl" aria-label="View all <?php echo $item['tag']['title']; ?> tours">
                                        <?php echo $item['tag']['title']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <!-- Naslov - dole levo -->
                            <?php if (!empty($item['title'])): ?>
                                <div class="absolute bottom-0 left-0 w-full">
                                    <h3 class="font-semibold text-lg text-white bg-dark bg-opacity-20 backdrop-blur-md px-3 py-2 rounded">
                                        <?php echo $item['title']; ?>
                                    </h3>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-2">
                                <?php if (!empty($item['time'])): ?>
                                    <span class="inline-flex items-center text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                                            <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512 256 256 0 1 1 0-512zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                        </svg>
                                        <span class="font-semibild"><?php echo $item['time']; ?></span>
                                    </span>

                                <?php endif; ?>
                                <?php if (!empty($item['price'])): ?>
                                    <span class="text-primary font-semibold"><?php echo $item['price']; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($item['description'])): ?>
                                <div class="mb-4 content-list-link"><?php echo apply_filters('the_content', $item['description']); ?></div>
                            <?php endif; ?>
                            <?php if (!empty($item['link'])): ?>

                                <a href="<?php echo esc_url($item['link']['url']); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent hover:!text-white hover:bg-primary h-9 rounded-md px-4">
                                    <?php echo esc_html($item['link']['title']); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="w-3 h-3">
                                        <path fill="currentColor" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-105.4 105.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg>
                                </a>

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
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('features_1');
?>

<style>
    .features-1-<?php echo esc_attr($blocks_id); ?> {
        background-color: <?php echo $data['background_color'] ?? "#ffffffff" ?>;
    }
</style>
<section id="destinations" class="py-8 sm:py-12 lg:py-18 features-1-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="container mx-auto flex flex-col items-center justify-center">
        <div class="text-center mb-16 animate-fade-up">
            <?php if ($data['top_title']) : ?>
                <span class="maxwell-top-title"><?php echo esc_html($data['top_title']); ?></span>
            <?php endif; ?>

            <?php if ($data['title']) : ?>
                <h2 class="h2-responsive"><?php echo esc_html($data['title']); ?></h2>
            <?php endif; ?>

            <?php if ($data['description']) : ?>
                <div class="content-list-link"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
        </div>
        <?php if ($data['items']) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($data['items'] as $item) : ?>
                    <div class="bg-white rounded-2xl overflow-hidden hover:-translate-y-1 transition-transform text-primary">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <?php if ($item['rating']) : ?>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-secondary text-secondary">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <span class="font-semibold "><?php echo esc_html($item['rating']); ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($item['duration']) : ?>
                                    <div class="flex items-center gap-1 text-sm text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        <span><?php echo $item['duration']; ?></span>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <h3 class="text-primary text-xl font-bold mb-2"><?php echo esc_html($item['name']); ?></h3>
                            <p class="mb-4"><?php echo esc_html($item['description']); ?></p>
                            <?php if (! empty($item['places'])): ?>
                                <ul class="space-y-2 mb-6">
                                    <?php foreach ($item['places'] as $place): ?>
                                        <li class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4 text-secondary">
                                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            <?php echo $place['name']; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <div class="flex items-center justify-between pt-4 border-t border-border/50">

                                <?php if ($item['price']) : ?>
                                    <span class="text-primary text-2xl font-bold"><?php echo esc_html($item['price']); ?></span>
                                <?php endif; ?>

                                <?php if ($item['link']) : ?>
                                    <a href="<?php echo esc_url($item['link']['url']); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent hover:bg-primary h-9 rounded-md px-4">
                                        <?php echo esc_html($item['link']['title']); ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
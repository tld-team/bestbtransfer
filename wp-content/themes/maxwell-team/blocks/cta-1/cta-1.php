<!-- Hero Sekcija -->
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('cta_1');
$bg_image = get_image($data['background_image']);
?>

<section class="pb-8 sm:pb-12 lg:pb-18 relative overflow-hidden">

    <!-- Wrapper za pozadinsku sliku -->
    <div class="absolute inset-0 overflow-hidden">
        <img
            class="sticky top-0 w-full h-full object-cover"
            src="<?php echo esc_url($bg_image['url']); ?>"
            srcset="<?php echo $bg_image['srcset']; ?>"
            sizes="100vw"
            alt="<?php echo $bg_image['alt']; ?>"
            loading="lazy"
            decoding="async"
            width="1920"
            height="360"
            style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);" />
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Sadržaj -->
    <div class="relative z-20 flex items-center justify-center py-[100px] sm:py-[140px]">

        <div class="text-center text-white max-w-4xl mx-auto px-4">
            <?php if ($data['title']) : ?>
                <h1 class="h1-responsive mb-6"><?php echo esc_html($data['title']); ?></h1>
            <?php endif; ?>
            <?php if ($data['description']) : ?>
                <div class="text-xl mb-8"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
        </div>
    </div>

</section>
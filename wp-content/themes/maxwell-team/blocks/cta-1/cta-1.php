<!-- Hero Sekcija -->
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('cta_1');
$bg_image = get_image($data['background_image']);
?>

<section class="relative overflow-hidden">

    <!-- Wrapper za pozadinsku sliku -->
    <div class="absolute inset-0 overflow-hidden">
        <img
            class="sticky top-0 w-full h-full object-cover"
            src="<?php echo esc_url($bg_image['url']); ?>"
            srcset="<?php echo $bg_image['srcset']; ?>"
            sizes="100vw"
            alt="Pozadinska slika planine"
            loading="lazy"
            decoding="async"
            width="1200"
            height="500"
            style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);" />
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Sadržaj -->
    <div class="relative z-20 flex items-center justify-center py-[150px] sm:py-[250px]">

        <div class="text-center text-white max-w-4xl mx-auto px-4">
            <?php if ($data['title']) : ?>
                <h2 class="text-5xl font-bold mb-6"><?php echo esc_html($data['title']); ?></h2>
            <?php endif; ?>
            <?php if ($data['description']) : ?>
                <div class="text-xl mb-8"><?php echo apply_filters('the_content', $data['description']); ?></div>
            <?php endif; ?>
            <?php if ($data['link_1']) : ?>
                <?php link_1($data['link_1']); ?>
                <?php link_2($data['link_2']); ?>
            <?php endif; ?>
        </div>
    </div>

</section>
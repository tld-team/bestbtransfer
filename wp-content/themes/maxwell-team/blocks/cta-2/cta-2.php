
<!-- Hero Sekcija -->
 <?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
?>

<!-- Booking CTA Section -->
    <section class="py-4 sm:py-6 lg:py-8 bg-background cta-2-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="h2-responsive mb-4">Ready to Book Your Ride?</h2>
                <p class="text-lg mb-8 opacity-90">Get a quick quote or book directly through our easy-to-use booking system. We're here to make your travel seamless.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="bg-secondary text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-amber-500 transition">Book Now</a>
                    <a href="#" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>
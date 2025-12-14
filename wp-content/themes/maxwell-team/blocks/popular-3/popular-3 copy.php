<!-- Dodajte Swiper CSS i JS u header/footer vašeg sajta -->
<!-- U header delu: -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Na kraju body taga: -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Vaš Swiper HTML/PHP kod: -->
<div class="relative">
    <div class="swiper toursSwiper">
        <div class="swiper-wrapper">
            <?php if (!empty($data['items'])) : ?>
                <?php foreach ($data['items'] as $item) : ?>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition h-full">
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
                                        <h3 class="font-semibold text-lg text-white bg-dark bg-opacity-20 backdrop-blur-md px-3 py-2">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3">
                                            <path fill="currentColor" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-105.4 105.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <!-- Navigation buttons -->
        <div class="swiper-button-next !text-primary"></div>
        <div class="swiper-button-prev !text-primary"></div>
        
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- JavaScript za inicijalizaciju Swiper-a -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Provera da li Swiper već postoji
    if (typeof Swiper !== 'undefined') {
        const toursSwiper = new Swiper('.toursSwiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            
            // Responsive breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 24
                }
            },
            
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            
            // Additional options
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            
            // Accessibility
            a11y: {
                prevSlideMessage: 'Previous slide',
                nextSlideMessage: 'Next slide',
                firstSlideMessage: 'This is the first slide',
                lastSlideMessage: 'This is the last slide',
                paginationBulletMessage: 'Go to slide {{index}}',
            },
            
            // Touch interactions
            touchEventsTarget: 'container',
            allowTouchMove: true,
            resistance: true,
            resistanceRatio: 0.85,
            
            // Speed
            speed: 600,
            
            // Effects
            effect: 'slide', // može biti 'fade', 'cube', 'coverflow', 'flip'
            
            // Observer
            observer: true,
            observeParents: true,
            observeSlideChildren: true,
        });
        
        // Pauziranje autoplay na hover
        toursSwiper.el.addEventListener('mouseenter', function() {
            toursSwiper.autoplay.stop();
        });
        
        toursSwiper.el.addEventListener('mouseleave', function() {
            toursSwiper.autoplay.start();
        });
    } else {
        console.error('Swiper nije učitan. Proverite da li su Swiper CSS i JS linkovi dodati.');
    }
});
</script>

<!-- Dodajte ovaj CSS za dodatne stilove -->
<style>
.toursSwiper {
    padding: 20px 10px 50px 10px;
    margin: -20px -10px;
}

.swiper-slide {
    height: auto;
}

.swiper-button-next,
.swiper-button-prev {
    background-color: rgba(255, 255, 255, 0.8);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 20px;
    font-weight: bold;
}

.swiper-button-next {
    right: 10px;
}

.swiper-button-prev {
    left: 10px;
}

.swiper-pagination {
    bottom: 10px !important;
}

.swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background-color: #ccc;
    opacity: 1;
}

.swiper-pagination-bullet-active {
    background-color: var(--primary-color, #007bff);
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .swiper-button-next,
    .swiper-button-prev {
        display: none;
    }
    
    .toursSwiper {
        padding: 10px 5px 40px 5px;
        margin: -10px -5px;
    }
}
</style>
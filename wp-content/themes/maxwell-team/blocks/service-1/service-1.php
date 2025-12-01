
<!-- Hero Sekcija -->
 <?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
?>

<!-- Services Section - Version 1 -->
<section class="py-10 sm:py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold">OUR SERVICES</span>
            <h2 class="h2-responsive mt-2 mb-4">Premium Transfer Solutions</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">We offer a comprehensive range of transfer services designed for comfort, reliability, and luxury.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="service-card bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-globe-europe text-white text-2xl"></i>
                </div>
                <h3 class="h3-responsive mt-2 mb-2">International Trips</h3>
                <p class="text-gray-600 mb-6">Cross-border journeys to neighboring countries with professional multilingual drivers.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Multiple border crossings</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Multilingual drivers</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Custom itineraries</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center text-primary font-semibold group">
                    Learn more
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                </div>
                <h3 class="h3-responsive mt-2 mb-2">Countrywide Service</h3>
                <p class="text-gray-600 mb-6">Travel anywhere in Slovenia with our reliable and comfortable transfer services.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>All regions covered</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Flexible scheduling</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Local expertise</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center text-primary font-semibold group">
                    Learn more
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </a>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-plane-departure text-white text-2xl"></i>
                </div>
                <h3 class="h3-responsive mb-4">Airport Transfers</h3>
                <p class="text-gray-600 mb-6">Timely and comfortable transfers to and from Ljubljana Airport and regional airports.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Flight tracking</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Meet & greet service</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Luggage assistance</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center text-primary font-semibold group">
                    Learn more
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </a>
            </div>
            
            <!-- Service 4 -->
            <div class="service-card bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-landmark text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Popular Destinations</h3>
                <p class="text-gray-600 mb-6">Explore Slovenia's most beautiful locations with our guided transfer services.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Curated routes</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Photo stops</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Local insights</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center text-primary font-semibold group">
                    Learn more
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </a>
            </div>
            
            <!-- Service 5 -->
            <div class="service-card bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-wine-glass-alt text-white text-2xl"></i>
                </div>
                <h3 class="h3-responsive mb-4">Wine Tours</h3>
                <p class="text-gray-600 mb-6">Experience Slovenia's renowned wine regions with our specialized wine tour services.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Vineyard visits</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Tastings included</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Sommelier guides</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center text-primary font-semibold group">
                    Learn more
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </a>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-crown text-white text-2xl"></i>
                </div>
                <h3 class="h3-responsive mb-4">VIP Services</h3>
                <p class="text-gray-600 mb-6">Premium vehicles and personalized services for special occasions and business needs.</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Luxury vehicles</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Personal chauffeur</span>
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check text-primary mr-2"></i>
                        <span>Custom amenities</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center text-primary font-semibold group">
                    Learn more
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Hero Sekcija -->
 <?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
?>

<!-- 1. Lokalni SEO sekcija - Service Area -->
    <section class="py-10 sm:py-16 lg:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold">SERVICE AREA</span>
                <h2 class="h2-responsive mt-2 mb-4">Serving Ljubljana & Beyond</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">We provide premium transfer services throughout Ljubljana and all major destinations in Slovenia and neighboring countries.</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="h3-responsive mb-6">Coverage Areas</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h4 class="h4-responsive mb-3 text-primary">Ljubljana Areas</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>City Center</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Bežigrad</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Šiška</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Moste</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Vič</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="h4-responsive mb-3 text-primary">Popular Destinations</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Bled</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Bohinj</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Postojna</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Piran</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary mr-2 text-sm"></i>
                                    <span>Maribor</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                        <h4 class="h4-responsive mb-2">International Transfers</h4>
                        <p class="text-gray-600 mb-4">We also serve cross-border destinations including:</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Zagreb, Croatia</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Trieste, Italy</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Klagenfurt, Austria</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Budapest, Hungary</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-8 text-white">
                    <h3 class="h3-responsive mb-4">Not Sure If We Cover Your Area?</h3>
                    <p class="mb-6 opacity-90">Contact us directly to check if we can serve your specific location. We're constantly expanding our service areas.</p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-3"></i>
                            <span>Free area verification</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-3"></i>
                            <span>Quick response within 1 hour</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-3"></i>
                            <span>Special quotes for new areas</span>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center bg-white text-primary px-6 py-3 rounded-xl font-semibold mt-6 hover:bg-gray-100 transition">
                        <i class="fas fa-phone-alt mr-2"></i> Contact Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
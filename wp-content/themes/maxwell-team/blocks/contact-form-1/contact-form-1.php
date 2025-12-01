
<!-- Hero Sekcija -->
 <?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
?>
<!-- 5. Call to Action sa formom -->
    <section class="py-8 sm:py-12 lg:py-18 bg-gradient-to-r from-primary to-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="h2-responsive mb-6">Get a Personalized Quote</h2>
                        <p class="text-xl mb-8 opacity-90">Tell us about your travel needs, and we'll provide you with a customized quote for your transfer service.</p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-3 text-xl"></i>
                                <span class="text-lg">No obligation quote</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-3 text-xl"></i>
                                <span class="text-lg">Response within 2 hours</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-3 text-xl"></i>
                                <span class="text-lg">Best price guarantee</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 text-dark shadow-2xl">
                        <h3 class="h3-responsive mb-6 text-center">Quick Quote Request</h3>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-gray-700 mb-2">Full Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Email Address</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Service Type</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option>Airport Transfer</option>
                                    <option>International Trip</option>
                                    <option>City Tour</option>
                                    <option>Wine Tour</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 mb-2">Pickup Location</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="City or address">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2">Destination</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="City or address">
                                </div>
                            </div>
                            <button type="submit" class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition mt-4">
                                Get My Quote
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
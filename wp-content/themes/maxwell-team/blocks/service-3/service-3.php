
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('service_2');
$right = $data['right'];
?>

<!-- Sekcija sa Uslugama -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Naše Usluge</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Otkrijte sve što vam je potrebno za savršeno putovanje kroz čarobnu Sloveniju</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Usluga 1 - Smeštaj -->
            <div class="relative overflow-hidden rounded-xl shadow-lg h-96 group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                        alt="Smeštaj u Sloveniji" 
                        class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 text-white z-10">
                    <div class="w-14 h-14 rounded-full bg-white bg-opacity-90 flex items-center justify-center mb-4">
                        <i class="fas fa-hotel text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Smeštaj</h3>
                    <p class="mb-4 text-gray-200">Pronađite idealne hotele, apartmane i vikendice širom Slovenije po najboljim cenama.</p>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                        Saznajte više
                    </button>
                </div>
            </div>
            
            <!-- Usluga 2 - Ture i Izleti -->
            <div class="relative overflow-hidden rounded-xl shadow-lg h-96 group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1579613839400-4df8f1015b01?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                        alt="Ture i izleti u Sloveniji" 
                        class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 text-white z-10">
                    <div class="w-14 h-14 rounded-full bg-white bg-opacity-90 flex items-center justify-center mb-4">
                        <i class="fas fa-map-marked-alt text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Ture i Izleti</h3>
                    <p class="mb-4 text-gray-200">Organizovane ture sa lokalnim vodičima kroz najlepše destinacije u Sloveniji.</p>
                    <button class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                        Saznajte više
                    </button>
                </div>
            </div>
            
            <!-- Usluga 3 - Rent-a-Car -->
            <div class="relative overflow-hidden rounded-xl shadow-lg h-96 group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                        alt="Rent-a-car usluge u Sloveniji" 
                        class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 text-white z-10">
                    <div class="w-14 h-14 rounded-full bg-white bg-opacity-90 flex items-center justify-center mb-4">
                        <i class="fas fa-car text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Rent-a-Car</h3>
                    <p class="mb-4 text-gray-200">Iznajmljivanje vozila za istraživanje Slovenije sopstvenim tempom.</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                        Saznajte više
                    </button>
                </div>
            </div>
            
            <!-- Usluga 4 - Aktivnosti -->
            <div class="relative overflow-hidden rounded-xl shadow-lg h-96 group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                        alt="Aktivnosti u Sloveniji" 
                        class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 text-white z-10">
                    <div class="w-14 h-14 rounded-full bg-white bg-opacity-90 flex items-center justify-center mb-4">
                        <i class="fas fa-hiking text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Aktivnosti</h3>
                    <p class="mb-4 text-gray-200">Rezervišite avanture poput planinarenja, raftinga, skijanja i još mnogo toga.</p>
                    <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                        Saznajte više
                    </button>
                </div>
            </div>
            
            <!-- Usluga 5 - Gastro Ture -->
            <div class="relative overflow-hidden rounded-xl shadow-lg h-96 group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                        alt="Gastro ture u Sloveniji" 
                        class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 text-white z-10">
                    <div class="w-14 h-14 rounded-full bg-white bg-opacity-90 flex items-center justify-center mb-4">
                        <i class="fas fa-utensils text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Gastro Ture</h3>
                    <p class="mb-4 text-gray-200">Otkrijte autentične slovenačke specijalitete i vina na vodičem vođenim gastro turama.</p>
                    <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                        Saznajte više
                    </button>
                </div>
            </div>
            
            <!-- Usluga 6 - Wellness i Odmor -->
            <div class="relative overflow-hidden rounded-xl shadow-lg h-96 group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                        alt="Wellness i odmor u Sloveniji" 
                        class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 text-white z-10">
                    <div class="w-14 h-14 rounded-full bg-white bg-opacity-90 flex items-center justify-center mb-4">
                        <i class="fas fa-spa text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Wellness i Odmor</h3>
                    <p class="mb-4 text-gray-200">Opustite se u termalnim banjama i wellness centrima širom Slovenije.</p>
                    <button class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                        Saznajte više
                    </button>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-700 hover:to-green-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-lg">
                Pogledajte Sve Usluge
            </button>
        </div>
    </div>
</section>
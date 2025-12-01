
<?php
$blocks_id = $block['id'];
$blocks_class = isset($block['class']) ? $block['class'] : '';
$anchor = isset($block['anchor']) ? $block['anchor'] : $blocks_id;
$data = get_field('pricing_table');
?>
<style>
    @media (max-width: 768px) {
        .mobile-card {
            display: block;
        }
        .pricing-table {
            display: none;
        }
    }
</style>

<!-- Pricing Table -->
<div class="bg-white rounded-2xl shadow-xl overflow-hidden py-10 sm:py-16 lg:py-24 pricing-table-<?php echo esc_attr($blocks_id); ?> <?php echo esc_attr($blocks_class); ?>" id="<?php echo esc_attr($anchor); ?>">
    <!-- Table -->
    <div class="overflow-x-auto pricing-table">
        <table class="w-full">
            <thead>
                <tr class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
                    <th class="py-4 px-6 text-left font-semibold sticky-header">Ruta / Destinacija</th>
                    <th class="py-4 px-6 text-center font-semibold sticky-header">Udaljenost & Vreme</th>
                    <th class="py-4 px-6 text-center font-semibold sticky-header">Cena</th>
                    <th class="py-4 px-6 text-center font-semibold sticky-header">Cena po km</th>
                    <th class="py-4 px-6 text-center font-semibold sticky-header">Rezerviraj</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Letališče transfers -->
                <tr class="bg-blue-50">
                    <td colspan="5" class="py-3 px-6 font-bold text-blue-800">
                        <i class="fas fa-plane-departure mr-2"></i>Letališče Transfers
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Ljubljana → Letališče Brnik</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~20 km</div>
                        <div class="text-sm text-gray-500">~25 min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">35 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.75 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Bled → Letališče Brnik</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~35 km</div>
                        <div class="text-sm text-gray-500">~35 min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">60 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.71 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                
                <!-- Medkrajevni transfers -->
                <tr class="bg-green-50">
                    <td colspan="5" class="py-3 px-6 font-bold text-green-800">
                        <i class="fas fa-route mr-2"></i>Medkrajevni Transfers
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Ljubljana → Bled</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~55 km</div>
                        <div class="text-sm text-gray-500">~45 min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">85 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.55 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Ljubljana → Postojnska jama</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~50 km</div>
                        <div class="text-sm text-gray-500">~45 min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">80 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.60 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Ljubljana → Portorož</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~120 km</div>
                        <div class="text-sm text-gray-500">~1h 15min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">150 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.25 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                
                <!-- Meddržavni transfers -->
                <tr class="bg-purple-50">
                    <td colspan="5" class="py-3 px-6 font-bold text-purple-800">
                        <i class="fas fa-globe-europe mr-2"></i>Meddržavni Transfers
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Ljubljana → Zagreb (HR)</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~140 km</div>
                        <div class="text-sm text-gray-500">~1h 30min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">180 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.29 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Bled → Dunaj (AT)</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~400 km</div>
                        <div class="text-sm text-gray-500">~4h</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">450 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.13 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="font-medium">Ljubljana → Trst (IT)</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">~100 km</div>
                        <div class="text-sm text-gray-500">~1h 15min</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="font-bold text-xl text-blue-600">130 €</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="text-gray-700">1.30 €/km</div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition-colors text-sm font-medium">
                            Rezerviraj
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Mobile Cards (hidden on desktop) -->
    <div class="mobile-card p-6 space-y-6">
        <!-- Airport Transfers Mobile -->
        <div class="bg-blue-50 rounded-xl p-4">
            <h3 class="font-bold text-blue-800 text-lg mb-4">
                <i class="fas fa-plane-departure mr-2"></i>Letališče Transfers
            </h3>
            
            <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                <h4 class="font-semibold">Ljubljana → Letališče Brnik</h4>
                <p class="text-sm text-gray-500 mb-2">~20 km | ~25 min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">35 €</span>
                    <span class="text-gray-700">1.75 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-4">
                <h4 class="font-semibold">Bled → Letališče Brnik</h4>
                <p class="text-sm text-gray-500 mb-2">~35 km | ~35 min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">60 €</span>
                    <span class="text-gray-700">1.71 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
        </div>
        
        <!-- Intercity Transfers Mobile -->
        <div class="bg-green-50 rounded-xl p-4">
            <h3 class="font-bold text-green-800 text-lg mb-4">
                <i class="fas fa-route mr-2"></i>Medkrajevni Transfers
            </h3>
            
            <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                <h4 class="font-semibold">Ljubljana → Bled</h4>
                <p class="text-sm text-gray-500 mb-2">~55 km | ~45 min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">85 €</span>
                    <span class="text-gray-700">1.55 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                <h4 class="font-semibold">Ljubljana → Postojnska jama</h4>
                <p class="text-sm text-gray-500 mb-2">~50 km | ~45 min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">80 €</span>
                    <span class="text-gray-700">1.60 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-4">
                <h4 class="font-semibold">Ljubljana → Portorož</h4>
                <p class="text-sm text-gray-500 mb-2">~120 km | ~1h 15min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">150 €</span>
                    <span class="text-gray-700">1.25 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
        </div>
        
        <!-- International Transfers Mobile -->
        <div class="bg-purple-50 rounded-xl p-4">
            <h3 class="font-bold text-purple-800 text-lg mb-4">
                <i class="fas fa-globe-europe mr-2"></i>Meddržavni Transfers
            </h3>
            
            <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                <h4 class="font-semibold">Ljubljana → Zagreb (HR)</h4>
                <p class="text-sm text-gray-500 mb-2">~140 km | ~1h 30min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">180 €</span>
                    <span class="text-gray-700">1.29 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                <h4 class="font-semibold">Bled → Dunaj (AT)</h4>
                <p class="text-sm text-gray-500 mb-2">~400 km | ~4h</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">450 €</span>
                    <span class="text-gray-700">1.13 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-4">
                <h4 class="font-semibold">Ljubljana → Trst (IT)</h4>
                <p class="text-sm text-gray-500 mb-2">~100 km | ~1h 15min</p>
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-blue-600 text-lg">130 €</span>
                    <span class="text-gray-700">1.30 €/km</span>
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors text-sm font-medium">
                    Rezerviraj
                </button>
            </div>
        </div>
    </div>
</div>
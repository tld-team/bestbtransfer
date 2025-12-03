
    <footer class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-fist-raised text-red-600 mr-2"></i> MMA Borci
                    </h3>
                    <p class="text-text-gray-900">
                        Najveća baza podataka o MMA borcima na Balkanu. Informacije, statistike i vesti iz sveta mešovitih borilačkih veština.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Brzi linkovi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-text-gray-900 transition">Početna</a></li>
                        <li><a href="#" class="text-text-gray-900 transition">Borci</a></li>
                        <li><a href="#" class="text-text-gray-900 transition">Turniri</a></li>
                        <li><a href="#" class="text-text-gray-900 transition">Vesti</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Organizacije</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-text-gray-900 transition">UFC</a></li>
                        <li><a href="#" class="text-text-gray-900 transition">Bellator</a></li>
                        <li><a href="#" class="text-text-gray-900 transition">ONE Championship</a></li>
                        <li><a href="#" class="text-text-gray-900 transition">PFL</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="section-divider my-8"></div>
            
            <div class="text-center text-text-gray-900">
                <p>&copy; 2023 MMA Borci. Sva prava zadržana.</p>
            </div>
        </div>
    </footer>
<!-- </div>#page -->

<?php wp_footer(); ?>

<script>
    // Mobile menu toggle functionality
    document.addEventListener('DOMContentLoaded', function() {        
        // Navigation 4
        const menu4Toggle = document.getElementById('menu4-toggle');
        const menu4 = document.getElementById('menu4');
        
        menu4Toggle.addEventListener('click', function() {
            menu4.classList.toggle('open');
        });
    });
    
    // Mobile dropdown toggle functionality
    function toggleMobileDropdown(button) {
        const dropdown = button.parentElement;
        dropdown.classList.toggle('open');
        
        // Rotate the chevron icon
        const icon = button.querySelector('i');
        if (dropdown.classList.contains('open')) {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    }
</script>
</body>
</html>

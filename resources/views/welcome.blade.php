<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-lg h-[400px] bg-primary-500/20 rounded-full blur-[120px] mix-blend-screen pointer-events-none"></div>
        </div>

        <div class="container-app relative z-10 text-center mx-auto px-4">
            <x-ui.badge type="primary" class="mb-6 px-4 py-1.5 text-sm inline-flex">
                <span class="mr-2">🚀</span> Codeafebri v2.0 - Platform Belajar & Bikin Project
            </x-ui.badge>
            
            <h1 class="text-5xl md:text-7xl font-heading font-extrabold tracking-tight mb-6 leading-tight">
                Build real projects.<br />
                <span class="text-gradient">Ship real products.</span>
            </h1>
            
            <p class="mt-6 text-xl text-neutral-400 max-w-2xl mx-auto leading-relaxed">
                Platform digital personal milik Febri. Belajar development dari kasus nyata, beli source code berkualitas, atau pesan website custom.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <x-ui.button variant="primary" size="lg" class="shadow-[0_0_20px_rgba(234,179,8,0.3)]">
                    Lihat Produk
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </x-ui.button>
                <x-ui.button variant="ghost" size="lg">
                    Mulai Belajar Kursus
                </x-ui.button>
            </div>
            
            <!-- Tech Stack Display placeholder -->
            <div class="mt-20 border-t border-dark-700 pt-10">
                <p class="text-sm font-medium text-neutral-500 uppercase tracking-widest mb-8">Memanfaatkan Teknologi Modern</p>
                <div class="flex flex-wrap justify-center gap-8 md:gap-16 grayscale opacity-60">
                    <div class="h-8 flex items-center tracking-widest font-heading font-bold">LARAVEL</div>
                    <div class="h-8 flex items-center tracking-widest font-heading font-bold">TAILWIND</div>
                    <div class="h-8 flex items-center tracking-widest font-heading font-bold">ALPINE.JS</div>
                    <div class="h-8 flex items-center tracking-widest font-heading font-bold">XENDIT</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlighted Categories Placeholder -->
    <section class="section bg-dark-800/50">
        <div class="container-app mx-auto">
            <h2 class="text-3xl font-heading font-bold text-center mb-16">Apa yang ingin kamu buat hari ini?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Website Block -->
                <x-ui.card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 bg-dark-900 border-b border-dark-700 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-primary-500/20 text-primary-500 flex items-center justify-center">
                            🌐
                        </div>
                    </div>
                    <h3 class="text-lg font-heading font-bold mt-2">Template Website</h3>
                    <p class="text-sm text-neutral-400 mt-2">Source code landing page, dashboard, dan toko online siap pakai.</p>
                </x-ui.card>
                
                <!-- Mobile Block -->
                <x-ui.card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 bg-dark-900 border-b border-dark-700 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-info/20 text-info flex items-center justify-center">
                            📱
                        </div>
                    </div>
                    <h3 class="text-lg font-heading font-bold mt-2">Aplikasi Mobile</h3>
                    <p class="text-sm text-neutral-400 mt-2">Source code Flutter & React Native untuk iOS & Android.</p>
                </x-ui.card>
                
                <!-- Course Block -->
                <x-ui.card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 bg-dark-900 border-b border-dark-700 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-success/20 text-success flex items-center justify-center">
                            🎥
                        </div>
                    </div>
                    <h3 class="text-lg font-heading font-bold mt-2">Video Course</h3>
                    <p class="text-sm text-neutral-400 mt-2">Belajar lewat project nyata (project-based learning).</p>
                </x-ui.card>
                
                <!-- Custom Order Block -->
                <x-ui.card class="hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-48 bg-dark-900 border-b border-dark-700 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-warning/20 text-warning flex items-center justify-center">
                            🤝
                        </div>
                    </div>
                    <h3 class="text-lg font-heading font-bold mt-2">Custom Order</h3>
                    <p class="text-sm text-neutral-400 mt-2">Pesan aplikasi khusus atau website sesuai kebutuhan unikmu.</p>
                </x-ui.card>
            </div>
        </div>
    </section>
</x-layouts.app>

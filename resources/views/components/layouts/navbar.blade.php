<nav class="sticky top-0 z-50 w-full backdrop-blur-lg bg-dark-950/80 border-b divider">
    <div class="container-app mx-auto flex items-center justify-between h-16">
        <!-- Logo -->
        <a href="/" class="text-xl font-heading font-bold text-neutral-100 transition-transform hover:scale-105">
            Codea<span class="text-primary-500 glow-primary">febri</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-6">
            <a href="#" class="text-sm font-medium text-neutral-300 hover:text-primary-500 transition-colors">Products</a>
            <a href="#" class="text-sm font-medium text-neutral-300 hover:text-primary-500 transition-colors">Courses</a>
            <a href="#" class="text-sm font-medium text-neutral-300 hover:text-primary-500 transition-colors">Custom Order</a>
            <a href="#" class="text-sm font-medium text-neutral-300 hover:text-primary-500 transition-colors">Portofolio</a>
        </div>

        <div class="hidden md:flex items-center gap-4">
            @auth
                <a href="{{ route('dashboard') }}" class="text-sm font-medium text-neutral-300 hover:text-primary-500 transition-colors">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-ghost text-sm">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary text-sm">Sign up</a>
                @endif
            @endauth
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden p-2 text-neutral-300 hover:text-primary-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</nav>

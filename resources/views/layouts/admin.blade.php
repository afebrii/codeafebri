<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - {{ config('app.name', 'Codeafebri') }}</title>

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-900 text-neutral-300 font-body antialiased min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-dark-800 border-r border-dark-700 hidden md:block shrink-0 h-screen sticky top-0">
        <div class="p-6">
            <a href="/" class="text-xl font-heading font-bold text-neutral-100 glow-primary block">
                Codea<span class="text-primary-500">febri</span>
            </a>
            <p class="text-xs text-neutral-500 mt-1">Admin Panel</p>
        </div>
        
        <nav class="px-4 py-2 flex flex-col gap-1">
            <a href="{{ route('dashboard') }}" class="px-4 py-3 text-sm rounded-lg flex items-center gap-3 transition-colors {{ request()->routeIs('dashboard') ? 'bg-primary-500/10 text-primary-500 font-medium' : 'text-neutral-400 hover:bg-dark-700 hover:text-neutral-100' }}">
                Dashboard
            </a>
            <!-- Tambahkan menu admin lainnya di sini -->
        </nav>
    </aside>

    <div class="flex-1 flex flex-col min-h-screen relative overflow-hidden">
        <!-- Top navbar -->
        <header class="h-16 bg-dark-800/80 backdrop-blur border-b border-dark-700 flex items-center justify-between px-6 sticky top-0 z-10">
            <div class="flex items-center gap-3">
                <button class="md:hidden text-neutral-400 hover:text-neutral-100">
                    <!-- Hamburger icon here -->
                    Menu
                </button>
                <h2 class="font-heading font-medium text-neutral-100">
                    {{ $header ?? 'Dashboard' }}
                </h2>
            </div>
            
            <div class="flex items-center gap-4">
                <span class="text-sm font-medium text-neutral-300">{{ Auth::user()->name ?? 'Admin' }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-neutral-500 hover:text-danger hover:underline">
                        Log Out
                    </button>
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6 relative">
            <div class="max-w-6xl mx-auto space-y-6">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>

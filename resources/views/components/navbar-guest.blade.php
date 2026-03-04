<nav class="glass-navbar fixed w-full z-50 px-10 py-5 flex justify-between items-center">

    <h1 class="text-2xl font-semibold accent-text soft-glow">
        PlantCare
    </h1>

    <div class="space-x-8 hidden md:flex items-center">
        <a href="#features" class="nav-link">Features</a>
        <a href="#about" class="nav-link">About</a>
        <a href="{{ route('login') }}" class="nav-link">Login</a>

        <a href="{{ route('register') }}"
           class="px-5 py-2 rounded-xl btn-modern">
            Get Started
        </a>
    </div>

</nav>
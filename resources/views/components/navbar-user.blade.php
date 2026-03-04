<nav class="glass-navbar fixed w-full z-50 px-10 py-4 flex justify-between items-center border-b border-green-500/20">

    <div class="text-2xl font-bold neon-text">
        🌿 PlantCare
    </div>

    <div class="space-x-8">
        <a href="/schedule" class="hover:text-green-400 transition duration-300">
            Maintenance
        </a>

        <a href="/growth" class="hover:text-green-400 transition duration-300">
            Track Growth
        </a>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button class="px-5 py-2 border border-red-500 rounded-lg hover:bg-red-500 hover:text-black transition duration-300">
                Logout
            </button>
        </form>
    </div>
</nav>
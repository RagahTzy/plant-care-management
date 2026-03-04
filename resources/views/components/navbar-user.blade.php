<nav class="bg-black text-white px-8 py-4 flex justify-between items-center shadow-lg">

    <div class="text-xl font-bold">
        PlantCare
    </div>

    <div class="space-x-6 hidden md:flex">
        <a href="/dashboard" class="hover:text-cyan-400 transition">Dashboard</a>
        <a href="/maintenance" class="hover:text-cyan-400 transition">Maintenance</a>
        <a href="/growth" class="hover:text-cyan-400 transition">Track Growth</a>
    </div>

    <div class="flex items-center space-x-4">
        <span class="text-sm text-gray-400">
            {{ auth()->user()->name }}
        </span>

        <form method="POST" action="/logout">
            @csrf
            <button class="px-4 py-2 border border-red-400 rounded hover:bg-red-500 hover:text-white transition">
                Logout
            </button>
        </form>
    </div>

</nav>
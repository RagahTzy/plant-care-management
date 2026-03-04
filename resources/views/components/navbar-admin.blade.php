<nav class="bg-black text-white px-8 py-4 flex justify-between items-center shadow-lg">

    <div class="text-xl font-bold text-purple-400">
        Admin Panel
    </div>

    <div class="space-x-6 hidden md:flex">
        <a href="/admin/dashboard" class="hover:text-purple-400 transition">Dashboard</a>
        <a href="/admin/users" class="hover:text-purple-400 transition">Manage Users</a>
        <a href="/admin/plants" class="hover:text-purple-400 transition">Manage Plants</a>
        <a href="/admin/reports" class="hover:text-purple-400 transition">Reports</a>
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
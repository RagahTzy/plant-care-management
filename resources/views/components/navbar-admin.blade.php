<nav class="glass-navbar fixed w-full z-50 px-10 py-4 flex justify-between items-center border-b border-purple-500/20">

    <div class="text-2xl font-bold text-purple-400">
        ⚙ Admin Panel
    </div>

    <div class="space-x-8">
        <a href="/dashboard" class="hover:text-purple-400 transition duration-300">
            Dashboard
        </a>

        <a href="/manage-users" class="hover:text-purple-400 transition duration-300">
            Users
        </a>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button class="px-5 py-2 border border-red-500 rounded-lg hover:bg-red-500 hover:text-black transition duration-300">
                Logout
            </button>
        </form>
    </div>
</nav>
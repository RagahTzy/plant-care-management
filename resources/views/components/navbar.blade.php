<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <span class="text-2xl">🌿</span>
            <span class="text-xl font-bold text-green-600">
                PlantCare
            </span>
        </a>

        <!-- Menu -->
        <div class="hidden md:flex space-x-8 text-gray-700 font-medium">

            <a href="{{ route('growth.index') }}" 
               class="hover:text-green-600 transition">
               Track Growth
            </a>

            <a href="{{ route('maintenance.index') }}" 
               class="hover:text-green-600 transition">
               Maintenance Schedule
            </a>

        </div>

        <!-- Login -->
        <div>
            <a href="/login"
               class="bg-green-600 text-white px-5 py-2 rounded-xl hover:bg-green-700 transition">
               Login
            </a>
        </div>

    </div>
</nav>
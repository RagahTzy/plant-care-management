<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PlantCare Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-gray-800">

    <x-navbar />

    <!-- Hero -->
    <section class="text-center py-24 px-6">
        <h1 class="text-5xl font-bold text-green-700 mb-6">
            Smart PlantCare Management
        </h1>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Track plant growth and manage maintenance schedules efficiently
            in one simple platform built with Laravel & PostgreSQL.
        </p>
        <a href="/login"
           class="bg-green-600 text-white px-8 py-3 rounded-xl text-lg shadow-lg hover:bg-green-700 transition">
           Get Started
        </a>
    </section>

    <!-- Features -->
    <section class="bg-white py-20 px-6">
        <h2 class="text-3xl font-bold text-center mb-16 text-green-700">
            Core Features
        </h2>

        <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">

            <div class="p-10 shadow-xl rounded-2xl text-center hover:scale-105 transition duration-300">
                <div class="text-5xl mb-4">🌱</div>
                <h3 class="text-2xl font-bold mb-4 text-green-600">
                    Track Growth
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Record plant height and condition regularly.
                    Monitor development history in a structured database.
                </p>
            </div>

            <div class="p-10 shadow-xl rounded-2xl text-center hover:scale-105 transition duration-300">
                <div class="text-5xl mb-4">💧</div>
                <h3 class="text-2xl font-bold mb-4 text-green-600">
                    Maintenance Schedule
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Organize watering and fertilizing schedules easily.
                    Never miss a plant care routine again.
                </p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 bg-white border-t">
        <p class="text-gray-500">
            © {{ date('Y') }} PlantCare Management.
        </p>
    </footer>

</body>
</html>
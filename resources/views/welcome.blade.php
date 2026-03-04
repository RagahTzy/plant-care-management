<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PlantCare Management</title>
    @vite('resources/css/app.css')

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        .neon-text {
            text-shadow:
                0 0 5px #22c55e,
                0 0 10px #22c55e,
                0 0 20px #16a34a,
                0 0 40px #16a34a;
        }

        .neon-border {
            box-shadow:
                0 0 10px #22c55e,
                0 0 20px rgba(34,197,94,0.5);
        }
    </style>
</head>

<body class="bg-black text-white scroll-smooth">

<x-navbar />

<!-- HERO -->
<section class="min-h-screen flex flex-col justify-center items-center text-center px-6">

    <h1 class="text-6xl font-extrabold neon-text mb-6" data-aos="fade-down">
        PlantCare Management
    </h1>

    <p class="text-gray-300 max-w-2xl mb-10 text-lg" data-aos="fade-up">
        Smart system to track plant growth and manage maintenance schedules
        with elegance and precision.
    </p>

    <a href="/login"
       class="px-10 py-4 rounded-xl border border-green-500 neon-border hover:bg-green-500 hover:text-black transition duration-500"
       data-aos="zoom-in">
       Get Started
    </a>
</section>

<!-- FEATURES -->
<section class="py-32 px-6 bg-gradient-to-b from-black to-gray-900">

    <h2 class="text-4xl font-bold text-center mb-20 neon-text" data-aos="fade-up">
        Core Features
    </h2>

    <div class="grid md:grid-cols-2 gap-16 max-w-6xl mx-auto">

        <!-- Track Growth -->
        <div class="bg-white/5 backdrop-blur-lg p-12 rounded-3xl border border-green-500/20 neon-border hover:scale-105 transition duration-500"
             data-aos="fade-right">

            <div class="text-5xl mb-6">🌱</div>

            <h3 class="text-2xl font-bold mb-4 text-green-400">
                Track Growth
            </h3>

            <p class="text-gray-400 leading-relaxed">
                Record plant height and condition over time.
                Monitor progress visually and maintain detailed history logs.
            </p>

        </div>

        <!-- Maintenance -->
        <div class="bg-white/5 backdrop-blur-lg p-12 rounded-3xl border border-green-500/20 neon-border hover:scale-105 transition duration-500"
             data-aos="fade-left">

            <div class="text-5xl mb-6">💧</div>

            <h3 class="text-2xl font-bold mb-4 text-green-400">
                Maintenance Schedule
            </h3>

            <p class="text-gray-400 leading-relaxed">
                Organize watering and fertilizing schedules.
                Never miss a plant care routine again.
            </p>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-32 text-center bg-black">

    <h2 class="text-4xl font-bold mb-10 neon-text" data-aos="zoom-in">
        Start Managing Your Plants Today
    </h2>

    <a href="/register"
       class="px-12 py-4 rounded-xl border border-green-500 neon-border hover:bg-green-500 hover:text-black transition duration-500"
       data-aos="fade-up">
       Create Account
    </a>
</section>

<!-- FOOTER -->
<footer class="py-10 text-center text-gray-500 bg-black border-t border-green-500/20">
    © {{ date('Y') }} PlantCare Management
</footer>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

</body>
</html>
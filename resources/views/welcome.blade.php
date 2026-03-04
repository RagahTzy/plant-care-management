@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="min-h-screen flex flex-col justify-center items-center text-center px-6 pt-32">

    <h1 class="text-6xl font-extrabold neon-text mb-6" data-aos="fade-down">
        Smart Plant Management
    </h1>

    <p class="text-gray-300 max-w-2xl mb-10 text-lg" data-aos="fade-up">
        Manage maintenance schedules, track plant growth,
        and monitor health in one futuristic platform.
    </p>

    <a href="{{ route('login') }}"
       class="px-10 py-4 rounded-xl border border-green-500 neon-border hover:bg-green-500 hover:text-black transition duration-500"
       data-aos="zoom-in">
       Get Started
    </a>

</section>

<!-- FEATURES -->
<section id="features" class="py-24 px-10 text-center">

    <h2 class="text-4xl font-bold neon-text mb-16" data-aos="fade-up">
        Features
    </h2>

    <div class="grid md:grid-cols-3 gap-10">

        <div class="p-8 border border-green-500/30 rounded-2xl hover:scale-105 transition duration-500"
             data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-2xl font-bold mb-4">🌿 Growth Tracking</h3>
            <p class="text-gray-400">
                Record and analyze plant growth progress easily.
            </p>
        </div>

        <div class="p-8 border border-green-500/30 rounded-2xl hover:scale-105 transition duration-500"
             data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-2xl font-bold mb-4">🛠 Maintenance Schedule</h3>
            <p class="text-gray-400">
                Set watering and fertilizing reminders automatically.
            </p>
        </div>

        <div class="p-8 border border-green-500/30 rounded-2xl hover:scale-105 transition duration-500"
             data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-2xl font-bold mb-4">📊 Analytics</h3>
            <p class="text-gray-400">
                Get visual insights to optimize plant care.
            </p>
        </div>

    </div>

</section>

<!-- ABOUT -->
<section id="about" class="py-24 px-10 text-center">

    <h2 class="text-4xl font-bold neon-text mb-10" data-aos="fade-up">
        About The System
    </h2>

    <p class="max-w-3xl mx-auto text-gray-400 text-lg" data-aos="fade-up" data-aos-delay="200">
        PlantCare Management System is designed to help plant owners
        monitor, maintain, and optimize plant health using structured data
        and smart scheduling features.
    </p>

</section>

<!-- CTA -->
<section class="py-24 text-center">

    <h2 class="text-4xl font-bold neon-text mb-8" data-aos="zoom-in">
        Ready to Start?
    </h2>

    <a href="{{ route('register') }}"
       class="px-12 py-5 border border-green-500 rounded-xl neon-border hover:bg-green-500 hover:text-black transition duration-500"
       data-aos="zoom-in">
       Create Account
    </a>

</section>

@endsection
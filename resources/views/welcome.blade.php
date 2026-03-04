@extends('layouts.app')

@section('content')

<style>
html { scroll-behavior: smooth; }

body {
    background: #0f1115;
    font-family: 'Inter', sans-serif;
    color: #fff;
}

/* ===== GLOBAL COLORS ===== */
:root {
    --neon: #22c55e;
    --neon-soft: rgba(34,197,94,0.35);
}

/* ===== DIVIDER ===== */
.section-divider {
    height: 1px;
    background: linear-gradient(to right, transparent, var(--neon-soft), transparent);
    margin: 0 auto;
    width: 80%;
}

/* ===== NAVBAR ===== */
.glass-nav {
    backdrop-filter: blur(18px);
    background: rgba(15,17,21,0.6);
    border-bottom: 1px solid rgba(255,255,255,0.04);
    transition: all 0.4s ease;
}

.nav-solid {
    background: rgba(15,17,21,0.95);
}

.nav-link {
    position: relative;
    padding-bottom: 4px;
}

.nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0%;
    height: 2px;
    background: var(--neon);
    transition: width 0.4s ease;
}

.nav-link:hover::after {
    width: 100%;
}

/* ===== BUTTONS ===== */
.btn-primary {
    background: var(--neon);
    color: #0f1115;
    transition: 0.4s ease;
}

.btn-primary:hover {
    box-shadow: 0 0 25px var(--neon-soft);
    transform: translateY(-2px);
}

.btn-primary:active {
    transform: scale(0.96);
}

.btn-outline {
    border: 1px solid var(--neon);
    color: var(--neon);
    transition: 0.4s ease;
}

.btn-outline:hover {
    background: rgba(34,197,94,0.08);
    box-shadow: 0 0 15px var(--neon-soft);
}

/* ===== HERO BACKGROUND ===== */
.hero-bg {
    background:
        radial-gradient(circle at 30% 40%, rgba(34,197,94,0.12), transparent 50%),
        radial-gradient(circle at 70% 60%, rgba(16,185,129,0.08), transparent 50%);
}

/* ===== CARDS ===== */
.card-glass {
    background: rgba(21,25,34,0.7);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(34,197,94,0.15);
    transition: all 0.5s ease;
}

.card-glass:hover {
    border-color: var(--neon);
    box-shadow: 0 0 20px rgba(34,197,94,0.2);
    transform: translateY(-6px);
}

/* ===== ANIMATION ===== */
.fade-up, .fade-left, .fade-right {
    opacity: 0;
    transition: all 0.7s cubic-bezier(.4,0,.2,1);
}

.fade-up { transform: translateY(40px); }
.fade-left { transform: translateX(-40px); }
.fade-right { transform: translateX(40px); }

.show {
    opacity: 1;
    transform: translate(0,0);
}

/* ===== FLOATING ===== */
.float {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%,100% { transform: translateY(0);}
    50% { transform: translateY(-12px);}
}

/* ===== CHART DRAW ===== */
.chart-line {
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    transition: stroke-dashoffset 2s ease;
}

.chart-line.animate {
    stroke-dashoffset: 0;
}

/* ===== CTA BACKGROUND ===== */
.cta-bg {
    background:
        radial-gradient(circle at center, rgba(34,197,94,0.2), transparent 60%),
        linear-gradient(135deg, #0f1115, #111827);
}
</style>

<!-- HERO -->
<section class="hero-bg min-h-screen flex items-center px-8 pt-32">

<div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

<div class="fade-left">
<h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
Smart <span class="text-green-400">Plant Growth</span> & Care Management
</h1>

<p class="text-gray-300 mb-8 text-lg">
Monitor plant growth, schedule maintenance, 
and manage everything from one intelligent dashboard.
</p>

<div class="flex gap-6">
<a href="{{ route('register') }}" class="px-8 py-4 rounded-xl btn-primary">
Get Started
</a>

<a href="#" class="px-8 py-4 rounded-xl btn-outline">
View Demo
</a>
</div>
</div>

<div class="fade-right float">
<div class="card-glass p-6 rounded-2xl shadow-xl">

<!-- Chart -->
<svg viewBox="0 0 400 200" class="w-full h-40">
<polyline 
    fill="none"
    stroke="#22c55e"
    stroke-width="3"
    points="0,150 60,120 120,140 180,80 240,100 300,60 360,90"
    class="chart-line"
/>
</svg>

<div class="mt-6 grid grid-cols-3 gap-4 text-sm">
<div class="p-3 bg-black/40 rounded-lg border border-green-500/20">
Healthy
</div>
<div class="p-3 bg-black/40 rounded-lg border border-green-500/20">
Blooming
</div>
<div class="p-3 bg-black/40 rounded-lg border border-green-500/20">
Needs Care
</div>
</div>

</div>
</div>

</div>
</section>

<div class="section-divider"></div>

<!-- FEATURES -->
<section class="py-28 px-8" id ="features">

<div class="max-w-6xl mx-auto text-center">

<h2 class="text-4xl font-bold mb-4 fade-up">
Core Features
</h2>

<p class="text-gray-400 mb-16 fade-up">
Powerful tools to monitor, manage, and optimize plant care effortlessly.
</p>

<div class="grid md:grid-cols-3 gap-10">

<div class="card-glass p-8 rounded-2xl fade-up">
<h3 class="text-xl font-semibold text-green-400 mb-4">Growth Tracking</h3>
<ul class="text-gray-300 space-y-2 text-sm">
<li>• Height & bloom tracking</li>
<li>• Growth history charts</li>
<li>• Upload progress photos</li>
</ul>
</div>

<div class="card-glass p-8 rounded-2xl fade-up">
<h3 class="text-xl font-semibold text-green-400 mb-4">Maintenance Schedule</h3>
<ul class="text-gray-300 space-y-2 text-sm">
<li>• Watering reminders</li>
<li>• Fertilizing alerts</li>
<li>• Daily care checklist</li>
</ul>
</div>

<div class="card-glass p-8 rounded-2xl fade-up">
<h3 class="text-xl font-semibold text-green-400 mb-4">Smart Dashboard</h3>
<ul class="text-gray-300 space-y-2 text-sm">
<li>• Total plants overview</li>
<li>• Health indicators</li>
<li>• Growth analytics</li>
</ul>
</div>

</div>
</div>
</section>

<div class="section-divider"></div>

<!-- HOW IT WORKS -->
<section class="py-28 px-8 section-dark" id ="about">

<div class="max-w-5xl mx-auto text-center">

<h2 class="text-4xl font-bold mb-16 fade-up">
How It Works
</h2>

<div class="grid md:grid-cols-3 gap-12">

<div class="fade-up">
<div class="w-16 h-16 mx-auto rounded-full bg-green-500/10 border border-green-400 flex items-center justify-center text-green-400 font-bold text-xl mb-6">
1
</div>
<h3 class="text-xl font-semibold mb-3">Tambahkan Tanaman</h3>
<p class="text-gray-400 text-sm">Input data tanaman dan mulai monitoring.</p>
</div>

<div class="fade-up">
<div class="w-16 h-16 mx-auto rounded-full bg-green-500/10 border border-green-400 flex items-center justify-center text-green-400 font-bold text-xl mb-6">
2
</div>
<h3 class="text-xl font-semibold mb-3">Atur Jadwal</h3>
<p class="text-gray-400 text-sm">Tentukan jadwal penyiraman dan perawatan.</p>
</div>

<div class="fade-up">
<div class="w-16 h-16 mx-auto rounded-full bg-green-500/10 border border-green-400 flex items-center justify-center text-green-400 font-bold text-xl mb-6">
3
</div>
<h3 class="text-xl font-semibold mb-3">Pantau Dashboard</h3>
<p class="text-gray-400 text-sm">Analisis dan kelola dari satu panel.</p>
</div>

</div>
</div>
</section>

<div class="section-divider"></div>

<!-- CTA -->
<section class="cta-bg py-32 text-center relative overflow-hidden">

<div class="max-w-3xl mx-auto fade-up">

<h2 class="text-4xl font-bold mb-8">
Start Managing Your Plants Smarter Today
</h2>

<a href="{{ route('register') }}"
class="px-10 py-5 rounded-xl btn-primary text-lg">
Daftar Gratis
</a>

</div>
</section>

<!-- FOOTER -->
<footer class="bg-black py-12 text-center text-gray-400">
<div class="text-green-400 text-xl font-semibold mb-6">PlantCare</div>
<div>© {{ date('Y') }} PlantCare Management</div>
</footer>

<script>
/* Intersection Observer */
const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
if(entry.isIntersecting){
entry.target.classList.add('show');

if(entry.target.querySelector('.chart-line')){
entry.target.querySelector('.chart-line').classList.add('animate');
}
}
});
},{ threshold:0.2 });

document.querySelectorAll('.fade-up, .fade-left, .fade-right')
.forEach(el=>observer.observe(el));
</script>

@endsection
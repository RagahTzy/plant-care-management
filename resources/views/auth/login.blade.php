<x-guest-layout>

<style>
body {
    background: #0f1115;
}

.auth-bg {
    background:
        radial-gradient(circle at 30% 40%, rgba(34,197,94,0.12), transparent 50%),
        radial-gradient(circle at 70% 60%, rgba(16,185,129,0.08), transparent 50%);
}

.glass-card {
    background: rgba(21,25,34,0.75);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(34,197,94,0.2);
}

.input-modern {
    background: #111827;
    border: 1px solid rgba(255,255,255,0.08);
    transition: 0.3s ease;
}

.input-modern:focus {
    border-color: #22c55e;
    box-shadow: 0 0 12px rgba(34,197,94,0.4);
}

.btn-neon {
    background: #22c55e;
    color: #0f1115;
    transition: 0.3s ease;
}

.btn-neon:hover {
    box-shadow: 0 0 20px rgba(34,197,94,0.5);
    transform: translateY(-2px);
}

.btn-neon:active {
    transform: scale(0.96);
}

.fade-in {
    animation: fade 0.8s ease forwards;
}

@keyframes fade {
    from { opacity: 0; transform: translateY(30px);}
    to { opacity: 1; transform: translateY(0);}
}
</style>

<div class="min-h-screen flex items-center justify-center auth-bg px-6">

    <div class="w-full max-w-md p-10 rounded-2xl glass-card fade-in">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-400">Welcome Back</h1>
            <p class="text-gray-400 mt-2 text-sm">
                Login to manage your plants
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-6">
                <label class="block text-sm text-gray-300 mb-2">Email</label>
                <input type="email" name="email" required autofocus
                    class="w-full px-4 py-3 rounded-lg input-modern text-white">
            </div>

            <div class="mb-6">
                <label class="block text-sm text-gray-300 mb-2">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg input-modern text-white">
            </div>

            <div class="flex items-center justify-between mb-6 text-sm">
                <label class="flex items-center text-gray-400">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" 
                       class="text-green-400 hover:underline">
                        Forgot password?
                    </a>
                @endif
            </div>

            <button type="submit"
                class="w-full py-3 rounded-lg btn-neon font-semibold">
                Login
            </button>

            <div class="mt-6 text-center text-gray-400 text-sm">
                Don't have an account?
                <a href="{{ route('register') }}" 
                   class="text-green-400 hover:underline">
                   Register
                </a>
            </div>

        </form>
    </div>
</div>

</x-guest-layout>
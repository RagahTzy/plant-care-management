<x-guest-layout>

<div class="min-h-screen flex items-center justify-center auth-bg px-6">

    <div class="w-full max-w-md p-10 rounded-2xl glass-card fade-in">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-400">Create Account</h1>
            <p class="text-gray-400 mt-2 text-sm">
                Start managing your plants smarter
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-5">
                <label class="block text-sm text-gray-300 mb-2">Name</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-3 rounded-lg input-modern text-white">
            </div>

            <div class="mb-5">
                <label class="block text-sm text-gray-300 mb-2">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-3 rounded-lg input-modern text-white">
            </div>

            <div class="mb-5">
                <label class="block text-sm text-gray-300 mb-2">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg input-modern text-white">
            </div>

            <div class="mb-6">
                <label class="block text-sm text-gray-300 mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-lg input-modern text-white">
            </div>

            <button type="submit"
                class="w-full py-3 rounded-lg btn-neon font-semibold text-green-400 hover:underline">
                Register
            </button>

            <div class="mt-6 text-center text-gray-400 text-sm">
                Already have an account?
                <a href="{{ route('login') }}" 
                   class="text-green-400 hover:underline">
                   Login
                </a>
            </div>

        </form>
    </div>
</div>

</x-guest-layout>
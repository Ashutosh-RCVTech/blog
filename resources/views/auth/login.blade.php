<x-guestLayout>
    <h1 class="text-2xl font-bold mb-4">Login</h1>

    @if (session('error'))
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Email" required
                   class="w-full px-4 py-2 border rounded">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" required
                   class="w-full px-4 py-2 border rounded">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">
            Login
        </button>
    </form>

    <p class="mt-4 text-sm text-center">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
    </p>
</x-guestLayout>

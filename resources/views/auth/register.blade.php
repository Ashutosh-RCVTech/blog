<x-guestLayout>
    <h1 class="text-2xl font-bold mb-4">Register</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <input type="text" name="name" placeholder="Name" required
                   class="w-full px-4 py-2 border rounded">
        </div>

        <div>
            <input type="email" name="email" placeholder="Email" required
                   class="w-full px-4 py-2 border rounded">
        </div>

        <div>
            <input type="password" name="password" placeholder="Password" required
                   class="w-full px-4 py-2 border rounded">
        </div>

        <div>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                   class="w-full px-4 py-2 border rounded">
        </div>

        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded">
            Register
        </button>
    </form>

    <p class="mt-4 text-sm text-center">
        Already have an account?
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
    </p>
</x-guestLayout>

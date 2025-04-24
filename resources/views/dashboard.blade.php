<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-6">
                <a href="{{ route('post.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Post</a>
            </div>
            @foreach($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    </div>
</x-app-layout>

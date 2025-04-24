<div class="border p-4 rounded shadow mb-4">
    @if($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="mb-2 w-full h-60 object-cover rounded">
    @endif
    <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
    <p class="text-gray-700">{{ $post->description }}</p>
</div>

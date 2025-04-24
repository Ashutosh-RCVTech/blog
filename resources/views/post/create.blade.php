<x-app-layout>
    <div class="max-w-4xl mx-auto py-10">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input type="text" name="title" class="mt-1 block w-full border rounded" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" class="mt-1 block w-full border rounded" rows="5" required></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium">Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full" accept="image/*">
                <img id="preview" class="mt-2 rounded w-48 h-48 object-cover hidden">
            </div>
            <div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('image').onchange = function (evt) {
            const [file] = this.files;
            if (file) {
                const preview = document.getElementById('preview');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        }
    </script>
</x-app-layout>

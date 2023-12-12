<x-layout>
    <x-container>
        
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Edit Post</h1>

        <form method="POST" action="{{ route('post.update', $post->id) }}" class="mx-auto w-1/2 bg-white shadow-md rounded-md p-6 mb-4">
            @csrf
            @method('PUT') <!-- Updated to use PUT method -->

            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-600">Title:</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border border-gray-300 w-full rounded-md" value="{{ $post->title }}" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-semibold text-gray-600">Content:</label>
                <textarea name="content" id="content" class="mt-1 p-2 border border-gray-300 w-full rounded-md" required>{{ $post->content }}</textarea>
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update Post</button>
                <a href="#" class="ml-4 text-gray-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>

    </x-container>
</x-layout>
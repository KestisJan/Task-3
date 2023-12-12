<x-layout>
<x-container>

    <div class="container mx-auto mt-8 flex justify-between items-center">
        <a href="/create" class="border border-green-500 bg-green-500 text-black rounded-md px-4 py-2 text-sm">Create Post</a>
    </div>
        <br>
    <div class="container mx-auto">
        @foreach($posts as $post)
        <div class="flex bg-white shadow-md rounded-md p-6 mb-4">
                <div class="flex-1">
                    <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700">{{ $post->content }}</p>
                </div>

                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('post.edit', $post->id) }}" class="text-blue-500 hover:underline mr-4">Edit</a>
                    <a href="{{ route('post.delete', $post->id) }}" class="text-red-500 hover:underline">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
</x-container>
</x-layout>
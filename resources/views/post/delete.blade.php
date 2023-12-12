<x-layout>
    <x-container>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Confirm to Delete Post</h1>

        <div class="mx-auto w-1/2 bg-white shadow-md rounded-md p-6 mb-4">
            <p>Are you sure you want to delete post: "{{ $post->title }}"?</p>

            <form method="POST" action="{{ route('post.destroy', $post->id) }}" class="mt-4">
                @csrf
                @method('DELETE')

                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                <a href="/" class="ml-4 text-gray-600 hover:underline">Cancel</a>
            </form>
        </div>
    </div>

    </x-container>
</x-layout>
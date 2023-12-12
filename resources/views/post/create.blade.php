<x-layout>
<x-container>


<div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Create a New Post</h1>

        <form method="POST" action="{{ route('post.store') }}" class="mx-auto w-1/2 bg-white shadow-md rounded-md p-6 mb-4">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-600">Title:</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border border-gray-300 w-full rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-semibold text-gray-600">Content:</label>
                <textarea name="content" id="content" class="mt-1 p-2 border border-gray-300 w-full rounded-md" required></textarea>
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Post</button>
                <a href="/" class="ml-4 text-gray-600 hover:underline">Go back</a>
            </div>
        </form>

    </div>
</x-container>
</x-layout>
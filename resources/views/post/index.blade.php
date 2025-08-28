<x-layout :title="$pageTitle">
    @if(session('success'))
        <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Post</a>
        </div>
    @foreach ($posts as $post)
        <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-4">
        <div>
            <h2 class= "text-2xl">{{ $post->title }}</h2>
            <h1 class="text-lg">{{ $post->author }}</h1>
        </div>
        <div>
            <a href="/blog/{{ $post->id }}/edit" class="text-blue-500">Edit</a>
            <form method="POST" action="/blog/{{ $post->id }}" onclick="return confirm('Are you sure you want to delete this post?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Delete</button>
            </form>
        </div>
        </div>
        

        <!-- <p>{{ $post->body }}</p> -->
        @if($post->comments && $post->comments->count() > 0)
            <ul>
                @foreach ($post->comments as $comment)
                    <li>{{ $comment->content }}, {{ $comment->author }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
    {{ $posts->links() }}
</x-layout>
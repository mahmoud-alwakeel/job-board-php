<x-layout :title="$pageTitle">
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Post</a>
        </div>
    @foreach ($posts as $post)
        <h2 class= "text-2xl">{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p>{{ $post->author }}</p>
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
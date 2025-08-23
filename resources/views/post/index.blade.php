<x-layout :title="$pageTitle">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2 class= "text-2xl">{{ $post->title }}</h2>
        @if($post->comments && $post->comments->count() > 0)
            <ul>
                @foreach ($post->comments as $comment)
                    <li>{{ $comment->content }}, {{ $comment->author }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
</x-layout>
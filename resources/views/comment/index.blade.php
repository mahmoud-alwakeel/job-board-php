<x-layout :title="$pageTitle">
    <h1>Comments exploring</h1>
    @foreach ($comments as $comment)
        <h2 class= "text-2xl">{{ $comment->content }}</h2>
        <p>{{ $comment->author }}</p>
        <p><a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a></p>
    @endforeach
</x-layout>
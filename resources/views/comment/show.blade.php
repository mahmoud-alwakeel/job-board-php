<x-layout :title="$pageTitle">
    <h1>{{ $comment->content }}</h1>
    <p>{{ $comment->author }}</p>
    @if($comment->post)
        <h3>Related Post</h3>
        <ul>
            <li>
                <strong>{{ $comment->post->title }}</strong>
                <p>{{ $comment->post->body }}</p>
                <p>{{ $comment->post->author }}</p>
                <a href="{{ route('blog.show', $comment->post->id) }}">view post</a>
            </li>
        </ul>
    @else
        <p>No related post found</p>
    @endif
</x-layout>
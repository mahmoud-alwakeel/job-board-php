<x-layout :title="$pageTitle">
    <h1 class="text-2xl font-bold">{{ $tag->title }}</h1>
    <h3>Related Post</h3>
    <ul>
        @forelse($tag->posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>{{ $post->author }}</p>
                <a href="{{ route('blog.show', $post->id) }}">view post</a>
            </li>
        @empty
        <p>No related post found</p>
        @endforelse
    </ul>
</x-layout>
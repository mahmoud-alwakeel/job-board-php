<x-layout :title="$pageTitle">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>

    <ul>
        @foreach ($post->comments as $comment)
            <li class="border bg-gray-100 px-4 py-6 my-4">{{ $comment->content }}, {{ $comment->author }}</li>
        @endforeach
    </ul>
<div>
    <form method="POST" action="/comments">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="author" class="block text-sm/6 font-medium text-gray-700">Your Name</label>
                        <div class="mt-2">
                            <input id="author" type="text" value="{{ old('author') }}" name="author" placeholder="Enter your name" class="{{ $errors->has('author') ? 'border-red-500' : '' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder:text-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm/6" />
                        </div>
                        @error('author')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-span-full">
                        <label for="content" class="block text-sm/6 font-medium text-gray-700">Comment</label>
                        <div class="mt-2">
                            <textarea id="content" name="content" rows="6" placeholder="Write your comment here..." class="{{ $errors->has('content') ? 'border-red-500' : '' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder:text-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm/6">{{ old('content') }}</textarea>
                        </div>
                        @error('content')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Comment</button>
        </div>
    </form>
</div>
</x-layout>
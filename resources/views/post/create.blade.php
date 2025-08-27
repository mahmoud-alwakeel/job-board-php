<x-layout :title="$pageTitle">
    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-300 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create new Post</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Use this form to create a new post</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm/6 font-medium text-gray-700">Title</label>
                        <div class="mt-2">
                            <input id="title" type="text" name="title" placeholder="Enter post title" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder:text-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="author" class="block text-sm/6 font-medium text-gray-700">Author</label>
                        <div class="mt-2">
                            <input id="author" type="text" name="author" placeholder="Enter author name" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder:text-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="content" class="block text-sm/6 font-medium text-gray-700">Content</label>
                        <div class="mt-2">
                            <textarea id="content" name="content" rows="6" placeholder="Write your post content here..." class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder:text-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm/6"></textarea>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <div class="flex items-center gap-x-3">
                            <input id="published" type="checkbox" name="published" value="1" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                            <label for="published" class="block text-sm/6 font-medium text-gray-700">Published</label>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Check this box to publish the post immediately</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('blog.index') }}" class="text-sm/6 font-semibold text-gray-900 hover:text-gray-700">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Post</button>
        </div>
    </form>
</x-layout>
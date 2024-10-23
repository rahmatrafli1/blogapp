<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Your content -->
    <article class="py-2 max-w-screen-md">
        <a href="/posts" class="font-medium text-blue-500 hover:underline pb-2">&laquo; Back to Posts</a>
        <h2 class="text-xl font-bold mb-1 tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#" class="text-blue-500 hover:underline font-medium">{{ $post['author'] }}</a> |
            {{ \Carbon\Carbon::parse($post['created_at'])->locale('id')->diffForHumans() }}
        </div>
        <p class="py-4 font-light">{{ $post['body'] }}</p>
    </article>

</x-layout>

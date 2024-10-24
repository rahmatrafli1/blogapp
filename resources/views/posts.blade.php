<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Your content -->
    @foreach ($posts as $post)
        <article class="py-2 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-xl font-bold mb-1 tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="/author/{{ $post->author->id }}"
                    class="text-blue-500 hover:underline font-medium">{{ $post->author->name }}</a> |
                {{ \Carbon\Carbon::parse($post['created_at'])->locale('id')->diffForHumans() }}
            </div>
            <p class="py-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>

<div class="mx-auto w-1/2">
    @foreach ($articles as $article)
        <div class="mt-5 p-3">
            <h3 class="text-2xl text-blue-500 mb-1 py-1">
                <a
                    href="/articles/{{ $article->id }}"
                    class=hover:text-blue-700 hover:underline"
                >
                    {{ $article->title }}
                </a>
            </h3>

            <p class="text-gray-600">
                {{ $article->content }}
            </p>
        </div>
    @endforeach
</div>

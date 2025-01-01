<div>
    @foreach ($articles as $article)
        <div class="mt-5 p-3">
            <h3 class="text-2xl text-blue-500">
                <a href="/articles/{{ $article->id }}">
                    {{ $article->title }}
                </a>
            </h3>

            <p>
                {{ $article->content }}
            </p>
        </div>
    @endforeach
</div>

<div class="{{ count($results) > 0 ? 'block' : 'hidden' }}">

    <div class="mt-2 p-4 absolute opacity-90 z-100">

        @if (count($results) == 0)
            <div class="text-gray-600">
                No results found.
            </div>
        @endif

        @foreach ($results as $result)
            <div class="mt-2">
                <a
                    href="/articles/{{ $result->id }}"
                    class="text-gray-600 hover:text-gray-900 hover:bg-gray-200 p-2 rounded-md"
                >
                    {{ $result->title }}
                </a>
            </div>
        @endforeach
    </div>

</div>

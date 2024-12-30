<div class="{{ $show ? 'block' : 'hidden' }}">

    <div class="mt-2 p-4 absolute border rounded-md bg-gray-100 border-indigo-200 opacity-95">

        @if (count($results) == 0)
            <p class="text-gray-600">
                No results found.
            </p>
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

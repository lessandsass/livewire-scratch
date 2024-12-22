<div>

    <form
        action=""
        wire:submit="changeName(document.querySelector('#newName').value)"
    >

        <div class="mt-2">

            <select
                type="text"
                class="border-gray-300 text-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-24"
                wire:model.fill="greeting"
            >
                <option value="hello">Hello</option>
                <option value="hi">Hi</option>
                <option value="howdy" selected>Howdy</option>
                <option value="hey">Hey</option>
            </select>

            <input
                type="text"
                wire:model.live.debounce="name"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
        </div>

        <div class="mb-2">
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            >
                Greet
            </button>
        </div>
    </form>

    @if ($name !== '')
        <div class="mb-2">
            {{ $greeting }} {{ $name }}
        </div>
    @endif
</div>

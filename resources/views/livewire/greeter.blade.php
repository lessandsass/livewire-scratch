<div>

    <form
        action=""
        wire:submit="changeName(document.querySelector('#newName').value)"
    >
        <div class="mb-2">
            Hello {{ $name }}
        </div>

        <div class="mt-2">
            <input
                type="text"
                id="newName"
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

</div>

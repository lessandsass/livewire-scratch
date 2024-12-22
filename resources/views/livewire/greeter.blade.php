<div>

    <div class="mb-2">
        Hello {{ $name }}
    </div>

    <div class="mb-2">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            wire:click="changeName('Jeffrey')"
        >
            Greet
        </button>
    </div>

</div>

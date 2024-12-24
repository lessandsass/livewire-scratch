<div>

    <form

    >

        <div class="mt-2">

            <input
                type="text"
                wire:model.live.debounce="searchText"
                placeholder="{{ $placeholder }}"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-9/12"
            >

            <button
                class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg disabled:bg-indigo-300 disabled:cursor-not-allowed"
                wire:click.prevent="clear()"
                {{ empty($searchText) ? 'disabled' : '' }}
            >
                Clear
            </button>
        </div>
    </form>

    <livewire:search-results :results="$results">

</div>

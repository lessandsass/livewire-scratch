<div>

    <form>

        <div class="mt-2 flex">

            <input
                type="text"
                wire:model.live.debounce="searchText"
                placeholder="{{ $placeholder }}"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full mr-2"
            >

        </div>
    </form>

    <livewire:search-results
        :results="$results"
        :show="!empty($searchText)"
    >

</div>

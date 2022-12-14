<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <label>
        <input wire:model.debounce.500ms="search" type="text"
               class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-2 focus:outline-none focus:shadow-outline"
               placeholder="Search..."
               @focus="isOpen = true"
               @keydown="isOpen = true"
               @keydown.escape.windo="isOpen = false"
               @keydown.shift.tab="isOpen = false">
    </label>
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-lime-500 mt-3 ml-2" viewBox="0 0 24 24">
            <path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0
                        111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
        </svg>
    </div>


    @if(strlen($search) >= 2)
        <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show.transition.opacity="isOpen">

            @if($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700 text-lime-500">
                            <a href="{{ route('movies.show', $result['id']) }}"
                               class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150">
                                @if($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster"
                                         class="w-12">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-12">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>

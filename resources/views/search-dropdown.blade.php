<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true}" @click.away="isOpen = false">
    <input 
        wire:model.debounce.500ms="search" 
        type="text" 
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search"
        @focus="inOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
    >
    <div calss="abolute top-0">
        <svg class=""></svg>
    </div>

    <div wire:loding class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) > 2)
        <div 
            class="z-50 absolute bg gray-800 text-sm rounded w-64 mt-4" 
            x-show.transition.opacity="isOpen"
        >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a 
                                href="{{ route('movies.show', $result['id]) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                @if ($loop->last) $keydown.tab.exact="isOpen" = false" @endif
                            >
                            @if ($result['poster_patch'])
                                <img src="https://image.tmbd.org/t/p/w92/{{ $result['poster_patch'] }}" alt="poster" class="w-8">
                            $else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                            endif
                            <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                    
            </ul>
        @eles
            <div class="px-3 py-3">No results for "{{ $search }}"</div>
        @endif
    </div>
</div>


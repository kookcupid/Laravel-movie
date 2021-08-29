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
        <svg height="32px" id="search" viewBox="0 0 32 32" width="32px"><g fill="#929292" id="icon-111-search"><path d="M19.4271164,20.4271164 C18.0372495,21.4174803 16.3366522,22 14.5,22 C9.80557939,22 6,18.1944206 6,13.5 C6,8.80557939 9.80557939,5 14.5,5 C19.1944206,5 23,8.80557939 23,13.5 C23,15.8472103 22.0486052,17.9722103 20.5104077,19.5104077 L26.5077736,25.5077736 C26.782828,25.782828 26.7761424,26.2238576 26.5,26.5 C26.2219324,26.7780676 25.7796227,26.7796227 25.5077736,26.5077736 L19.4271164,20.4271164 L19.4271164,20.4271164 Z M14.5,21 C18.6421358,21 22,17.6421358 22,13.5 C22,9.35786417 18.6421358,6 14.5,6 C10.3578642,6 7,9.35786417 7,13.5 C7,17.6421358 10.3578642,21 14.5,21 L14.5,21 Z"/></g></svg>
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
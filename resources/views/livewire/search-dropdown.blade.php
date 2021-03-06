
    <div class="relative mt-3 md:mt-3 text-black"  x-data="{ isOpen: true }" @click.away="isOpen = false"> 
        <input wire:model.debounce.150ms="search" name="" id="" placeholder="Search" class="bg-white-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-aoutline" type="text" value=""
         @focus="isOpen = true"
         @keydown="isOpen = true"
         @keydown.escape.window="isOpen = false"
         @keydown.shift.tab="isOpen = false"
         >
        <div class="absolute top-0">
            <i class="fa fa-search w-4 mt-2 ml-3" aria-hidden="true"></i>
        </div>
        <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>
        @if (strlen($search) > 2)
        <div 
        class="z-50 absolute bg-gray-700 text-sm text-white rounded w-64 mt-4 shadow-lg"
         x-show.transition.opacity="isOpen"
        
         >
            @if ($searchResult->count() > 0)
            <ul>
                @foreach ($searchResult as $result)
                    <li class="border-b border-yellow-700 ">
                        <a
                         href="{{route('movies.show', $result['id'])}}"
                          class="block hover:bg-gray-700 px-3 py-3 flex flex-items"
                          @if ($loop->last)
                              @keydown.tab = "isOpen = false"
                          @endif
                          >

                            @if ($result['poster_path'])
                                 <img src="https://image.tmdb.org/t/p/w92{{$result['poster_path']}}" class="w-8" alt="">
                                 @else
                                 <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                            @endif
                          
                           <span class="text-sm ml-4"> {{$result['title']}}</span>
                        </a>
                    </li>
                 @endforeach
           </ul>
            @else
                <div class="px-3 py-3">No result for "{{$search}}"</div>
            @endif
        </div>
        @endif
    </div>


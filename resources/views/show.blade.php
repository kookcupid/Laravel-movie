@extends('layouts.app')

@section('content')
    <div class="movies-info border-b border-gray-800">
        <div class="container mx-auto px-4 pt-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="actor1" class="w-64 md:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semiblod">{{ $movie['title']}}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg  class="fill-current text-yellow-500 w-4" viewBox="0 0 150 150"><g data-name="Layer 2"><path d="M64.42,2,80.13,38.7,120,42.26a3.2,3.2,0,0,1,1.82,5.62h0L91.64,74.18l8.9,39A3.19,3.19,0,0,1,98.12,117a3.27,3.27,0,0,1-2.46-.46L61.41,96.1,27.07,116.64a3.18,3.18,0,0,1-4.38-1.09,3.14,3.14,0,0,1-.37-2.38h0l8.91-39L1.09,47.88a3.24,3.24,0,0,1-.32-4.52,3.32,3.32,0,0,1,2.29-1l39.72-3.56L58.49,2a3.24,3.24,0,0,1,5.93,0Z" data-name="star"/></g></svg>
                    <span class="ml-1">{{ $movie['vote_average' * 10 . '%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                    @foreach ($movie['genres'] as $genre)
                            {{ $genre('name') }}@if (!$loop->last), @endif
                    @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4> 
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew']) as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                
                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                            
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                $endif
            </div>    
        </div>
    </div>
   
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 ">
            <h2 class="text-4xl for-semiblod">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                             </a>           
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                                <div class="text-sm text-gray-400">
                                    {{ $cast['character'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach       
            </div>
        </div>  
    </div>
    
    <div class="movie-images">
        <div class="container mx-auto px-4 py-16 ">
            <h2 class="text-4xl for-semiblod">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['Images']['bacldrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                             </a>           
                        </div>
                    @endif
                @endforeach       
            </div>
        </div>  
    </div>
@endsection
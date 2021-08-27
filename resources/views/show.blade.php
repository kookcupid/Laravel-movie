@extends('layouts.app')

@section('content')
    <div class="movies-info border-b border-gray-800">
        <div class="container mx-auto px-4 pt-16 flex">
            <img src="/img/itzy01.jpg" alt="itzy" class="w-96" style="width: 24rem">
            <div class="ml-24">
                <h2 class="text-4xl font-semiblod">Izty (2021)</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>star</span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Warlords, warriors and statesmen wage a battle for supremacy in this fantasy tale based on the hit video games and the "Romance of the Three Kingdoms."
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4> 
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-Ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-Won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12">
                    <button class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                        
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>    
        </div>
    </div>
   
    
        

    <div class="movie-cast border-b boder-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl for-semiblod">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/itzy01.jpg" alt="itzy" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>           
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">itzy</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/itzy02.jpg" alt="itzy" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>           
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">itzy</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/itzy03.jpg" alt="itzy" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>           
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">itzy</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/itzy04.jpg" alt="itzy" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>           
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">itzy</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/itzy05.jpg" alt="itzy" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>           
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">itzy</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>    
                </div>
            
        </div>
    </div>

    

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <title>Movie App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">  
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="">
                    <svg width="114" height="29" viewBox="0 0 114 29" fill="#FF2D20" fill-rule="evenodd"><path d="M4.773.917v23.046h8.338v3.976H.333V.917h4.44zm24.01 11.465V9.95h4.208v17.99h-4.207v-2.433c-.567.901-1.37 1.609-2.413 2.123-1.042.515-2.091.772-3.146.772-1.365 0-2.613-.25-3.745-.752a8.758 8.758 0 0 1-2.915-2.066 9.6 9.6 0 0 1-1.89-3.01 9.717 9.717 0 0 1-.677-3.63c0-1.26.225-2.464.676-3.61a9.56 9.56 0 0 1 1.891-3.03 8.766 8.766 0 0 1 2.915-2.065c1.132-.502 2.38-.752 3.745-.752 1.055 0 2.104.257 3.146.772 1.042.515 1.846 1.222 2.413 2.123zm-.386 8.763a6.293 6.293 0 0 0 .387-2.2c0-.773-.13-1.506-.387-2.2a5.58 5.58 0 0 0-1.08-1.815 5.233 5.233 0 0 0-1.68-1.236c-.656-.308-1.383-.463-2.18-.463-.799 0-1.52.155-2.163.463a5.29 5.29 0 0 0-1.66 1.236 5.307 5.307 0 0 0-1.06 1.814 6.56 6.56 0 0 0-.368 2.2c0 .772.122 1.506.367 2.2.244.696.598 1.3 1.062 1.815a5.279 5.279 0 0 0 1.66 1.236c.642.309 1.363.463 2.161.463s1.525-.154 2.181-.463a5.222 5.222 0 0 0 1.68-1.236 5.575 5.575 0 0 0 1.08-1.814zm7.914 6.794V9.95h11.427v4.141h-7.22v13.85h-4.207zm26.675-15.557V9.95h4.208v17.99h-4.208v-2.433c-.566.901-1.37 1.609-2.413 2.123-1.042.515-2.09.772-3.146.772-1.364 0-2.612-.25-3.744-.752a8.758 8.758 0 0 1-2.915-2.066 9.6 9.6 0 0 1-1.891-3.01 9.717 9.717 0 0 1-.676-3.63c0-1.26.225-2.464.676-3.61a9.56 9.56 0 0 1 1.89-3.03 8.766 8.766 0 0 1 2.916-2.065c1.132-.502 2.38-.752 3.744-.752 1.055 0 2.104.257 3.146.772 1.043.515 1.847 1.222 2.413 2.123zm-.386 8.763a6.293 6.293 0 0 0 .386-2.2c0-.773-.13-1.506-.386-2.2a5.58 5.58 0 0 0-1.08-1.815 5.233 5.233 0 0 0-1.68-1.236c-.656-.308-1.384-.463-2.181-.463-.798 0-1.519.155-2.162.463a5.29 5.29 0 0 0-1.66 1.236 5.307 5.307 0 0 0-1.061 1.814 6.56 6.56 0 0 0-.367 2.2c0 .772.121 1.506.367 2.2.244.696.598 1.3 1.061 1.815a5.279 5.279 0 0 0 1.66 1.236c.643.309 1.364.463 2.162.463.797 0 1.525-.154 2.181-.463a5.222 5.222 0 0 0 1.68-1.236 5.575 5.575 0 0 0 1.08-1.814zM84.063 9.95h4.262L81.42 27.94H76.13L69.224 9.95h4.262l5.289 13.776L84.063 9.95zm13.44-.463c5.729 0 9.636 5.078 8.902 11.021H92.446c0 1.552 1.567 4.552 5.288 4.552 3.2 0 5.345-2.815 5.346-2.817l2.843 2.2c-2.542 2.713-4.623 3.96-7.882 3.96-5.823 0-9.77-3.684-9.77-9.458 0-5.223 4.079-9.458 9.231-9.458zm-5.046 7.894h10.084c-.031-.346-.578-4.552-5.072-4.552-4.495 0-4.98 4.206-5.012 4.552zm16.688 10.558V.917h4.208v27.022h-4.208z"/></svg>
                </a>
                </li>
                <li class="md:ml-10  mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6  mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6  mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">

                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div> 
    </nav>

    
        <div x-data="{ total: 5, current: 0, open: false }" class="container mx-auto px-4 pt-16">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">alpinejs (x-data)</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">  
                    <img @click="current = 0, open = true" src="/img/itzy01.jpg" alt="itzy01" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 1, open = true" src="/img/itzy02.jpg" alt="itzy02" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 2, open = true" src="/img/itzy03.jpg" alt="itzy03" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 3, open = true" src="/img/itzy04.jpg" alt="itzy04" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 4, open = true" src="/img/itzy05.jpg" alt="itzy05" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>       
                <div  x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>             
                    <img x-show="current == 0" src="/img/itzy01.jpg" alt="01" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 1" src="/img/itzy02.jpg" alt="02" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 2" src="/img/itzy03.jpg" alt="03" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 3" src="/img/itzy04.jpg" alt="04" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 4" src="/img/itzy05.jpg" alt="05" class="hover:opacity-75 transition ease-in-out duration-150"> 
                </div>
            </div>
        </div>
        
    
    <div x-data="{ total: 5, current: 0, open: false }" class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">alpinejs (x-data)</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">  
                    <img @click="current = 0, open = true" src="/img/01.jpg" alt="itzy01" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 1, open = true" src="/img/02.jpg" alt="itzy02" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 2, open = true" src="/img/03.jpg" alt="itzy03" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 3, open = true" src="/img/04.jpg" alt="itzy04" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div class="mt-8">  
                    <img @click="current = 4, open = true" src="/img/05.jpg" alt="itzy05" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>       
                <div  x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>             
                    <img x-show="current == 0" src="/img/01.jpg" alt="01" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 1" src="/img/02.jpg" alt="02" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 2" src="/img/03.jpg" alt="03" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 3" src="/img/04.jpg" alt="04" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>
                <div x-show="open" @click.away="open = false">
                    <span @click="if(current >= 1){ current = current - 1}"></span>
                    <span @click="if(current < total-1){ current = current + 1}"></span>
                    <span @click="open = false"></span>
                    <img x-show="current == 4" src="/img/05.jpg" alt="05" class="hover:opacity-75 transition ease-in-out duration-150"> 
                </div>
            </div>
    </div>
    
</body>

</html>


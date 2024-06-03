<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>
        Atlas Escapes home page
    </title>
</head>

<body class=" flex  w-full  bg-white dark:bg-neutral-900  overflow-x-hidden relative justify-center items-center gap-2 flex-col ">
    @include('my-ui.nav-bar')
    <div class="w-full flex flex-col md:flex-row max-w-7xl px-4 md:px-16 mt-36  justify-start items-center relative z-50">
        <div class="md:w-1/2 flex flex-col gap-3 justify-start items-start">
            <h1 class="text-4xl md:text-6xl font-bold text-neutral-900 dark:text-neutral-100">
                Let's embark on an unforgettable journey together
                <h1 class="bg-gradient-to-r text-2xl md:text-4xl font-bold from-primary-700  via-primary-500 to-primary-400 inline-block text-transparent bg-clip-text">
                    Discover Amazing Destinations
                </h1>

            </h1>
            <p class=" text-sm text-slate-500 dark:text-neutral-300  md:text-lg">
                From breathtaking landscapes to vibrant cultures, our travel experts will help you plan the perfect getaway. Whether you're seeking relaxation, adventure, or immersive experiences,
            </p>
            <div class="flex gap-4 mt-4">
                <a href="#" class="bg-primary-500 text-sm text-white px-4 py-2.5 rounded-md">
                    Book Your Dream
                </a>
                <a href="#" class=" text-sm flex gap-2 bg-slate-100 text-slate-600 px-4 py-2.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none">
                        <path d="M18.8906 12.846C18.5371 14.189 16.8667 15.138 13.5257 17.0361C10.296 18.8709 8.6812 19.7884 7.37983 19.4196C6.8418 19.2671 6.35159 18.9776 5.95624 18.5787C5 17.6139 5 15.7426 5 12C5 8.2574 5 6.3861 5.95624 5.42132C6.35159 5.02245 6.8418 4.73288 7.37983 4.58042C8.6812 4.21165 10.296 5.12907 13.5257 6.96393C16.8667 8.86197 18.5371 9.811 18.8906 11.154C19.0365 11.7084 19.0365 12.2916 18.8906 12.846Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                    Explore Destinations
                </a>
            </div>

        </div>
        <div class="md:w-1/2 flex justify-center md:mt-0 mt-10 md:justify-end items-end">
            <img src="{{ asset('home/hero.png') }}" alt="home" class="w-full h-full object-cover">
        </div>
    </div>
    </div>
    @include('my-ui.agency-slider')
    <div class="w-full flex flex-col  max-w-7xl px-4 md:px-16 mt-10  justify-start items-center relative z-50">
        <h1
        class="text-4xl md:text-6xl font-bold text-neutral-900 dark:text-neutral-100"
        >
            list of trips here
        </h1>
        
    </div>
    @livewireScripts
   
</body>

</html>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>
        Atlas Escapes admin trips panel
    </title>
</head>

<body class=" flex  w-full  bg-white dark:bg-neutral-900  overflow-x-hidden relative justify-center items-center gap-2 flex-col ">
    @include('my-ui.nav-bar')
    <div class="w-full flex max-w-7xl px-4 md:px-16 mt-32  justify-end items-center relative z-50">
    </div>
    <div class="flex flex-col px-4 md:px-16  w-full gap-5 max-w-7xl z-20 ">

        <div class="flex gap-2 justify-start items-start flex-col">
            <span class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                <a href="{{ route('admin.trips.index') }}" class="text-primary-500 hover:underline">
                    Trips
                </a>
                <span class="text-primary-500">/</span>
                <span class="text-gray-500">Details</span>
            </span>
            <p class=" text-xs text-gray-500 dark:text-neutral-400">
                discover trip details and manage it as you like
            </p>
        </div>

        <h1>
            {{ $trip->name }}
        </h1>
        <div class="w-full grid grid-cols-1 md:grid-cols-5  gap-3">
            <div class="w-full  relative col-span-2 overflow-hidden rounded-lg aspect-square">
                <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->name }}" class="object-cover w-full h-full">
                <span class="absolute flex justify-center items-center  gap-1 text-xs px-3 top-2 start-2 from-primary-500 bg-gradient-to-r to-primary-600 border border-primary-700 text-white rounded-full p-1">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                    Featured

                </span>
            </div>
            <div class=" w-full flex flex-col gap-3 justify-start items-start  col-span-3 md:ml-10">
                <div class="flex gap-2 text-primary-600 justify-start items-start flex-col">
                    <h1>
                        {{ $trip->description }}
                    </h1>
                </div>
                <div class="flex gap-2 justify-start items-start flex-col">

                    <p class=" text-sm text-gray-500 dark:text-neutral-400">
                        {{ $trip->name }}
                    </p>
                </div>
                <div class="flex gap-2 justify-start items-start flex-col">
                    <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                        trip destination
                    </h1>
                    <p class=" text-xs text-gray-500 dark:text-neutral-400">
                        {{ $trip->destination }}
                    </p>
                </div>
                <div class="flex gap-2 justify-start items-start flex-col">
                    <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                        trip price
                    </h1>
                    <p class=" text-xs text-gray-500 dark:text-neutral-400">
                        {{ $trip->price }} DH
                    </p>
                </div>
                <div class="flex gap-2 justify-start items-start flex-col">
                    <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                        trip seats
                    </h1>
                    <p class=" text-xs text-gray-500 dark:text-neutral-400">
                        {{ $trip->seats }}
                    </p>
                </div>
                <div class="flex gap-2 justify-start items-start flex-col">
                    <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                        trip supervisor
                    </h1>
                    <p class=" text-xs text-gray-500 dark:text-neutral-400">
                        {{ $trip->supervisor }}
                    </p>
                </div>

                <div class=" flex w-full gap-2 justify-start items-start md:mt-16">
                    <button type="button" class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-red-100 bg-white text-gray-800 shadow-sm hover:bg-red-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-red-500 dark:hover:bg-red-600/25">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-red-500">
                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-red-500">
                            Delete trip
                        </p>
                    </button>
                    <button type="button" class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                            <path d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                        </svg>

                        Edit trip
                    </button>
                </div>
            </div>
        </div>
        <!--Sug section-->
        <div class="flex mt-6 pb-3 gap-2 justify-start items-start flex-col">
            <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                Suggestions
            </h1>
            <div class="w-full grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-5">
                <div class="w-full flex flex-col gap-2 justify-start items-start">
                    <div class="w-full relative overflow-hidden rounded-lg aspect-square">
                        <img src="https://source.unsplash.com/1600x900/?nature,water" alt="nature" class="object-cover w-full h-full">
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                            trip name
                        </h1>
                        <p class=" text-xs text-gray-500 dark:text-neutral-400">
                            trip description
                        </p>
                        <p>
                            <span class="text-xs font-semibold text-gray-800 dark:text-neutral-200">
                                12
                            </span>
                            <span class="text-xs text-gray-500 dark:text-neutral-400">
                                seats
                            </span>
                        </p>
                        <p>
                            <span class="text-xs font-semibold text-gray-800 dark:text-neutral-200">
                                1200
                            </span>
                            <span class="text-xs text-gray-500 dark:text-neutral-400">
                                DH
                            </span>
                        </p>
                    </div>
                    
                </div>

                <div class="w-full flex flex-col gap-2 justify-start items-start">
                    <div class="w-full relative overflow-hidden rounded-lg aspect-square">
                        <img src="https://source.unsplash.com/1600x900/?nature,water" alt="nature" class="object-cover w-full h-full">
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                            trip name
                        </h1>
                        <p class=" text-xs text-gray-500 dark:text-neutral-400">
                            trip description
                        </p>
                    </div>
                    
                </div>

                <div class="w-full flex flex-col gap-2 justify-start items-start">
                    <div class="w-full relative overflow-hidden rounded-lg aspect-square">
                        <img src="https://source.unsplash.com/1600x900/?nature,water" alt="nature" class="object-cover w-full h-full">
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                            trip name
                        </h1>
                        <p class=" text-xs text-gray-500 dark:text-neutral-400">
                            trip description
                        </p>
                    </div>
                    
                </div>

                <div class="w-full flex flex-col gap-2 justify-start items-start">
                    <div class="w-full relative overflow-hidden rounded-lg aspect-square">
                        <img src="https://source.unsplash.com/1600x900/?nature,water" alt="nature" class="object-cover w-full h-full">
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                            trip name
                        </h1>
                        <p class=" text-xs text-gray-500 dark:text-neutral-400">
                            trip description
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    @livewireScripts
</body>

</html>
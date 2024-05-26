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
                update the trip details
            </p>
        </div>

        <h1>
            {{ $trip->name }}
        </h1>
        <div class="w-full">
            @include('admin.ui.trips.edit-trip-form')
        </div>
    </div>
    </div>
    @livewireScripts
</body>

</html>
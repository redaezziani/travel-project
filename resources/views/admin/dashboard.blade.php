<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/apexcharts@3.49.1/dist/apexcharts.min.css" rel="stylesheet">
    <title>Atlas Escapes admin Dashboard</title>
</head>

<body class="flex w-full bg-white dark:bg-neutral-900 overflow-x-hidden relative justify-center items-center gap-2 flex-col">
    @include('my-ui.nav-bar')

    <div class="flex flex-col mt-32 px-4 md:px-16 w-full gap-5 max-w-7xl z-20">
        <div class="flex gap-2 justify-start items-start flex-col">
            <h1 class="text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                Dashboard Overview
            </h1>
            <p class="text-xs text-gray-500 dark:text-neutral-400">
                here you can see all the trips in the system and manage them as you like
            </p>
        </div>

        <div class="w-full mt-5 grid grid-cols-1 md:grid-cols-2 gap-3 ">


            <div class="border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70" id="trips"></div>
            <div class="border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70" id="users"></div>
            <div class=" min-h-96 col-span-1 md:col-span-2 shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                @include('admin.ui.bookings.table')
            </div>
        </div>
    </div>

    @vite('resources/js/dashbaord.js')
    @livewireScripts
</body>

</html>
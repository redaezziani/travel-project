<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>
        Atlas Escapes admin trips panel
    </title>
</head>

<body class=" flex  w-full  overflow-x-hidden relative justify-center items-center gap-2 flex-col ">
    @include('my-ui.nav-bar')
    <div class="flex flex-col px-4 md:px-16 mt-32 w-full gap-5 max-w-7xl z-20 ">
        <div class="flex gap-2 justify-start items-start flex-col">
            <h1
            class=" text-sm font-semibold text-gray-800 dark:text-neutral-200 capitalize"
            >
                the list of all trips in the system
            </h1>
            <p
            class=" text-xs text-gray-500 dark:text-neutral-400"
            >
                here you can see all the trips in the system and manage them as you like
            </p>
        </div>
        @include('admin.ui.trips.table')
    </div>

</body>

</html>
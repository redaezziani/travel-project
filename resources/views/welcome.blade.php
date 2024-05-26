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

    <div class="flex flex-col h-[50rem] overflow-hidden  w-full gap-5  z-20 ">
    <div class="flex flex-col gap-3  justify-start items-start">
       
    </div>
    </div>
    @livewireScripts
</body>

</html>
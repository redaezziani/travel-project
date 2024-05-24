<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>
    Atlas Escapes 
    </title>
</head>

<body
class=" flex min-h-screen w-full overflow-x-hidden relative justify-start items-center gap-2 flex-col "
>
@include('my-ui.nav-bar')
<div class="size-[300px] rounded-full bg-blue-300/40 blur-[130px] absolute -top-20 -left-20"></div>
<div class="size-[500px] rounded-full bg-indigo-300/30  blur-[130px] absolute -top-20 -left-10"></div>
<div class="w-[500px] h-56 rounded-full bg-amber-300/10  blur-[130px] absolute top-0 "></div>
<script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</body>
</html>
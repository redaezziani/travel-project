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
    <div class="size-[350px] bg-primary-500/40 blur-[130px] rounded-full absolute -right-10 -top-10">

    </div>
    @include('my-ui.nav-bar')
    
    <h1
    class="text-4xl mt-96 md:text-2xl font-bold text-green-500 "
    >
        Thank you for booking with us!
    </h1>
    <button
    class=" mt-3"
    >
        <a href="{{ route('welcome') }}" class="bg-green-500 text-white px-4 py-2.5 rounded-md">
            Go back to home
        </a>
    </button>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <script>
        const count = 200,
            defaults = {
                origin: {
                    y: 0.7
                },
            };

        function fire(particleRatio, opts) {
            confetti(
                Object.assign({}, defaults, opts, {
                    particleCount: Math.floor(count * particleRatio),
                })
            );
        }

        fire(0.25, {
            spread: 26,
            startVelocity: 55,
        });

        fire(0.2, {
            spread: 60,
        });

        fire(0.35, {
            spread: 100,
            decay: 0.91,
            scalar: 0.8,
        });

        fire(0.1, {
            spread: 120,
            startVelocity: 25,
            decay: 0.92,
            scalar: 1.2,
        });

        fire(0.1, {
            spread: 120,
            startVelocity: 45,
        });
    </script>
</body>

</html>
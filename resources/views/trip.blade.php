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

            <p class=" text-sm text-gray-500 dark:text-neutral-400">
                Discover more about the trip and book it as you like
            </p>
        </div>

        <h1>
            {{ $trip->name }}
        </h1>
        <div class="w-full grid grid-cols-1 md:grid-cols-5  gap-3">
            <div class="w-full  relative col-span-2 overflow-hidden rounded-lg aspect-square">
                <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->name }}" class="object-cover w-full h-full">
                <span class="absolute flex justify-center items-center  gap-1 text-sm px-3 top-2 start-2 from-primary-500 bg-gradient-to-r to-primary-600 border border-primary-700 text-white rounded-full p-1">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                    Featured

                </span>
            </div>
            <div class=" w-full flex flex-col gap-3 justify-start items-start  col-span-3 md:ml-10">
                <div class="flex gap-2 font-medium capitalize text-xl  text-primary-500 justify-start items-start flex-col">
                    <h1>
                        {{ $trip->description }}
                    </h1>
                </div>
                <div class="flex gap-2 justify-start items-start flex-col">

                    <p class=" text-lg text-gray-800 dark:text-neutral-400">
                        {{ $trip->name }}
                    </p>
                </div>

                <div class="w-full mt-2  flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex gap-2  justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            Your trip destination
                        </h1>
                        <p class=" text-sm flex justify-center items-center gap-2 text-gray-500 dark:text-neutral-400">
                            <svg class=" text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                                <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="currentColor" stroke-width="1.5" />
                                <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                            {{ $trip->destination }}
                        </p>
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            Your trip price
                        </h1>
                        <p class=" flex justify-center gap-2 items-center text-sm text-gray-500 dark:text-neutral-400">
                            <svg class=" text-amber-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                                <path d="M17.5 5C18.3284 5 19 5.67157 19 6.5C19 7.32843 18.3284 8 17.5 8C16.6716 8 16 7.32843 16 6.5C16 5.67157 16.6716 5 17.5 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.77423 11.1439C1.77108 12.2643 1.7495 13.9546 2.67016 15.1437C4.49711 17.5033 6.49674 19.5029 8.85633 21.3298C10.0454 22.2505 11.7357 22.2289 12.8561 21.2258C15.8979 18.5022 18.6835 15.6559 21.3719 12.5279C21.6377 12.2187 21.8039 11.8397 21.8412 11.4336C22.0062 9.63798 22.3452 4.46467 20.9403 3.05974C19.5353 1.65481 14.362 1.99377 12.5664 2.15876C12.1603 2.19608 11.7813 2.36233 11.472 2.62811C8.34412 5.31646 5.49781 8.10211 2.77423 11.1439Z" stroke="currentColor" stroke-width="1.5" />
                                <path d="M7.89551 13.4478L11.7164 9.62684M12.8358 10.7462L13.791 9.79104M8.05972 15.5224L9.01491 14.5672M9.80598 11.5373L12.0448 13.7761M12.0448 13.7761C12.4157 14.1471 12.3957 14.7685 12 15.1642L11.5224 15.6418C11.1267 16.0375 10.5053 16.0575 10.1343 15.6866L7.22387 12.7761M12.0448 13.7761C12.4157 14.1471 13.0372 14.127 13.4328 13.7313L13.9105 13.2537C14.3061 12.858 14.3262 12.2366 13.9552 11.8656L11.0448 8.9552" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            {{ $trip->price }} DH
                        </p>
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            the number of seats in the trip
                        </h1>
                        <p class=" text-sm flex justify-center items-center gap-2 text-gray-500 dark:text-neutral-400">
                            <svg class=" text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                                <path d="M7 18V11.5C7 10.6716 6.32843 10 5.5 10C4.67157 10 4 10.6716 4 11.5V16C4 17.1046 4.89543 18 6 18H7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20 16V11.5C20 10.6716 19.3284 10 18.5 10C17.6716 10 17 10.6716 17 11.5V18H18C19.1046 18 20 17.1046 20 16Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 14H7V18H17V14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.5 22H9.5V18H14.5V22Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 22H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.5 10V8C18.5 5.17157 18.5 3.75736 17.6213 2.87868C16.7426 2 15.3284 2 12.5 2H11.5C8.67157 2 7.25736 2 6.37868 2.87868C5.5 3.75736 5.5 5.17157 5.5 8V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            {{ $trip->seats }}
                        </p>
                    </div>
                </div>


                <div class="w-full flex mt-2 justify-start items-center gap-6">
                    <div class="flex gap-1  justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            trip supervisor
                        </h1>
                        <p class=" text-sm text-gray-500 dark:text-neutral-400">
                            {{ $trip->supervisor }}
                        </p>
                    </div>

                    <div class="flex gap-1 justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            trip status
                        </h1>
                        <p class=" text-sm text-gray-500 dark:text-neutral-400">
                            {{ $trip->is_started ? 'Started' : 'Not started' }}
                        </p>
                    </div>
                    <div class="flex gap-1 justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            availeble seats
                        </h1>
                        <p class=" text-sm text-gray-500 dark:text-neutral-400">

                            {{ $trip->seats - $trip->bookings->count() }}
                        </p>
                    </div>
                </div>
                <div class="w-full mt-2 flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex text-neutral-500 justify-center items-center  gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                            <path d="M8 13.5H16M8 8.5H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.09881 19C4.7987 18.8721 3.82475 18.4816 3.17157 17.8284C2 16.6569 2 14.7712 2 11V10.5C2 6.72876 2 4.84315 3.17157 3.67157C4.34315 2.5 6.22876 2.5 10 2.5H14C17.7712 2.5 19.6569 2.5 20.8284 3.67157C22 4.84315 22 6.72876 22 10.5V11C22 14.7712 22 16.6569 20.8284 17.8284C19.6569 19 17.7712 19 14 19C13.4395 19.0125 12.9931 19.0551 12.5546 19.155C11.3562 19.4309 10.2465 20.0441 9.14987 20.5789C7.58729 21.3408 6.806 21.7218 6.31569 21.3651C5.37769 20.6665 6.29454 18.5019 6.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <p class=" text-neutral-500 text-xs">
                            {{ $trip->comments->count() }}
                            Comment{{ $trip->comments->count() > 1 ? 's' : '' }}
                        </p>
                    </div>
                    <div class="flex text-neutral-500 justify-center items-center  gap-2">
                        <svg class=" fill-rose-500 text-rose-500 " stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                            <path d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <p class=" text-rose-500 text-xs">
                            {{ $trip->likes->count() }}
                            Like{{ $trip->likes->count() > 1 ? 's' : '' }}
                        </p>
                    </div>
                    <div class=" text-xs flex justify-center items-center gap-2 text-neutral-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                            <path d="M12 8V12L14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>
                            {{ $trip->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
                <div class="flex mt-3  justify-start items-center gap-2">
                    <svg class=" text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="none">
                        <path d="M11.9982 2C8.99043 2 7.04018 4.01899 4.73371 4.7549C3.79589 5.05413 3.32697 5.20374 3.1372 5.41465C2.94743 5.62556 2.89186 5.93375 2.78072 6.55013C1.59143 13.146 4.1909 19.244 10.3903 21.6175C11.0564 21.8725 11.3894 22 12.0015 22C12.6135 22 12.9466 21.8725 13.6126 21.6175C19.8116 19.2439 22.4086 13.146 21.219 6.55013C21.1078 5.93364 21.0522 5.6254 20.8624 5.41449C20.6726 5.20358 20.2037 5.05405 19.2659 4.75499C16.9585 4.01915 15.0061 2 11.9982 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 12.5C10 12.5 10.5 12.5 11 13.5C11 13.5 12.5882 11 14 10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <p class=" text-xs text-gray-400 dark:text-neutral-400">
                            our service is available 24/7 and you can chnage the trip details as you like or cancel it if you want , please contact us for more information
                        </p>
                    </svg>
                </div>
                <form action=
"{{ route('stripe.checkout') }}"
 method=
"POST"
 method="POST" class="py-2 px-4 mt-6 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-primary-600 text-white hover:bg-primary-700 disabled:opacity-50 disabled:pointer-events-none">
                    @csrf
                    <input
                    class="  hidden"
                    type="hidden" name="trip_id" value="{{ $trip->id }}">
                    <button
                    class=" flex gap-2  justify-center items-center"
                    type="submit">
                        Book Now
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                            <path d="M19 14H20.2389C21.3498 14 22.1831 15.0805 21.9652 16.2386L21.7003 17.6466C21.4429 19.015 20.3127 20 19 20" stroke="currentColor" stroke-width="1.5" />
                            <path d="M5 14H3.76113C2.65015 14 1.81691 15.0805 2.03479 16.2386L2.29967 17.6466C2.55711 19.015 3.68731 20 5 20" stroke="currentColor" stroke-width="1.5" />
                            <path d="M18.2696 10.5001L18.7911 15.1968C19.071 18.3791 19.211 19.9702 18.2696 20.9851C17.3283 22.0001 15.7125 22.0001 12.481 22.0001H11.519C8.2875 22.0001 6.67174 22.0001 5.73038 20.9851C4.78901 19.9702 4.92899 18.3791 5.20893 15.1968L5.73038 10.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M15 5C15 3.34315 13.6569 2 12 2C10.3431 2 9 3.34315 9 5" stroke="currentColor" stroke-width="1.5" />
                            <path d="M5.2617 8.86971C5.01152 7.45403 4.88643 6.74619 5.13559 6.20431C5.30195 5.84248 5.57803 5.53512 5.9291 5.32087C6.45489 5 7.21577 5 8.73753 5H15.2625C16.7842 5 17.5451 5 18.0709 5.32087C18.422 5.53512 18.698 5.84248 18.8644 6.20431C19.1136 6.74619 18.9885 7.45403 18.7383 8.86971L18.6872 9.15901C18.5902 9.70796 18.5417 9.98243 18.446 10.2349C18.2806 10.671 18.0104 11.0651 17.6565 11.3863C17.4517 11.5722 17.2062 11.7266 16.7153 12.0353C16.2537 12.3255 16.0229 12.4706 15.779 12.5845C15.3579 12.7812 14.905 12.9105 14.439 12.9672C14.169 13 13.8916 13 13.3369 13H10.6631C10.1084 13 9.831 13 9.56102 12.9672C9.09497 12.9105 8.64214 12.7812 8.22104 12.5845C7.9771 12.4706 7.74632 12.3255 7.28474 12.0353C6.79376 11.7266 6.54827 11.5722 6.34346 11.3863C5.98959 11.0651 5.7194 10.671 5.55404 10.2349C5.45833 9.98243 5.40983 9.70796 5.31282 9.15901L5.2617 8.86971Z" stroke="currentColor" stroke-width="1.5" />
                            <path d="M12 10.0024L12.0087 10.0001" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <!--Sug section-->
        <div class="flex mt-6 pb-3 gap-2 justify-start items-start flex-col">
            <h1 class=" text-sm font-medium flex gap-2 justify-center items-center text-gray-600 dark:text-neutral-200 capitalize">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none">
                    <path d="M5.05857 11.7421C6.97712 11.9781 8.73113 10.5535 8.97628 8.56018C9.22142 6.56689 6.93885 4.64584 7.76802 2C3.66477 2.59449 2.25056 5.90113 2.02862 7.70572C1.78348 9.69901 3.14003 11.5062 5.05857 11.7421Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M7 20C5.07536 15.3242 4.76992 11.1941 5.13275 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.50786 17.6681C10.6828 20.0602 13.5206 20.7199 15.8463 19.1415C18.172 17.5631 18.5378 13.1898 22 11.6651C18.3054 7.57247 13.6971 9.04998 11.5916 10.4789C9.26587 12.0573 8.33296 15.276 9.50786 17.6681Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M6 22C8.37778 17.9044 11.2644 15.43 14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Pictures of the destination enjoy the view
            </h1>
            <div class="w-full grid grid-cols-1 mt-7 gap-5 sm:grid-cols-2 md:grid-cols-3">
                @foreach ($trip->destination_images as $destinationImage)
                <div class="w-full flex flex-col gap-2 justify-start items-start">
                    <div class="w-full relative overflow-hidden rounded-lg aspect-video">
                        <img src="{{ asset('storage/' . $destinationImage->image) }}" alt="nature" class="object-cover w-full h-full">
                    </div>
                    <div class="flex gap-2 justify-start items-start flex-col">
                        <h1 class=" text-sm font-medium text-gray-600 dark:text-neutral-200 capitalize">
                            {{ $destinationImage->destination }}
                        </h1>

                    </div>

                </div>
                @endforeach


            </div>
        </div>
    </div>
    </div>
    @livewireScripts
</body>

</html>
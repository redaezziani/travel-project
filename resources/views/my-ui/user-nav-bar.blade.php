<header class="fixed top-0 z-50 border-b border-neutral-400/15 flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-4 dark:bg-neutral-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class=' flex gap-2 items-center' href="/">
                <svg aria-label="Logo" class="flex-shrink-0 stroke-slate-700 dark:stroke-slate-50 size-8 sm:size-9" width="40" viewBox="0 0 600 500" fill="none">
                    <rect x="379.447" y="43.748" width="172.095" height="418.666" rx="86.0473" stroke-width="30"></rect>
                    <path d="M231.995 351.6L306.965 221.807L381.934 92.0154C404.822 52.3913 458.092 33.3388 500.917 49.4604C543.742 65.5819 559.905 110.773 537.018 150.397L387.079 409.981C364.191 449.605 310.921 468.657 268.096 452.536C225.271 436.414 209.108 391.224 231.995 351.6Z" stroke-width="30"></path>
                    <path d="M278.239 272.481L278.206 272.539L278.173 272.597L201.072 408.622C180.402 445.088 131.538 462.758 92.2557 447.97C53.2008 433.268 38.461 392.055 59.3333 355.92L216.867 83.187C237.575 47.3364 285.772 30.0984 324.519 44.6849C363.283 59.2777 377.899 100.192 357.157 136.049L278.239 272.481Z" stroke-width="30"></path>
                </svg>
                <p class="text-primary font-medium">
                    Travels
                </p>

            </a>

            <div class="sm:hidden flex justify-center gap-3 items-center">


                <!-- Mobile Menu Toggle -->
                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10" data-hs-collapse="#navbar-with-mega-menu" aria-controls="navbar-with-mega-menu" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-with-mega-menu" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col gap-8 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                <!-- Navigation Links -->
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('welcome') }}">Home</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('filter') }}">All Trips</a>

                <!-- Authentication Links -->
                @auth
                <div class="flex items-center space-x-4">
                    <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] ">
                        <button id="hs-mega-menu-basic-dr" type="button" class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-neutral-400 dark:hover:text-neutral-500 ">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full w-8 h-8">
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5 hidden">
                            <a href="/user/profile" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                Profile Settings
                            </a>
                            {{-- if he is an admin --}}
                            @if(Auth::user()->role === 'admin')
                            <a href="{{ route('admin.trips.index') }}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                                    <path d="M20 22V17C20 15.1144 20 14.1716 19.4142 13.5858C18.8284 13 17.8856 13 16 13L12 22L8 13C6.11438 13 5.17157 13 4.58579 13.5858C4 14.1716 4 15.1144 4 17V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 15L11.5 19L12 20.5L12.5 19L12 15ZM12 15L11 13H13L12 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.5 6.5V5.5C15.5 3.567 13.933 2 12 2C10.067 2 8.5 3.567 8.5 5.5V6.5C8.5 8.433 10.067 10 12 10C13.933 10 15.5 8.433 15.5 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                Admin Panel
                            </a>
                            @endif
                            <form class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-5 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>

                                <button type="submit" class="text-red-500">Logout</button>
                            </form>

                        </div>

                    </div>
                </div>
                @else
                <div class="flex md:ml-5 items-center space-x-6">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500">Login</a>
                    <a href="{{ route('register') }}" class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg">Register</a>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
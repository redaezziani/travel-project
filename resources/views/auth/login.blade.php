<x-guest-layout>
    <div class="w-full h-screen bg-white dark:bg-neutral-800 overflow-hidden flex justify-center items-center gap-2">
        <div class=" w-1/2 h-full hidden md:block overflow-hidden">
            <img class="w-full h-full object-cover object-center" src="https://images.squarespace-cdn.com/content/v1/5a4188e76f4ca304bb0e99ab/1535526129045-1Q60VGQ758034BTGNFIX/morocco-sahara-desert-sand-dunes-3.jpg" alt="" srcset="">
        </div>
        <div class=" w-full md:w-1/2 h-full p-4 md:p-9 flex relative flex-col justify-center items-center">
            <div class=" flex w-full  absolute justify-end   top-0 md:px-7   p-4 ">
                <a class="flex gap-1 items-center justify-center " href="/">
                    <svg aria-label="Logo" class="flex-shrink-0 stroke-primary-500  dark:stroke-slate-50 size-8 sm:size-9" width="40" viewBox="0 0 600 500" fill="none">
                        <rect x="379.447" y="43.748" width="172.095" height="418.666" rx="86.0473" strokeWidth="30"></rect>
                        <path d="M231.995 351.6L306.965 221.807L381.934 92.0154C404.822 52.3913 458.092 33.3388 500.917 49.4604C543.742 65.5819 559.905 110.773 537.018 150.397L387.079 409.981C364.191 449.605 310.921 468.657 268.096 452.536C225.271 436.414 209.108 391.224 231.995 351.6Z" stroke-width="30"></path>
                        <path d="M278.239 272.481L278.206 272.539L278.173 272.597L201.072 408.622C180.402 445.088 131.538 462.758 92.2557 447.97C53.2008 433.268 38.461 392.055 59.3333 355.92L216.867 83.187C237.575 47.3364 285.772 30.0984 324.519 44.6849C363.283 59.2777 377.899 100.192 357.157 136.049L278.239 272.481Z" stroke-width="30"></path>
                    </svg>
                    <p>
                        {{ config('app.name') }}
                    </p>
                </a>
            </div>

            <div class=" md:w-[30rem] w-full flex justify-start items-start gap-2 flex-col">
                <h1 class=" text-2xl font-semibold text-gray-800 dark:text-neutral-200 capitalize">
                    Welcome back to Atlas Escapes 👋
                </h1>
                <p class=" text-sm text-gray-500 dark:text-neutral-400">
                    fill the form to log in to your account
            </div>

           <div class="  md:w-[30rem] mt-5 w-full justify-start items-start">
           <x-validation-errors class="mb-4 bg-red-500/5 border border-red-400 rounded-lg p-2" />
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
           </div>

            <form class="md:w-[30rem] mt-9 w-full" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex flex-col gap-2 items-center justify-end mt-4">
                    <x-button class=" mt-4 px-3 flex justify-center items-center py-2.5 !bg-primary-500 !hover:bg-blue-400 w-full">
                        {{ __('Log in') }}
                    </x-button>
                    <div class="w-full">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-guest-layout>
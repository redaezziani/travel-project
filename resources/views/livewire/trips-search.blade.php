<div class="w-full flex max-w-[90rem] flex-col py-2  px-4 md:px-16 mt-52  justify-start items-center relative z-50">
    <div class="w-full justify-between flex items-center">
        <div class="relative justify-center items-center w-96 flex">
            <input
            placeholder="Search..."
            wire:model.live="search" class="w-full px-4 text-neutral-700 py-2.5 rounded-md border border-neutral-200 dark:border-neutral-700 focus:outline-none focus:border-primary-500 dark:bg-neutral-800 dark:text-neutral-100" type="text">
            <button class="absolute z-10 right-1 text-neutral-500 bg-white dark:bg-neutral-50/0 dark:text-slate-50   p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none">
                    <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <!-- Select -->
        <div class="w-80">
            <select data-hs-select='{
  "placeholder": "Select option...",
  "toggleTag": "<button type=\"button\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-primary-500 focus:ring-primary-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary-600 dark:text-primary-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}' class="hidden">
                <a href="{{ route('filter') }}">
                    <option value="all">All</option>
                </a>
                @foreach($categories as $category)
                <a href="{{ route('filter', ['cat' => $category]) }}">
                    <option value="{{$category}}">{{$category->category}}</option>
                </a>
                @endforeach

            </select>
        </div>
        <!-- End Select -->
    </div>

    <div class=" w-full grid mt-10 grid-cols-1 md:grid-cols-7 gap-3">

        <div class="w-full col-span-7 flex-col flex justify-start items-start">
            <div class=" w-full grid mt-6 py-3 grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-3">

                @foreach($results as $trip)
                <div class="w-full col-span-1  overflow-hidden  flex flex-col gap-3 justify-start items-start relative">
                    <div class="w-full border border-neutral-400/35 bg-neutral-100 dark:bg-neutral-50/15 rounded-lg aspect-video  overflow-hidden">
                        <img class="w-full  h-auto object-cover" src="{{ asset('storage/' . $trip->image) }}" alt="" srcset="">
                    </div>
                    <div class="flex  pb-4 flex-col gap-2 justify-start items-start">
                        <h2 class=" text-green-500 text-sm ">
                            {{$trip->price}} DH
                        </h2>
                        <a href="{{ route('trip', $trip->id) }}" class=" text-neutral-700 text-sm ">
                            {{$trip->name}}
                        </a>
                        <p class=" text-neutral-400 line-clamp-2 text-xs ">
                            {{$trip->description}}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="w-full flex">
                {{ $results->links('pagination::tailwind') }}
            </div>
        </div>

    </div>


</div>
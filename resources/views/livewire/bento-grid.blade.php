<div class="w-full grid min-h-[20rem] z-10 relative  mt-6 py-3 grid-cols-1 sm:grid-cols-3 md:grid-cols-3 gap-2">
    <div class="w-full flex relative justify-start items-end col-span-2 max-h-96 aspect-square overflow-hidden h-auto rounded-lg border border-slate-400/25">
        <img class="w-full z-0 absolute  h-auto object-cover" src="{{ asset('storage/' . $lastTrip->image) }}" alt="" srcset="">
        <div class="w-full z-10 h-full bg-gradient-to-b from-neutral-900/0 to-neutral-900 flex flex-col gap-2 justify-end items-start p-4">

            <a href="{{ route('trip', $lastTrip->id) }}" class="  text-white capitalize  text-2xl font-medium ">
                {{$lastTrip->name}}
            </a>
            <p class=" text-neutral-300   text-sm max-w-1/2 line-clamp-3 ">
                {{$lastTrip->description}}
            </p>
            @if($lastTrip->start_date < now()) <div class="flex gap-2 items-center justify-start">

                <h1 class=" font-medium text-neutral-100 text-xs ">
                    {{$lastTrip->start_date}}
                </h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#ffffff" fill="none">
                    <path d="M18 2V4M6 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.9955 13H12.0045M11.9955 17H12.0045M15.991 13H16M8 13H8.00897M8 17H8.00897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.5 8H20.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 8H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
        </div>
        @endif
    </div>
</div>
<div class="w-full  gap-2 flex flex-col  col-span-1 max-h-96 aspect-square overflow-hidden h-auto ">
    @foreach($mostPopularTrips as $trip)
    <div class="w-full flex relative justify-start items-end  overflow-hidden rounded-lg border border-slate-400/25 h-1/2">
        <img class="w-full z-0 absolute h-auto object-cover" src="{{ asset('storage/' . $trip->image) }}" alt="" srcset="">
        <div class="w-full z-10 h-full bg-gradient-to-b from-neutral-900/0 to-neutral-900 flex flex-col gap-2 justify-end items-start p-4">

            <a href="{{ route('trip', $lastTrip->id) }}" class=" text-white capitalize  text-sm font-medium ">
                {{$trip->name}}
            </a>
            <p class=" text-neutral-300   text-xs max-w-1/2 line-clamp-3 ">
                {{$trip->description}}
            </p>
            @if($trip->start_date < now()) <div class="flex gap-2 items-center justify-start">

                <h1 class=" font-medium text-neutral-100 text-xs ">
                    {{$trip->start_date}}
                </h1>
        </div>
        @endif
    </div>
</div>
@endforeach

</div>

</div>
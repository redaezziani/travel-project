<div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
            Update trip
        </h3>

    </div>
    <div class="p-1 px-4 overflow-y-auto">
        <p class="mt-1 text-gray-600 dark:text-neutral-400">
            Here you can update the trip details
        </p>
    </div>
    <form action="{{ route('admin.trips.update', $trip) }}" method="POST" enctype="multipart/form-data" class="w-full p-4 overflow-y-auto flex flex-col gap-2 justify-start items-start">
        @csrf
        @method('PUT')
        <div class=" w-full">
            <label for="name" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Name
            </label>
            <input type="text" name="name" id="name" value="{{ old('name', $trip->name) }}" placeholder="Enter the trip name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full">
            <label for="description" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Description
            </label>
            <textarea name="description" id="description" placeholder="Enter the trip description" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">{{ old('description', $trip->description) }}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full flex-col justify-start items-center mt-5 gap-3">
            <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->name }}" class="w-full
             h-32 object-cover rounded-lg ">
            <label for="image" class="block text-sm text-slate-700  font-medium mb-2 dark:text-white">
                Image
            </label>
            <label class="block">
                <span class="sr-only">Choose profile photo</span>
                <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary-600 file:text-white hover:file:bg-primary-700 file:disabled:opacity-50 file:disabled:pointer-events-none dark:text-neutral-500 dark:file:bg-primary-500 dark:hover:file:bg-primary-400">
            </label>
            @error('image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full">
            <label for="price" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Price
            </label>
            <input type="number" name="price" id="price" value="{{ old('price', $trip->price) }}" placeholder="Enter the trip price" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full">
            <label for="seats" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Seats
            </label>
            <input type="number" name="seats" id="seats" value="{{ old('seats', $trip->seats) }}" placeholder="Enter the trip seats" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            @error('seats')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full">
            <label for="supervisor" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Supervisor
            </label>
            <input type="text" name="supervisor" id="supervisor" value="{{ old('supervisor', $trip->supervisor) }}" placeholder="Enter the trip supervisor" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            @error('supervisor')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full">
            <label for="destination" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Destination
            </label>
            <input type="text" name="destination" id="destination" value="{{ old('destination', $trip->destination) }}" placeholder="Enter the trip destination" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            @error('destination')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class=" w-full">
            <label for="category" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Category
            </label>
            <input type="text" name="category" id="category" value="{{ old('category', $trip->category) }}" placeholder="Enter the trip category" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary-500 focus:ring-primary-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            @error('category')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full">
            <label for="is_featured" class="block text-sm text-slate-700 font-medium mb-2 dark:text-white">
                Featured
            </label>
            <!-- Select -->
            <select name="is_featured" id="is_featured" data-hs-select='{
            "placeholder": "Select option...",
            "toggleTag": "<button type=\"button\"></button>",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-primary-500 focus:ring-primary-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400",
            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary-600 dark:text-primary-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
            "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
        }' class="hidden">
                <option value="0" {{ old('is_featured', $trip->is_featured) == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('is_featured', $trip->is_featured) == 1 ? 'selected' : '' }}>Yes</option>
            </select>
            <!-- End Select -->
            @error('is_featured')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-end w-full items-center gap-x-2 py-3 px-4 ">
            <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-primary-500 bg-primary-500 text-white shadow-sm hover:bg-primary-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:bg-primary-500 dark:hover:bg-primary-400">
                <span>Update</span>
            </button>
        </div>
    </form>
</div>
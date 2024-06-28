<div class="w-full flex flex-col mt-4 gap-2">
    @if (session()->has('message'))
    <div class="alert alert-success text-green-700 bg-green-100 border border-green-200 p-2 rounded">
        {{ session('message') }}
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-error text-red-700 bg-red-100 border border-red-200 p-2 rounded">
        {{ session('error') }}
    </div>
    @endif

    <form wire:submit.prevent="createComment" class="space-y-4">
        <div>
            <label for="content" class="block text-sm capitalize font-medium text-gray-700">Content</label>
            <textarea id="content" wire:model="content" class="shadow-sm mt-3 focus:ring-primary-500 focus:border-primary-500  block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
            @error('content') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="flex items-center gap-2 px-4 py-2 border text-neutral-800 dark:text-slate-50 text-sm font-medium rounded-md shadow-sm  border-slate-400/35   focus:outline-none ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"  fill="none">
                <path d="M8 13.5H16M8 8.5H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.09881 19C4.7987 18.8721 3.82475 18.4816 3.17157 17.8284C2 16.6569 2 14.7712 2 11V10.5C2 6.72876 2 4.84315 3.17157 3.67157C4.34315 2.5 6.22876 2.5 10 2.5H14C17.7712 2.5 19.6569 2.5 20.8284 3.67157C22 4.84315 22 6.72876 22 10.5V11C22 14.7712 22 16.6569 20.8284 17.8284C19.6569 19 17.7712 19 14 19C13.4395 19.0125 12.9931 19.0551 12.5546 19.155C11.3562 19.4309 10.2465 20.0441 9.14987 20.5789C7.58729 21.3408 6.806 21.7218 6.31569 21.3651C5.37769 20.6665 6.29454 18.5019 6.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
            Add Comment
        </button>
    </form>

    <h2 class="mt-6 text-lg font-medium text-gray-900">Comments</h2>
    <ul class="space-y-4">
        @foreach($comments as $comment)
        <li class="border border-gray-300 rounded-md p-4 bg-white shadow-sm flex justify-between items-start">
            <div class="text-sm">
                <strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}
                <p class="text-gray-500 text-xs mt-1">Trip: {{ $comment->trip->name }}</p>
            </div>
            {{-- Delete button if the user is logdin   --}}
            @if(Auth::check())
            @if(Auth::user()->role === 'admin' || $comment->user_id === Auth::id())
            <button wire:click="deleteComment({{ $comment->id }})" class="inline-flex items-center px-2 py-1 border border-transparent text-xs font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Delete
            </button>
            @endif
            @endif
        </li>
        @endforeach
    </ul>
</div>
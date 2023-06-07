<div>
    <form method="POST" wire:submit.prevent="createPermission()">
        <div class="mt-5 bg-white rounded-lg">
            <div class="flex">
                <div class="flex-1 py-5 pl-5 overflow-hidden">
                    <h1 class="inline text-2xl font-semibold leading-none">Create New Permission</h1>
                </div>
            </div>
            <div class="px-5 pb-5">
                <input placeholder="Name of Permission" wire:model='permission'
                    class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-200 focus:bg-white  focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-200">
            </div>
            @error('permission')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <hr class="mt-4">
            <div class="flex flex-row-reverse p-3">
                <div class="flex-initial pl-3">
                    <button type="submit"
                        class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-gray-500 rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                        <span class="pl-2 mx-1">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Category Index</a>
            </div>
            <div class="m-2 p-2 bg-gray-50 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" 
                            class="block w-full transition duration-150 appearance-none bg-white border border-gray-400 rounded-md py-1">
                     </div>
                    </div>
                        <div class="sm:col-span-6">
                             <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <div class="mt-1">
                            <input type="file" id="image" name="image" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-2 px-1">
                        </div>
                    </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" name="description"
                            class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 w-full"></textarea>
                        </div>
                    </div>
                    <div class="mt-6 p-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Save</button>
                    </div>
                </form>
                </div>
            </div>
            


        </div>
    </div>
</x-admin-layout>

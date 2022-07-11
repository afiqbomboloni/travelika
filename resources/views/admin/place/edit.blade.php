<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.places.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Place Index</a>
            </div>
            <div class="m-2 p-2 bg-gray-50 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.places.update', $place->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" value="{{ $place->name }}" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                     </div>
                    </div>
                        <div class="sm:col-span-6">
                             <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                             <img src="{{ asset('/storage/images/categories/'.$place->image) }}" class="h-20 w-20">
                        <div class="mt-1">
                            <input type="file" id="image" name="image" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-2 px-1">
                        </div>
                    </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1">
                            <input type="number" id="price" name="price" min="0.00" max="10000000000" value="{{ $place->price }}"
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                        </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" name="description"
                            class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 w-full">
                        {{ $place->description }}
                        </textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <div class="mt-1">
                            <select class="form-multiselect block w-full mt-1" name="categories[]" id="categories" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($place->categories->contains($category))>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="mt-6 p-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Update</button>
                    </div>
                </form>
                </div>
            </div>
            


        </div>
    </div>
</x-admin-layout>

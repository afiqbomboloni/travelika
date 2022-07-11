<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.bookings.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Booking Index</a>
            </div>
            <div class="m-2 p-2 bg-gray-50 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.bookings.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <div class="mt-1">
                            <input type="text" id="first_name" name="first_name" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                     </div>
                    </div>
                        <div class="sm:col-span-6 mt-2">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <div class="mt-1">
                            <input type="text" id="last_name" name="last_name" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                    </div>
                    </div>
                        <div class="sm:col-span-6 mt-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input type="email" id="email" name="email" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                    </div>
                    </div>
                        <div class="sm:col-span-6 mt-2">
                            <label for="tel_number" class="block text-sm font-medium text-gray-700">Telephone Number</label>
                        <div class="mt-1">
                            <input type="tel" id="tel_number" name="tel_number"
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                        </div>
                        </div>
                        <div class="sm:col-span-6 mt-2">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
                        <div class="mt-1">
                            <input type="number" id="guest_number" name="guest_number"
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                        </div>
                        </div>
                        <div class="sm:col-span-6 mt-2">
                            <label for="book_date" class="block text-sm font-medium text-gray-700">Booking Date</label>
                        <div class="mt-1">
                            <input type="datetime-local" id="book_date" name="book_date" 
                            class="block w-full transition duration-150 bg-white border border-gray-400 rounded-md py-1">
                        </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select class="form-multiselect block w-full mt-1 rounded" name="table_id" id="table_id">
                                @foreach ($tables as $table)
                                    <option value="{{ $table->id }}">
                                        {{ $table->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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

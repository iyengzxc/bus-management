<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Bus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('buses.store') }}">
                        @csrf
                        <div class="mb-4">
                        
                            <label for="busname" class="block text-gray-700 text-sm font-bold mb-2">Bus Name:</label>
                            <input type="text" name="busname" id="busname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="license_plate" class="block text-gray-700 text-sm font-bold mb-2">License Plate:</label>
                            <input type="text" name="license_plate" id="license_plate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="capacity" class="block text-gray-700 text-sm font-bold mb-2">Capacity:</label>
                            <input type="number" name="capacity" id="capacity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{ route('buses.index') }}" class="btn btn-secondary">Create Bus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

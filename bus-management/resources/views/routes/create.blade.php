<!-- resources/views/routes/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Route') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('routes.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="start_location" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Start Location</label>
                            <input type="text" name="start_location" id="start_location" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="end_location" class="block text-sm font-medium text-black-700 dark:text-black-200">End Location</label>
                            <input type="text" name="end_location" id="end_location" class="form-input mt-1 block w-full" required>
                        </div>
                        
                        </div>
                        <div class="mb-4">
                            <label for="distance" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Distance</label>
                            <input type="number" step="0.01" name="distance" id="distance" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="flex items-center justify-end">
                            <a href="{{ route('routes.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary ml-3">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

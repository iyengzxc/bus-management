<!-- resources/views/schedules/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Schedule') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('schedules.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="bus_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Bus</label>
                            <select name="bus_id" id="bus_id" class="form-select mt-1 block w-full" required>
                                @foreach ($buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="route_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Route</label>
                            <select name="route_id" id="route_id" class="form-select mt-1 block w-full" required>
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="departure_time" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Departure Time</label>
                            <input type="datetime-local" name="departure_time" id="departure_time" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="arrival_time" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Arrival Time</label>
                            <input type="datetime-local" name="arrival_time" id="arrival_time" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="flex items-center justify-end">
                            <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary ml-3">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

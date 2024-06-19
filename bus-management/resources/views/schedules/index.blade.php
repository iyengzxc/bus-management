<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schedules') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Add New Schedule Button -->
                    <div class="mb-4">
                        <a href="{{ route('schedules.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add New Schedule
                        </a>
                    </div>
                    <!-- Schedules Table -->
                    <table class="min-w-full bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="py-2">ID</th>
                                <th class="py-2">Bus</th>
                                <th class="py-2">Route</th>
                                <th class="py-2">Departure Time</th>
                                <th class="py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td class="py-2">{{ $schedule->id }}</td>
                                    <td class="py-2">{{ $schedule->bus->name }}</td>
                                    <td class="py-2">{{ $schedule->route->name }}</td>
                                    <td class="py-2">{{ $schedule->departure_time }}</td>
                                    <td class="py-2">
                                        <a href="{{ route('schedules.edit', $schedule) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                        <form action="{{ route('schedules.destroy', $schedule) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

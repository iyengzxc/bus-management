<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('bookings.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Add Booking</a>

                    @if ($bookings->count() > 0)
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Route</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->route->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->date }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->time }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('bookings.edit', $booking) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form action="{{ route('bookings.destroy', $booking) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No bookings found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

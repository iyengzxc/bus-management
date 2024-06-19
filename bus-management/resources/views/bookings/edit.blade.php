<!-- resources/views/bookings/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="user_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">User</label>
                            <select name="user_id" id="user_id" class="form-select mt-1 block w-full" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $booking->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="schedule_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Schedule</label>
                            <select name="schedule_id" id="schedule_id" class="form-select mt-1 block w-full" required>
                                @foreach ($schedules as $schedule)
                                    <option value="{{ $schedule->id }}" {{ $booking->schedule_id == $schedule->id ? 'selected' : '' }}>{{ $schedule->bus->name }} - {{ $schedule->route->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="seat_number" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Seat Number</label>
                            <input type="number" name="seat_number" id="seat_number" class="form-input mt-1 block w-full" value="{{ $booking->seat_number }}" required>
                        </div>
                        <div class="flex items-center justify-end">
                            <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary ml-3">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

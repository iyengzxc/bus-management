<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Routes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Add New Route Button -->
                    <div class="mb-4">
                        <a href="{{ route('routes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add New Route
                        </a>
                    </div>
                    <!-- Routes Table -->
                    <table class="min-w-full bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="py-2">ID</th>
                                <th class="py-2">Name</th>
                                <th class="py-2">Description</th>
                                <th class="py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($routes as $route)
                                <tr>
                                    <td class="py-2 text-gray-900 dark:text-gray-100">{{ $route->id }}</td>
                                    <td class="py-2 text-gray-900 dark:text-gray-100">{{ $route->name }}</td>
                                    <td class="py-2 text-gray-900 dark:text-gray-100">{{ $route->description }}</td>
                                    <td class="py-2">
                                        <a href="{{ route('routes.edit', $route) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                        <form action="{{ route('routes.destroy', $route) }}" method="POST" class="inline-block">
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

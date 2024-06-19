<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
             </h2>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
             </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">{{ __('Bus Management') }}</h3>
                        <ul class="list-disc list-inside mt-2">
                            <li>
                                <a href="{{ route('buses.index') }}" class="text-blue-500 hover:underline">
                                    {{ __('Manage Buses') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('routes.index') }}" class="text-blue-500 hover:underline">
                                    {{ __('Manage Routes') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('schedules.index') }}" class="text-blue-500 hover:underline">
                                    {{ __('Manage Schedules') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

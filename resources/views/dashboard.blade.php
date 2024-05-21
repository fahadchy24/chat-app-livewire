<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @forelse ($users as $user)
                        <p>{{ $user->name }}</p>
                    @empty
                        <h2>No User found.</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

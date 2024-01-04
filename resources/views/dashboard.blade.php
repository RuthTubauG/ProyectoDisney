<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-600 dark:text-pink-600 leading-tight">
            {{ __('Panel De Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink dark:bg-pink-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Estas logead@!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

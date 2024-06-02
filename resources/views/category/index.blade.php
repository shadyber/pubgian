<x-app-layout>
    <x-slot name="header">

        {{ __('Shops Category') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{$categories}}
            </div>
        </div>
    </div>
</x-app-layout>

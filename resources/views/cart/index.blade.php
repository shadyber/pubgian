<x-app-layout>
    <x-slot name="header">

        {{ __('My Cart') }}

    </x-slot>

    <div class="py-12">
        <div class="m-2 p-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container container-1430">

@livewire('cart-component')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

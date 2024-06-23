<x-app-layout>
    <x-slot name="header">

        {{ __('Order Unlisted Item') }}

    </x-slot>

    <!-- our products section start -->
    <section class="our-products mt-120">
        <div class="container">


            @livewire('forms.item-request-form')


        </div>
    </section>


</x-app-layout>



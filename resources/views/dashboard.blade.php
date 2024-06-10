<x-app-layout>
    <x-slot name="header">

            {{ __('Dashboard') }}

    </x-slot>

    <!-- our products section start -->
    <section class="our-products mt-120">
        <div class="container">



                @if(\Illuminate\Support\Facades\Auth::user()->id === 1)
                    @livewire('admin-menu')
                @else
               @livewire('user-menu')
                 @endif


        </div>
    </section>


</x-app-layout>

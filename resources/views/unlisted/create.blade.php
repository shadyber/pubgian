<x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                Unlisted Items
            </div>

            <div class="w-full bg-gray-50 p-lg-2 m-lg-2">
              @livewire('forms.item-request-form')

            </div>
        </div>
    </div>
</x-guest-layout>

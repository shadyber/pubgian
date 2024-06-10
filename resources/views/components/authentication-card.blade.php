<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg col-md-10 p-2 m-3">
        {{ $slot }}
    </div>
</div>

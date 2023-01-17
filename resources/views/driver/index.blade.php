<header>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')
</header>

<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="table">
                @include('driver.pagination_data')
            </div>
        </div>
    </div>
</x-guest-layout>

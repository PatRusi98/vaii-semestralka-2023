<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                @foreach($championships as $championship)
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('admin.championships.show', $championship->id) }}">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $championship->name }}</h5>
                        </a>
                        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Active: @if($championship->active == 1 ) yes @else no @endif </p>
                        <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Classes:
                            @if($championship->class2 == null )
                                {{$championship->class1}}
                            @elseif($championship->class3 == null )
                                {{$championship->class1}}, {{$championship->class2}}
                            @else
                                {{$championship->class1}}, {{$championship->class2}}, {{$championship->class3}}
                            @endif </p>

                        <div class="grid gap-6 md:grid-cols-2">
                            <a href="{{ route('admin.championships.edit', $championship->id) }}" class="inline-flex items-center px-14 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Edit
                            </a>
                            <a href="{{ route('admin.championships.edit', $championship->id) }}" class="inline-flex items-center px-11 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Delete
                            </a>
                        </div>
                    </div>
                @endforeach

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('admin.championships.show', 1) }}">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add new...</h5>
                        </a>
                        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400"></p>
                        <p class="mb-5 font-normal text-gray-700 dark:text-gray-400"></p>

                        <div class="grid gap-6 md:grid-cols-2">

                        </div>
                    </div>

            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.cars.update', $car->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Car Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $car->name }}" required>
                    </div>
                    <div>
                        <label for="simulator" class="block mb-2 text-sm font-medium text-gray-900">Simulator</label>
                        <select id="simulator" name="simulator" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose simulator</option>
                            @foreach($simulators as $simulator)
                                <option value="{{ $simulator->name }}">{{ $simulator->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="class" class="block mb-2 text-sm font-medium text-gray-900">Class</label>
                        <select id="class" name="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose class...</option>
                            @foreach($carClasses as $carClass)
                                <option value="{{ $carClass->name }}">{{ $carClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
            </form>

        </div>
    </div>
</x-admin-layout>

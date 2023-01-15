<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.point-systems.edit', $pointSystem->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>
                        <label for="1st" class="block mb-2 text-sm font-medium text-gray-900">1st</label>
                        <input type="number" id="1st" name="first" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="2nd" class="block mb-2 text-sm font-medium text-gray-900">2nd</label>
                        <input type="number" id="2nd" name="second" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="3rd" class="block mb-2 text-sm font-medium text-gray-900">3rd</label>
                        <input type="number" id="3rd" name="third" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="4th" class="block mb-2 text-sm font-medium text-gray-900">4th</label>
                        <input type="number" id="4th" name="fourth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="5th" class="block mb-2 text-sm font-medium text-gray-900">5th</label>
                        <input type="number" id="5th" name="fifth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="6th" class="block mb-2 text-sm font-medium text-gray-900">6th</label>
                        <input type="number" id="6th" name="sixth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="7th" class="block mb-2 text-sm font-medium text-gray-900">7th</label>
                        <input type="number" id="7th" name="seventh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="8th" class="block mb-2 text-sm font-medium text-gray-900">8th</label>
                        <input type="number" id="8th" name="eighth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="9th" class="block mb-2 text-sm font-medium text-gray-900">9th</label>
                        <input type="number" id="9th" name="ninth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="10th" class="block mb-2 text-sm font-medium text-gray-900">10th</label>
                        <input type="number" id="10th" name="tenth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="11th" class="block mb-2 text-sm font-medium text-gray-900">11th</label>
                        <input type="number" id="11th" name="eleventh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="12th" class="block mb-2 text-sm font-medium text-gray-900">12th</label>
                        <input type="number" id="12th" name="twelvth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="13th" class="block mb-2 text-sm font-medium text-gray-900">13th</label>
                        <input type="number" id="13th" name="thirteenth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="14th" class="block mb-2 text-sm font-medium text-gray-900">14th</label>
                        <input type="number" id="14th" name="fourteenth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="15th" class="block mb-2 text-sm font-medium text-gray-900">15th</label>
                        <input type="number" id="15th" name="fifteenth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="poleposition" class="block mb-2 text-sm font-medium text-gray-900">Pole Position</label>
                        <input type="number" id="poleposition" name="pole_position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="fastestlap" class="block mb-2 text-sm font-medium text-gray-900">Fastest Lap</label>
                        <input type="number" id="fastestlap" name="fastest_lap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="leaderdistance" class="block mb-2 text-sm font-medium text-gray-900">Leader Distance</label>
                        <input type="number" id="leaderdistance" name="leader_distance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
            </form>

        </div>
    </div>
</x-admin-layout>

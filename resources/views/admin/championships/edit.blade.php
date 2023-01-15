<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Car Name</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Callaway Corvette C7.R" pattern="[A-Za-z0-9\s]+" required>
                    </div>
                    <div>
                        <label for="simulator" class="block mb-2 text-sm font-medium text-gray-900">Simulator</label>
                        <select id="simulator" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose simulator</option>
                            <option value="rFactor 2">rFactor 2</option>
                            <option value="Assetto Corsa">Assetto Corsa</option>
                            <option value="Assetto Corsa Competizione">Assetto Corsa Competizione</option>
                            <option value="iRacing">iRacing</option>
                        </select>
                    </div>
                    <div>
                        <label for="carclass" class="block mb-2 text-sm font-medium text-gray-900">Class</label>
                        <select id="carclass" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose class</option>
                            <option value="GTE">GTE</option>
                            <option value="GT3">GT3</option>
                            <option value="HyperCar">HyperCar</option>
                            <option value="LMP2">LMP2</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
</x-admin-layout>

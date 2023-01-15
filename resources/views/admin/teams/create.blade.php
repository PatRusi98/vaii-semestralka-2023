<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.teams.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Team Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Williams Racing" pattern="[A-Za-z0-9\s]+" required>
                    </div>
                    <div>
                        <label for="short_name" class="block mb-2 text-sm font-medium text-gray-900">Short Name</label>
                        <input type="text" name="short_name" id="short_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="WIL" pattern="[A-Z0-9]{3}" required>
                    </div>
                    <div>
                        <label for="manager" class="block mb-2 text-sm font-medium text-gray-900">Manager</label>
                        <input type="text" name="manager" id="manager" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="James Vowles" pattern="[A-Za-z0-9\s]+" required>
                    </div>
                    <div>
                        <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                        <select id="nationality" name="nationality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
</x-admin-layout>

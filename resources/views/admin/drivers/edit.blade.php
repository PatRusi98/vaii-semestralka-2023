<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.drivers.update', $driver->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                        <input type="text" name="name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $driver->name }}" pattern="[A-Za-z0-9\s]+" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
                        <input type="text" name="surname" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $driver->surname }}" pattern="[A-Za-z0-9\s]+" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="steamid" class="block mb-2 text-sm font-medium text-gray-900">Steam ID</label>
                    <input type="text" name="steam_id" id="steamid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $driver->steam_id }}" required>
                </div>
                <div class="mb-6">
                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                    <select id="nationality" name="nationality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected disabled>Choose country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="team" class="block mb-2 text-sm font-medium text-gray-900">Team</label>
                    <select id="team" name="team" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected disabled>Choose team</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->name }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
            </form>

        </div>
    </div>
</x-admin-layout>

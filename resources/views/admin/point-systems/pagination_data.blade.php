<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                1st
            </th>
            <th scope="col" class="px-6 py-3">
                2nd
            </th>
            <th scope="col" class="px-6 py-3">
                3rd
            </th>
            <th scope="col" class="px-6 py-3">
                Pole Position
            </th>
            <th scope="col" class="px-6 py-3">
                Fastest Lap
            </th>
            <th scope="col" class="px-6 py-3">
                Leader Distance
            </th>
            <th scope="col" class="px-6 py-3">

            </th>
        </tr>
        </thead>
        <tbody>

        @foreach($pointSystems as $pointSystem)
            <tr class="bg-white border-t">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $pointSystem->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $pointSystem->first}}
                </td>
                <td class="px-6 py-4">
                    {{ $pointSystem->second }}
                </td>
                <td class="px-6 py-4">
                    {{ $pointSystem->third }}
                </td>
                <td class="px-6 py-4">
                    {{ $pointSystem->pole_position }}
                </td>
                <td class="px-6 py-4">
                    {{ $pointSystem->fastest_lap }}
                </td>
                <td class="px-6 py-4">
                    {{ $pointSystem->leader_distance }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex">
                        <a href="{{ route('admin.point-systems.edit', $pointSystem->id) }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</a>
                        <form class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                              method="POST" action="{{ route('admin.point-systems.destroy', $pointSystem->id) }}">
                            @csrf
                            @method('DELETE')
                            <button id="button" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {!! $pointSystems->links() !!}
</div>

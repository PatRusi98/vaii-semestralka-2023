<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Simulator
            </th>
            <th scope="col" class="px-6 py-3">
                Class
            </th>
            <th scope="col" class="px-6 py-3">

            </th>
        </tr>
        </thead>
        <tbody>

        @foreach($cars as $car)
            <tr class="bg-white border-t">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $car->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $car->simulator }}
                </td>
                <td class="px-6 py-4">
                    {{ $car->class }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex">
                        <a href="{{ route('admin.cars.edit', $car->id) }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</a>
                        <form class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                              method="POST" action="{{ route('admin.cars.destroy', $car->id) }}">
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
    {!! $cars->links() !!}
</div>

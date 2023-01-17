<div class="grid gap-6 mb-6 md:grid-cols-3">

    @foreach($drivers as $driver)
        <div class="max-w-sm border rounded-lg shadow-md bg-gray-800 border-gray-700">
            <img class="rounded-t-lg" src="/img/noimage.jpg" alt="Driver" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{$driver->name}} {{$driver->surname}}</h5>
                <p class="font-normal text-gray-400">{{$driver->nationality}}</p>
                <p class="mb-3 font-normal text-gray-400">{{$driver->team}}</p>
                <a href="{{route('driver.show', $driver->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Show
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    @endforeach

</div>
{!! $drivers->links() !!}

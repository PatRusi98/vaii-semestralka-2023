<div class="grid gap-6 mb-6 md:grid-cols-3">

    @foreach($cars as $car)
        <div class="max-w-sm border rounded-lg shadow-md bg-gray-800 border-gray-700">
            <img class="rounded-t-lg" src="/img/noimage.jpg" alt="Car" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $car->name }}</h5>
                <p class="mb-3 font-normal text-gray-400">{{ $car->class }}</p>
                <p class="mb-3 font-normal text-gray-400">{{ $car->simulator }}</p>
            </div>
        </div>
    @endforeach
</div>
{!! $cars->links() !!}

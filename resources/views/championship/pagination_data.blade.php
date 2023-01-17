<div class="grid gap-6 mb-6 md:grid-cols-3">

    @foreach($championships as $championship)
        <div class="max-w-sm border rounded-lg shadow-md bg-gray-800 border-gray-700">
            <img class="rounded-t-lg" src="/img/noimage.jpg" alt="Car" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $championship->name }}</h5>
            </div>
        </div>
    @endforeach

</div>
{!! $championships->links() !!}

<x-guest-layout>
    <div>
        <img class="h-auto max-w-xs" src="/docs/images/examples/image-1@2x.jpg" alt="Profile photo">
        <div>
            <h1 class="text-5xl font-extrabold text-white">{{$team->name}}</h1>
            <p class="font-normal text-gray-700">{{$team->nationality}}</p>
        </div>
    </div>
</x-guest-layout>

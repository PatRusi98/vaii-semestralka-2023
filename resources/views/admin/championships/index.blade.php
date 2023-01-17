<header>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')
</header>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                @foreach($championships as $championship)
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('admin.championships.show', $championship->id) }}">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $championship->name }}</h5>
                        </a>
                        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Active: @if($championship->active == 1 ) yes @else no @endif </p>
                        <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Classes:
                            @if($championship->class2 == 0 || "none")
                                {{$championship->class1}}
                            @elseif($championship->class3 == 0  || "none")
                                {{$championship->class1}}, {{$championship->class2}}
                            @else
                                {{$championship->class1}}, {{$championship->class2}}, {{$championship->class3}}
                            @endif </p>

                        <div class="grid gap-6 md:grid-cols-2">
                            <form class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                                  action="{{ route('admin.championships.edit', $championship->id) }}">
                                <button id="button" type="submit">Edit</button>
                            </form>
                            <form class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                                  method="POST" action="{{ route('admin.championships.destroy', $championship->id) }}">
                                @csrf
                                @method('DELETE')
                                <button id="button" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <button type="submit" data-modal-target="staticModal" data-modal-toggle="staticModal">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add new...</h5>
                        </button>
                        <p class="mb-1 font-normal text-gray-700"></p>
                        <p class="mb-5 font-normal text-gray-700"></p>

                        <div class="grid gap-6 md:grid-cols-2">

                        </div>
                    </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add Championship
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <form method="POST" action="{{ route('admin.championships.store') }}">
                    @csrf
                <div class="p-6 space-y-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Championship Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Formula 1 2023" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="active" name="active" type="checkbox" value="1" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                            <input id="activeHidden" name="active" type="hidden" value="0" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        </div>
                        <label for="active" class="ml-2 text-sm font-medium text-gray-900">Active</label>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="multiclass" name="multiclass" type="checkbox" value="1" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                            <input id="multiclassHidden" name="multiclass" type="hidden" value="0" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        </div>
                        <label for="multiclass" class="ml-2 text-sm font-medium text-gray-900">Multiclass</label>
                    </div>
                    <div>
                        <label for="class1" class="block mb-2 text-sm font-medium text-gray-900">Class 1</label>
                        <select id="class1" name="class1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option selected disabled>Choose class...</option>
                            @foreach($carClasses as $carClass)
                                <option value="{{ $carClass->name }}">{{ $carClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="class2" class="block mb-2 text-sm font-medium text-gray-900">Class 2</label>
                        <input id="class2Hidden" name="class2" type="hidden" value="none" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        <select id="class2" name="class2" class="multiclass bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected value="0">Choose class...</option>
                            @foreach($carClasses as $carClass)
                                <option value="{{ $carClass->name }}">{{ $carClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="class3" class="block mb-2 text-sm font-medium text-gray-900">Class 3</label>
                        <input id="class3Hidden" name="class3" type="hidden" value="none" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        <select id="class3" name="class3" class="multiclass bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected value="0">Choose class...</option>
                            @foreach($carClasses as $carClass)
                                <option value="{{ $carClass->name }}">{{ $carClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function (){
        activeState();
        $("active").click(activeState);
    });

    function activeState(){
        if(this.checked){
            document.getElementById('activeHidden').disabled = true;
        } else {
            document.getElementById('activeHidden').disabled = false;
        }
    }

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var name = $("#name").val();
        var active = $("#active").val();
        var multiclass = $("#multiclass").val();
        var class1 = $("#class1").val();
        var class2 = $("#class2").val();
        var class3 = $("#class3").val();

        if(!class3.isNull){
            document.getElementById('class3Hidden').disabled = true;
        } else {
            document.getElementById('class3').disabled = true;
        }

        $.ajax({
            type:'POST',
            url:"{{ route('admin.championships.store') }}",
            data:{name:name, active:active, multiclass:multiclass,
            class1:class1, class2:class2, class3:class3},
            success:function(data){
                if($.isEmptyObject(data.error)){
                    alert(data.success);
                    location.reload();
                }
            }
        });
    });

    $(function(){
        enableGroups();
        $("#multiclass").click(enableGroups);
    });

    function enableGroups(){
        if(this.checked){
            $("#class2").removeAttr("disabled");
            $("#class3").removeAttr("disabled");
            document.getElementById('multiclassHidden').disabled = true;
            document.getElementById('class2Hidden').disabled = true;
            document.getElementById('class3Hidden').disabled = true;
        } else {
            $("#class2").attr("disabled", true);
            $("#class3").attr("disabled", true);
            document.getElementById('multiclassHidden').disabled = false;
            document.getElementById('class2Hidden').disabled = false;
            document.getElementById('class3Hidden').disabled = true;
        }
    }
</script>


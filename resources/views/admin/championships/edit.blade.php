<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.championships.update', $championship->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Championship Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $championship->name }}" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="active" name="active" type="checkbox" value="1" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        </div>
                        <label for="active" class="ml-2 text-sm font-medium text-gray-900">Active</label>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="multiclass" name="multiclass" type="checkbox" value="1" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
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
                        <select id="class2" name="class2" class="multiclass bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose class...</option>
                            @foreach($carClasses as $carClass)
                                <option value="{{ $carClass->name }}">{{ $carClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="class3" class="block mb-2 text-sm font-medium text-gray-900">Class 3</label>
                        <select id="class3" name="class3" class="multiclass bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled>Choose class...</option>
                            @foreach($carClasses as $carClass)
                                <option value="{{ $carClass->name }}">{{ $carClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
</x-admin-layout>


<script>
    $(function(){
        enableGroups();
        $("#multiclass").click(enableGroups);
    });

    function enableGroups(){
        if(this.checked){
            $("#class2").removeAttr("disabled");
            $("#class3").removeAttr("disabled");
        } else {
            $("#class2").attr("disabled", true);
            $("#class3").attr("disabled", true);
        }
    }
</script>

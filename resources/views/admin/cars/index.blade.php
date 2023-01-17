

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{ route('admin.cars.create')}}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Car</a>
            </div>
            <div id="table">
                @include('admin.cars.pagination_data')
            </div>
        </div>
    </div>
</x-admin-layout>

<script>
    $(document).ready(function (){
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();

            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page){
            $.ajax({
                url:"/cars/ajax?page="+page,
                success:function(data){
                    $('#table').html(data);
                }
            });
        }
    });
</script>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Race Portal</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href={{'/css/style.css'}} type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script rel="script" href="{{'/js/script.js'}}" type="text/javascript"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="pr-body">
        <!--Nav RP-->
        <nav class="border-gray-200 bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="/img/flag-logo.png" class="h-6 mr-3 sm:h-9" alt="RP Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Race Portal</span>
                </a>
                <div class="flex items-center">
                    <a href="tel:5541251234" class="mr-6 text-sm font-medium text-white hover:underline"></a>
                    <a href="{{ url('/admin') }}" class="text-sm font-medium text-blue-500 hover:underline">Administration</a>
                </div>
            </div>
        </nav>
        <nav class="bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
                <div class="flex items-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                        <li>
                            <a href="#" class="text-white hover:underline" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-white hover:underline">Championships</a>
                        </li>
                        <li>
                            <a href="#" class="text-white hover:underline">Drivers</a>
                        </li>
                        <li>
                            <a href="#" class="text-white hover:underline">Teams</a>
                        </li>
                        <li>
                            <a href="#" class="text-white hover:underline">Cars</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="min-h-screen">
            {{ $slot }}
        </div>

        <!--Footer RP-->
        <footer class="p-4 sm:p-6 bg-gray-900">
            <div class="md:flex md:justify-center">
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Simulators</h2>
                        <ul class="text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">rFactor 2</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Assetto Corsa</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Follow us</h2>
                        <ul class="text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">Instagram</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Useful Links</h2>
                        <ul class="text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Simhub</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Telemetry</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-center">
            <span class="text-sm sm:text-center text-gray-400">© 2023 Patrik Rusiňák</span>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Not implemented yet
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script>
            var menuItems = document.getElementById("menu-items");
            menuItems.style.maxHeight = "0px";
            function toggleMenu() {
                if(menuItems.style.maxHeight == "0px") {
                    menuItems.style.maxHeight = "350px"
                } else {
                    menuItems.style.maxHeight = "0px"
                }
            }
        </script>
    </body>
</html>

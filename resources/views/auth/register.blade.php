<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Register</title>
    <style>
        .body-bg {
            background-color: #1F2937;
        }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">

    <header class="max-w-lg mx-auto">
        <h1 class="text-4xl font-bold text-white text-center">Register</h1>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">

        <section>
            <h3 class="font-bold text-2xl">Welcome</h3>
            <p class="text-gray-600 pt-2"></p>
        </section>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <x-input-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name" :value="__('Name')" />
                <x-text-input id="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <x-input-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password" :value="__('Password')" />

                <x-text-input class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                                id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <x-input-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                                id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </main>
</body>

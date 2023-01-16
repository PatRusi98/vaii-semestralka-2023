<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        .body-bg {
            background-color: #1F2937;
        }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <header class="max-w-lg mx-auto">
        <h1 class="text-4xl font-bold text-white text-center">Race Portal</h1>
        <h1 class="text-4xl font-bold text-white text-center">Administration</h1>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email" :value="__('Email')" />
                    <x-text-input class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" id="email" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password" :value="__('Password')" />

                    <x-text-input class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                                  id="password"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                    <div class="flex justify-end">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    </div>

                    <x-primary-button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                        {{ __('Log in') }}
                    </x-primary-button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Don't have an account? <a href="{{ route('register') }}" class="font-bold hover:underline">Sign up</a>.</p>
    </div>

</body>

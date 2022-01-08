<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
</head>

<body class="bg-gray-300">
    <div class="py-12">
        <div class="max-w-lg mt-14 mx-auto sm:px-6 lg:px-8">
            <div class="text-center p-3 rounded-lg bg-white border-b border-gray-400 mb-8">
                <h1 class="text-gray-800 text-3xl font-bold">RSUP Dr. SITANALA</h1>
            </div>
            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                            <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                {{ __('Whoops! Something went wrong.') }} . {{ $error }}
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
                                data-collapse-toggle="alert-2" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-400">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="nrm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No.
                                Rekam Medis</label>
                            <input type="text" id="nrm"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                                required name="nomor_rekam_medis" placeholder="masukkan no rekam medis">
                        </div>
                        <div class="mb-6">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                            <input type="password" id="password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                                placeholder="masukkan password" name="password" required>
                        </div>
                        <button type="submit"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-4 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Login</button>
                        <a href="{{ route('register') }}"
                            class="bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-8 py-3.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
</body>

</html>

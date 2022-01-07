<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
</head>

<body class="bg-gray-300">
    <div class="py-12">
        <div class="max-w-xl mt-20 mx-auto sm:px-6 lg:px-8">
            <div class="text-center p-3 rounded-lg bg-white border-b border-gray-400 mb-8">
                <h1 class="text-gray-800 text-5xl font-bold">RSUP Dr. SITANALA</h1>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-400">
                    <form>
                        <div class="mb-6">
                            <label for="nama"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input type="text" id="nama"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                                placeholder="masukkan lengkap" required="">
                        </div>
                        <div class="mb-6">
                            <label for="nik"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">NIK</label>
                            <input type="text" id="nik"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                                placeholder="masukkan nik" required="">
                        </div>
                        <div class="mb-6">
                            <label for="no_telp"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">No. Telp</label>
                            <input type="text" id="no_telp"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"
                                placeholder="masukkan no telp" required="">
                        </div>
                        <div class="mb-6">
                            <label for="nik"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="2" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 dark:shadow-sm-light"></textarea>
                        </div>
                        <div class="mb-6">
                            <label for="nik"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">Kategori</label>
                                <div class="flex items-center mb-4">
                                    <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-green-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked>
                                    <label for="country-option-1" class="block ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">
                                      Umum
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-green-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked>
                                    <label for="country-option-1" class="block ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">
                                      Jaminan
                                    </label>
                                  </div>
                        </div>
                        <button type="submit"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-16 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Register</button>
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-8 py-3.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
</body>

</html>

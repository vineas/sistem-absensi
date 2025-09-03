<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>Absen Masuk</title>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-10 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 ">
                <a href="/data-absen">
                    <button
                        class="ml-3 mt-3 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <h1
                            class="text-l font-bold leading-tight tracking-tight text-gray-900 md:text-m dark:text-white">
                            Kembali</h1>
                    </button>
                </a>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Absensi Masuk</h1>
                    <form method="POST" action="/absen" class="space-y-4 md:space-y-6">
                        @csrf
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tuliskan Nama
                                Lengkap</label>
                            <input type="text" name="nama" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama Lengkap...">

                            <button type=" submit"
                                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">Absen
                                Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
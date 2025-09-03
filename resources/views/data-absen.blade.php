<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')

    <title>Data Absensi</title>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full rounded-lg shadow">
                <div class="flex flex-col items-center justify-center mt-10">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl dark:text-white items-center justify-center">
                        Data Absensi</h1>
                    <div class="mt-2">
                        <a href="/absen">
                            <button
                                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                Absen Masuk
                            </button>
                        </a>
                        <a href="/absen-keluar">
                            <button
                                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                Absen Keluar
                            </button>
                        </a>
                </div>
                </div>
                <br>
                <!-- <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input datepicker id="default-datepicker"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date">
                    </div>
                    <button
                        class="mt-3 mb-3 text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Cari
                    </button> -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Nama</th>
                                <th scope="col" class="px-6 py-3">Tanggal</th>
                                <th scope="col" class="px-6 py-3">Jam Masuk</th>
                                <th scope="col" class="px-6 py-3">Jam Keluar</th>
                            </tr>
                        </thead>
                        @foreach($data as $absen)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                <td class="px-6 py-4">{{ $absen->nama }}</td>
                                <td class="px-6 py-4">{{ $absen->tanggal }}</td>
                                <td class="px-6 py-4">{{ $absen->jam_masuk }}</td>
                                <td class="px-6 py-4">{{ $absen->jam_keluar ?? 'Belum Absen Keluar' }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
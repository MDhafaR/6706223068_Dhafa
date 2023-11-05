<x-app-layout>
    <x-slot name="header">
        <div>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Daftar Transaksi') }}
                </h2>
                <div>
                    <a href="{{ route('transaksi.peminjaman') }}">
                        <button type="button"
                            class="px-3 py-2 text-xs text-center text-white bg-green-600 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-500 dark:focus:ring-green-600 font-bold">Pinjam</button>
                    </a>
                </div>
            </div>
        </div>
    </x-slot>
    
{{-- Muhammad Dhafa Ramadhani - 6706223068 - 4604 --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="TableVehicle" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peminjam</th>
                                <th>Kendaraan</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Selesai</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->peminjam }}</td>
                                    <td>{{ $item->kendaraan }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->start)->format('Y-m-d') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->end)->format('Y-m-d') }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                       {{ $item->status  }}
                                    </td>
                                    <td>
                                        <a href="{{ route('transaksi.pengembalian', $item->id) }}">
                                            <button type="button"
                                                class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Edit Transaksi</button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <span>Data Transaksi kosong</span>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

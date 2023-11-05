<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
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
                                <th>Kendaraan</th>
                                <th>Tipe</th>
                                <th>License</th>
                                <th>Daily Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($vehicles as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->license }}</td>
                                    <td>{{ $item->dailyprice }}</td>
                                </tr>
                            @empty
                            <tr>
                                <span>Data Kendaraan Kosong</span>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<x-app-layout>
    
<div class="mt-7 ml-12 mr-12 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Kondisi Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
                <th scope="col" class="px-6 py-3">
                    Kecacatan
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah
                </th>
                <th scope="col" class="px-6 py-3">
                    Gambar
                </th>                                
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $barang)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $barang->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $barang->jenis_id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $barang->kondisi_id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $barang->keterangan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $barang->kecacatan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $barang->jumlah }}
                    </td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $barang->gambar) }}" alt="{{ $barang->gambar }}" width="100">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</x-app-layout>
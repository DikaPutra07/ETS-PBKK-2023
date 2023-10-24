<x-app-layout>
    <div class="mt-6 flex justify-center">
        <form method="POST" action="{{ route('post-barang') }}" class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 max-w-md w-full sm:w-96" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-6">
                <label for="jenis_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Barang</label>
                <select name="jenis_id" id="jenis_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @foreach ($jenis as $each)
                        <option value="{{ $each->id }}"
                            {{ old('jenis_id') == $each->id ? 'selected' : '' }}>{{ $each->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('jenis_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-6">
                <label for="kondisi_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Barang</label>
                <select name="kondisi_id" id="kondisi_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @foreach ($kondisi as $each)
                        <option value="{{ $each->id }}"
                            {{ old('kondisi_id') == $each->id ? 'selected' : '' }}>{{ $each->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('kondisi_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-6">
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Barang</label>
                <input type="text" id="keterangan" name="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            @error('keterangan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-6">
                <label for="kecacatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecacatan ( Opsional )</label>
                <input type="text" id="kecacatan" name="kecacatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            @error('kecacatan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-6">
                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                <input type="number" id="jumlah" name="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Makanan" required>
            </div>
            @error('jumlah')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-6">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                <input type="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="gambar" name="gambar" accept=".png, .jpg, .jpeg" required>
            </div>
            @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <button type="submit" class="text-white bg-blue-700 hover-bg-blue-800 focus:ring-4 focus:outline-none focus-ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark-bg-blue-600 dark-hover-bg-blue-700 dark-focus-ring-blue-800">Submit</button>
        </form>
    </div>
</x-app-layout>

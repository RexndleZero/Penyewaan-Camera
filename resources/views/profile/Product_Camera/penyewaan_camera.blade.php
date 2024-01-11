<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Penyewaan Camera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-blue-700 to-gray-900 p-8">
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        @if (session('success'))
            <div class="text-green-600">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <ul class="text-red-400">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <h2 class="text-2xl font-semibold mb-4">Form Penyewaan Camera</h2>

        <form action="{{ url('/sewa_add') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="nama_peminjam" class="block text-gray-600 font-medium">Nama Peminjam</label>
                <input type="text" id="nama_peminjam" name="nama_peminjam" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-gray-600 font-medium">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="nomor_handphone" class="block text-gray-600 font-medium">Nomor Handphone</label>
                <input type="text" id="nomor_handphone" name="nomor_handphone"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="nama_camera" class="block text-gray-600 font-medium">Nama Camera</label>
                {{-- <input type="text" id="nama_camera" name="nama_camera" class="mt-1 p-2 w-full border rounded-md"> --}}
                <select name="" id="" class="option">
                    <option value="">Canon EOS 5D Mark IV DSLR</option>
                    <option value=""> Olympus OM-D E-M1X</option>
                    <option value="">Leica S3</option>
                    <option value="">B-PRO 5 ALPHA EDITION</option>
                    <option value="">GoPro MAX 360</option>
                    <option value="">B-Pro alpha edition/MARK III</option>
                    <option value="">Leica 24 SL Type 601</option>
                    <option value="">Pentax 645Z Medium Format</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="kategori_camera" class="block text-gray-600 font-medium">Kategori Camera</label>
                {{-- <input type="text" id="kategori_camera" name="kategori_camera" class="mt-1 p-2 w-full border rounded-md"> --}}
                <select name="" id="" class="option">
                    <option value="">DSLR</option>
                    <option value="">Mirrorless</option>
                    <option value="">Analog/Film</option>
                    <option value="">Action</option>
                    <option value="">Camera 360 Derajat</option>
                    <option value="">Underwater</option>
                    <option value="">Medium Format</option>

                </select>
            </div>

            <div class="mb-4">
                <label for="tanggal_awal_peminjaman" class="block text-gray-600 font-medium">Tanggal Awal
                    Peminjaman</label>
                <input type="date" id="tanggal_awal_peminjaman" name="tanggal_awal_peminjaman"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="tanggal_selesai_peminjaman" class="block text-gray-600 font-medium">Tanggal Selesai
                    Peminjaman</label>
                <input type="date" id="tanggal_selesai_peminjaman" name="tanggal_selesai_peminjaman"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>

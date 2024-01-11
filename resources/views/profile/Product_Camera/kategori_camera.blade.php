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

<body class="bg-white">
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
                <label for="kategori_camera" class="block text-gray-600 font-medium">Kategori Camera</label>
                <input type="text" id="kategori_camera" name="kategori_camera"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>
        </form>
    </div>
</body>

</html>

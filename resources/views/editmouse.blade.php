<!DOCTYPE html>
<html>

<head>
    <title>Edit Mouse</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h3 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Mouse</h3>

        <a href="/mouse" class="block text-center text-blue-600 hover:text-blue-800 mb-6">
            &larr; Kembali
        </a>

        @foreach ($mouse as $p)
            <form action="/mouse/update" method="post" class="space-y-4">
                {{ csrf_field() }}


                <input type="hidden" name="id" value="{{ $p->mouse_ID }}">

                <div>
                    <label for="merkmouse" class="block text-sm font-medium text-gray-700">Merk Mouse</label>
                    <input type="text" id="merkmouse" required="required" name="merkmouse"
                        value="{{ $p->merkmouse }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <div>
                    <label for="hargamouse" class="block text-sm font-medium text-gray-700">Harga Mouse</label>
                    <input type="number" id="hargamouse" required="required" name="hargamouse"
                        value="{{ $p->hargamouse }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="tersedia" name="tersedia" value="1"
                        {{ $p->tersedia ? 'checked' : '' }}
                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="tersedia" class="ml-2 block text-sm font-medium text-gray-700">Tersedia</label>
                </div>

                <div>
                    <label for="berat" class="block text-sm font-medium text-gray-700">Berat (Kg)</label>
                    <input type="number" step="0.01" id="berat" required="required" name="berat"
                        value="{{ $p->berat }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Simpan Data
                </button>
            </form>
        @endforeach
    </div>
</body>

</html>

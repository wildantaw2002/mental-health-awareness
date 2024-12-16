<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hubungi kami untuk mendapatkan bantuan dan informasi mengenai kesehatan mental.">
    <title>Kontak Kami - Peduli Mental Health</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-green-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-bold">Peduli Mental Health</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:underline">Beranda</a></li>
                    <li><a href="/tentang" class="text-white hover:underline">Tentang Kami</a></li>
                    <li><a href="/layanan" class="text-white hover:underline">Layanan</a></li>
                    <li><a href="/kontak" class="text-white hover:underline">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Konten Utama - Form Kontak -->
    <section class="container mx-auto py-10">
        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-3xl font-bold mb-6">Hubungi Kami</h2>
            <form action="#" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-orange-400">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-500 text-white py-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Peduli Mental Health. Semua Hak Dilindungi.</p>
            <p><a href="#" class="hover:underline">Kebijakan Privasi</a> | <a href="#" class="hover:underline">Syarat dan Ketentuan</a></p>
        </div>
    </footer>

</body>
</html>

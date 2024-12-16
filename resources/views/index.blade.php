@include('layout.header')
    <!-- Hero Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Peduli Kesehatan Mental Anda</h2>
            <p class="text-lg text-gray-700 mb-6">Kami percaya bahwa kesehatan mental sama pentingnya dengan kesehatan fisik, kesehatan mental bukanlah tujuan melainkan perjalanan. Beranilah untuk merawat dirimu sendiri, karena kamu pantas untuk merasa damai.</p>
            <p class="text-lg text-gray-700 mb-6">Temukan bantuan, dukungan, dan informasi di sini.</p>
            <a href="https://soa-edu.com/apa-itu-mental-health-awareness-dan-apa-pentingnya/" class="bg-green-500 text-white px-8 py-2 rounded hover:bg-green-500">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Konten Utama -->
    <section class="container mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded shadow">
            <img src="{{ asset('images/Anxiety.jpeg') }}" alt="Deskripsi Gambar" class="width: 500px; height: 300px; rounded-lg shadow-md">

                <h3 class="text-2xl font-bold mb-4">Kenali Tanda-tanda Stress</h3>
                <p class="text-gray-600">Pelajari tanda-tanda umum stress dan cara mengatasinya sebelum berdampak buruk pada kesehatan mental Anda.</p>
            </div>
            <div class="p-6 bg-white rounded shadow">
            <img src="{{ asset('images/help.jpeg') }}" alt="Deskripsi Gambar" class="w-1/2  h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4">Mendapatkan Dukungan</h3>
                <p class="text-gray-600">Dapatkan bantuan dari komunitas sekitar, penanganan profesional, atau orang-orang terdekat Anda dalam menghadapi masalah mental.</p>
            </div>
            <div class="p-6 bg-white rounded shadow">
            <img src="{{ asset('images/life balance.jpeg') }}" alt="Deskripsi Gambar" class="width: 500px; height: 300px; rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4">Keseimbangan Hidup</h3>
                <p class="text-gray-600">Temukan tips dan trik untuk menciptakan kebahagiaan, ketenangan, dan keseimbangan dalam hidup Anda yang berdampak positif pada kesehatan mental.</p>
            </div>
        </div>
    </section>
    @include('layout.footer')
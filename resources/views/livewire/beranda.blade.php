<div>
    @livewire('components.navbar')

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

            {{-- @foreach ($artikels as $artikel)
                <div class="p-6 bg-white rounded shadow">
                    <img src="{{ asset($artikel['image']) }}" alt="Deskripsi Gambar"
                        class="w-full h-64 object-cover rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4">{{ $artikel['title'] }}</h3>
                    <p class="text-gray-600">{{ $artikel['content'] }}</p>
                </div>
            @endforeach --}}
        </div>

        @livewire('components.footer')
</div>

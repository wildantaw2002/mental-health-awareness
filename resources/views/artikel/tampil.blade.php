@extends('admin.layout')

@section('konten')

<div class="bg-white p-6 rounded-lg shadow-md">
    <h4 class="text-xl font-bold mb-4">List Artikel</h4>
    <div>
        <a href="{{ route('artikel.tambah') }}" class="bg-red-400">Tambah Artikel</a>
    </div>

    <table class="w-full border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100 text-gray-700">
                <th class="border border-gray-200 px-4 py-2 text-left">No</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Foto</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Judul</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Isi</th>
            </tr>
        </thead>
        <tbody> <!-- Tambahkan <tbody> di sini untuk memisahkan body tabel -->
            @foreach ($artikel as $no => $data)
            <tr class="bg-gray-100 text-gray-700">
                <td class="border border-gray-200 px-4 py-2 text-left">{{ $no + 1 }}</td>
                <td class="border border-gray-200 px-4 py-2 text-left">
                    <img src="{{ asset('storage/public/foto/' . $data->foto) }}" alt="Foto Artikel" width="100">
                </td>

                <td class="border border-gray-200 px-4 py-2 text-left">{{ $data->judul }}</td>
                <td class="border border-gray-200 px-4 py-2 text-left">{{ $data->isi }}</td>
            </tr>
            @endforeach
        </tbody> <!-- Tutup <tbody> di sini -->
    </table>
</div>

@endsection

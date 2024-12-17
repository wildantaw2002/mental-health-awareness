@extends('admin.layout')

@section('konten')

<div class="bg-white p-6 rounded-lg shadow-md">
    <h4 class="text-xl font-bold mb-4">List Artikel</h4>
    <div class="mb-4">
        <a href="{{ route('artikel.tambah') }}"
            class="bg-grey-500 hover:bg-blue-700 text-black font-sm py-2 px-4 rounded">
            Tambah Artikel
        </a>

    </div>

    <table class="w-full border-collapse border border-gray-200 text-sm">
        <thead>
            <tr class="bg-gray-100 text-gray-700">
                <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Foto</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Judul</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Isi</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikel as $no => $data)
            <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $no + 1 }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <img src="{{ asset('storage/public/foto/' . $data->foto) }}" alt="Foto Artikel" class="w-20 h-20 object-cover rounded-md">
                </td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->judul }}</td>
                <td class="border border-gray-300 px-4 py-2 truncate" title="{{ $data->isi }}">
                    {{ Str::limit($data->isi, 50) }}
                </td>
                <td>
                    <a href="{{route('artikel.edit', $data->no)}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
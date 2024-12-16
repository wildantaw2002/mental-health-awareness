@extends('admin.layout')

@section('konten')

    <div className="bg-white p-6 rounded-lg shadow-md">
        <h4 className="text-xl font-bold mb-4">List Artikel</h4>
        <div>
            <a href="{{route('artikel.tambah')}}" class="bg-red-400">Tambah Artikel</a>
        </div>

        <table className="w-full border-collapse border border-gray-200">
            <thead>
                <tr className="bg-gray-100 text-gray-700">
                    <th className="border border-gray-200 px-4 py-2 text-left">No</th>
                    <th className="border border-gray-200 px-4 py-2 text-left">Foto</th>
                    <th className="border border-gray-200 px-4 py-2 text-left">Judul</th>
                    <th className="border border-gray-200 px-4 py-2 text-left">Isi</th>
                </tr>
            </thead>
           
        </table>
    </div>
@endsection

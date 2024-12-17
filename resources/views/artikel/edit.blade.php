@extends ('admin.layout')

@section('konten')
<h4>edit siswa</h4>
<form action="{{ route('artikel.edit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>No</label>
    <input type="number" name="no" value="{{$artikel->no}}" class="form-control mb-2">

    <label>Foto</label>
    <input type="file" name="foto" value="{{$artikel->foto}}" class="form-control mb-2">

    <label>Judul</label>
    <input type="text" name="judul" value="{{$artikel->judul}}" class="form-control mb-2">

    <label>Isi</label>
    <input type="text" name="isi" value="{{$artikel->isi}}" class="form-control mb-2">

    <button type="submit" class="border border-gray-4 bg-red-400">Edit Artikel</button>
</form>

@endsection
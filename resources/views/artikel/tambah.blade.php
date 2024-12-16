@extends ('admin.layout')

@section('konten')
<h4>Tambah Artikel</h4>
<form action="{{ route('artikel.submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>No</label>
    <input type="number" name="no" class="form-control mb-2">
    
    <label>Foto</label>
    <input type="file" name="foto" class="form-control mb-2">
    
    <label>Judul</label>
    <input type="text" name="judul" class="form-control mb-2">
    
    <label>Isi</label>
    <input type="text" name="isi" class="form-control mb-2">
    
    <button type="submit" class="border-gray-4 bg-red-400">Tambah Artikel</button>
</form>

@endsection
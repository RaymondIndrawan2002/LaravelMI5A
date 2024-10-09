extends( 'layouts.main')

@section('content')
<h4>Prodi</h4>
<form action="{{ route('prodi.update', $prodi['id'])}}"method="post">
    @csrf
    @method('PUT')
    nama
    <input type="text" name="nama" id="" class="form-control" value="{{$prodi['nama']}}">
    Kaprodi
    <input type="text" name="kaprodi" id="" class="form-control" value="{{$prodi['kaprodi']}}">
    Singkatan
    <input type="text" name="singkatan" id="" class="form-control mb-2" value="{{$prodi['singkatan']}}">
    Fakultas
    <input type="text" name="fakultas_id" id="" class="form-control mb-2" value="{{$prodi['fakultas_id']}}">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
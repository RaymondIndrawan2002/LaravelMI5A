@extends( 'layouts.main')

@section('content')
<h4>Fakultas</h4>
<form action="{{ route('prodi.update', $fakultas['id'])}}"method="post">
    @csrf
    @method('PUT')
    nama
    <input type="text" name="nama" id="" class="form-control" value="{{$fakultas['nama']}}">
    dekan
    <input type="text" name="dekan" id="" class="form-control" value="{{$fakultas['dekan']}}">
    Singkatan
    <input type="text" name="singkatan" id="" class="form-control mb-2" value="{{$fakultas['singkatan']}}">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
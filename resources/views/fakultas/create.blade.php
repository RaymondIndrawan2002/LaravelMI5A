@extends( 'layouts.main')

@section('content')
<h4>Fakultas</h4>
<form action="{{ route('fakultas.store')}}" method="post">
    @csrf
    nama
    <input type="text" name="nama" id="" class="form-control mb-2">
    dekan
    <input type="text" name="dekan" id="" class="form-control mb-2">
    Singkatan
    <input type="text" name="singkatan" id="" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
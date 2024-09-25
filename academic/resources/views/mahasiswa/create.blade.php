@extends( 'layouts.main')

@section('content')

<h4>mahasiswa</h4>

<form action="{{ route('mahasiswa.store')}}" method="post">
    @csrf
    NPM
    <input type="text" name="npm" id="" class="form-control mb-2">
    nama
    <input type="text" name="nama" id="" class="form-control mb-2">
    tanggal lahir
    <input type="text" name="tanggal_lahir" id="" class="form-control mb-2">
    Tempat lahir
    <input type="text" name="tempat_lahir" id="" class="form-control mb-2">
    Email
    <input type="text" name="email" id="" class="form-control mb-2">
    Hp
    <input type="text" name="hp" id="" class="form-control mb-2">
    Alamat
    <input type="text" name="alamat" id="" class="form-control mb-2">
     Prodi
    <select name="prodi_id" id="">
        @foreach ($prodi as $item)
            <option value="{{$item['id']}}">{{$item['nama']}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
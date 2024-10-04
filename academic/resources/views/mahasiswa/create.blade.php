@extends( 'layouts.main')

@section('content')

<h4>mahasiswa</h4>

<form action="{{ route('mahasiswa.store')}}" method="post">
    @csrf
    NPM
    @error('npm')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <input type="text" name="npm" id="" class="form-control mb-2">
    nama
    @error('nama')
    {{ $message }}
    @enderror
    <input type="text" name="nama" id="" class="form-control mb-2">
    tanggal lahir
    @error('tanggal_lahir')
    {{ $message }}
    @enderror
    <input type="text" name="tanggal_lahir" id="" class="form-control mb-2">
    Tempat lahir
    @error('tempat_lahir')
    {{ $message }}
    @enderror
    <input type="text" name="tempat_lahir" id="" class="form-control mb-2">
    Email
    @error('email')
    {{ $message }}
    @enderror
    <input type="text" name="email" id="" class="form-control mb-2">
    Hp
    @error('hp')
    {{ $message }}
    @enderror
    <input type="text" name="hp" id="" class="form-control mb-2">
    Alamat
    @error('alamat')
    {{ $message }}
    @enderror
    <input type="text" name="alamat" id="" class="form-control mb-2">
     Prodi
     @error('prodi_id')
    {{ $message }}
    @enderror
    <select name="prodi_id" id="">
        @foreach ($prodi as $item)
            <option value="{{$item['id']}}">{{$item['nama']}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
@extends( 'layouts.main')

@section('content')
<h4>Fakultas</h4>
<form action="{{ route('prodi.store')}}" method="post">
    @csrf
    nama
    <input type="text" name="nama" id="" class="form-control mb-2">
    Kaprodi
    <input type="text" name="kaprodi" id="" class="form-control mb-2">
    Singkatan
    <input type="text" name="singkatan" id="" class="form-control mb-2">
    Fakultas
    <select name="fakultas_id" id="">
        @foreach ($fakultas as $item)
            <option value="{{$item ['id']}}">{{$item['nama']}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
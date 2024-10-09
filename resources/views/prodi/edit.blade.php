@extends( 'layouts.main')

@section('content')

<h4>Prodi</h4>

<form action="{{ route('prodi.update', $prodi['id'])}}"method="post">
    @csrf
    @method('PUT')
    nama
    <input type="text" name="nama" id="nama" class="form-control" value="{{$prodi['nama']}}">
    dekan
    <input type="text" name="dekan" id="dekan" class="form-control" value="{{$prodi['kaprodi']}}">
    Singkatan
    <input type="text" name="singkatan" id="singkatan" class="form-control mb-2" value="{{$prodi['singkatan']}}">

    Fakultas
    <select name="fakultas_id" id="form-control">
        @foreach ($fakultas as $item)
            <option value="{{$item['id']}}"{{$item['id']}}{{$item['id'] == $prodi['fakultas_id'] ? "selected" :null}}></option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">ubah</button>
</form>

@endsection
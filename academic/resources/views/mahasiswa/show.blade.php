@extends('layout.main')

@section('content')
<h4>{{ $mahasiswa['nama']}}</h4>

<table class="table table-striped">
<tr>
    <td>Program Studi</td>
    <td>{{ $mahasiswa['prodi']['nama'] }}</td>
</tr>
<tr>
    <td>NPM</td>
    <td>{{ $mahasiswa['npm']}}</td>
</tr>
<tr>
    <td>Tempat Lahir</td>
    <td>{{ $mahasiswa['tempat_lahir']}}</td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td>{{ $mahasiswa['tanggal_lahir']}}</td>
</tr>
</table>

@endsection
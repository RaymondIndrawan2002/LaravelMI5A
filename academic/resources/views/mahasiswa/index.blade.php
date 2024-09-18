@extends( 'layouts.main')

@section('content')
        <h4>Prodi</h4>
        <table class="table table-striped">
                <thead>
                        <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Npm</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        </tr>  
                </thead>
        <tbody>
        @foreach ($mahasiswa as $row )
        <tr>
                <td>{{$row['nama']}}</td>
                <td>{{$row['npm']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['alamat']}}</td>
                <td><a href="{{ route ('mahasiswa.show', $row['id'])  }}" 
                class="btn btn-primary btn-xs">show</a><td>
        </tr>
        </tr>
        @endforeach
        </tbody>
        </table>
@endsection
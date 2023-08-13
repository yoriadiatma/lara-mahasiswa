@extends('layout.layout')

@section('konten')

<h1>Data Jurusan</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Jurusan</th>
            <th scope="col">Nama Jurusan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jurusan as $key)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $key->kode_jurusan }}</td>
            <td>{{ $key->nama_jurusan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/mahasiswa" class="btn btn-info">Back to Mahasiswa</a>
@endsection
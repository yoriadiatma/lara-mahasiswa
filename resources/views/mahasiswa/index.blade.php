@extends('layout.layout')

@section('konten')
<h1>Data Mahasiswa</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jurusan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        @php
            $number = ($students->currentPage() - 1) * $students->perPage() + $loop->iteration;
        @endphp
        <tr>
            <th scope="row">{{ $number }}</th>
            <td>{{ $student->nim }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->alamat }}</td>
            <td><a href="/mahasiswa/{{ $student->department->kode_jurusan }}">{{ $student->department->nama_jurusan }}</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $students->links() }}
<a href="/jurusan" class="btn btn-info">Jurusan</a>
@endsection
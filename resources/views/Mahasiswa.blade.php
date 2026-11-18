
@extends('layouts.backend')

@section('content')
    <div class="container mt-4">
        <h1>Data Mahasiswa</h1>

        <button class="btn btn-success mt-4">
            Tambah Data
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->nohp }}</td>
                    <td>
                        <img src="{{ asset($data->foto) }}"
                             alt="Foto {{ $data->nama }}"
                             width="60" height="60">
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

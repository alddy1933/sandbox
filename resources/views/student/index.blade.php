@extends('layouts.main')
@section('content')
    <h4>Daftar Siswa :</h4>
    <div class="row">
        <div class="col-7">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->jurusan }}</td>
                            <td><a href="/students/{{ $s->id }}" class="btn btn-success">Lihat</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
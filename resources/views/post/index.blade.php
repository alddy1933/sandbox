@extends('layouts.main')
@section('content')
    <h4>Daftar Posts :</h4>
    <a href="/post/create">Tambah data</a>
    <div class="row">
        <div class="col-7">
            @if ($message = Session::get('success'))
                <div class="alert alert-success"><p>{{ $message }}</p></div>
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($posts as $p)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $p->title }}</td>
                            <td>{{ Str::substr($p->content, 0, 10).'. . . ' }}</td>
                            <td>
                                <a href="/post/{{ $p->id }}" class="btn btn-success">Lihat</a>
                                <a href="/post/{{ $p->id }}/delete" class="btn btn-danger">Hapus</a>
                            </td>                           
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
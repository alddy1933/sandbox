@extends('layouts.main')

@section('content')
    <h4>Jurusan : {{ $major }}</h4>
    <ul>
        @foreach ($students as $s)
            <li>
                <p>Nama : {{ $s->name }}</p>
            </li>
        @endforeach
    </ul>
@endsection
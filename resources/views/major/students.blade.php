@extends('layouts.main')

@section('content')
    <h4>Jurusan : {{ $major }}</h4>
    <a href="/major/{{ $slug }}/info">info</a>
    <ul>
        @foreach ($students as $s)
            <li>
                <p>{{ $s->name }}</p>
            </li>
        @endforeach
    </ul>
@endsection
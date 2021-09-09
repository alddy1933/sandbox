@extends('layouts.main')

@section('content')
    <h2>List Jurusan</h2>
    <ul>
        @foreach ($majors as $m)
            <li><a href="/major/{{ $m->slug }}/students">{{ $m->name }}</a></li>
        @endforeach
    </ul>
@endsection
@extends('layouts.main')

@section('content')
    <ul>
        <li>Nama : {{ $student->name }}</li>
        <li>Jurusan : <a href="/students/major/{{ $student->major->slug }}">{{ $student->major->name }}</a></li>
    </ul>
    <a href="/students">Back</a>
@endsection
@extends('layouts.main')

@section('content')
    <ul>
        <li>Nama : {{ $student->nama }}</li>
        <li>Jurusan : {{ $student->jurusan }}</li>
    </ul>
    <a href="/students">Back</a>
@endsection
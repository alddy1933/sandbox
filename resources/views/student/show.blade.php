@extends('layouts.main')

@section('content')
    <ul>
        <li>Nama : {{ $student->name }}</li>
        <li>Jurusan : <a href="/major/{{ $student->major->slug }}/students">{{ $student->major->name }}</a></li>
        <li>Post : 
            <ul>
                @foreach ($posts as $p)
                    <li><a href="/post/{{ $p->id }}">{{ $p->title }}</a></li>
                @endforeach
            </ul>
        </li>
    </ul>
    <a href="/students">Back</a>
@endsection
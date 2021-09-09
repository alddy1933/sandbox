@extends('layouts.main')

@section('content')
    <ul>
        <li>Judul : {{ $post->title }}</li>
        <li>Isi : {{ $post->content }}</li>
        <li>Dibuat oleh : <a href="/student/{{ $student->id }}">{{ $student->name }}</a></li>
    </ul>
    <a href="/posts">Back</a>
@endsection
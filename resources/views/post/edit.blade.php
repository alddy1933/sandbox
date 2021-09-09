@extends('layouts.main')

@section('content')
    <h2>Ubah data</h2>
    <form action="/post/{{ $post->id }}/update" method="POST">
        @csrf    
        <input type="hidden" name="student_id" value="1">
        <input type="text" name="title" placeholder="Judul" value="{{ $post->title }}"><br><br>
        <input type="text" name="content"  placeholder="Isi" value="{{ $post->content }}"><br><br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif
        <button type="submit" class="btn btn-primary">Submit</button><br>
        <a href="/posts">Back</a>
    </form>
@endsection
@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/blog/create" class="btn btn-dark">Upload</a>
    </div>
    <table>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->description }}</td>
                <td>{{ $post }}</td>
            </tr>
        @endforeach
    </table>

@endsection
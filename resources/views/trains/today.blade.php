@extends('layouts.main')
@section('title', 'today')
@section('content')
<h1>Today's runs</h1>
<div class="row">
    {{-- <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Original Title</th>
            <th scope="col">Nationality</th>
            <th scope="col">Relase date</th>
            <th scope="col">Rating</th>
          </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
          <tr>
            <th scope="row">{{$movie['id']}}</th>
            <td>{{$movie['title']}}</td>
            <td>{{$movie['original_title']}}</td>
            <td>{{$movie['nationality']}}</td>
            <td>{{$movie['date']}}</td>
            <td>{{$movie['vote']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table> --}}
</div>

@endsection
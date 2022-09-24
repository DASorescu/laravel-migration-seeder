@extends('layouts.main')
@section('title', 'today')
@section('content')
<h1>Today's runs</h1>
<div class="row">
  <table class="table table-info ">
    <thead>
      <tr>
        <th scope="col">train code</th>
        <th scope="col">company</th>
        <th scope="col">from</th>
        <th scope="col">to</th>
        <th scope="col">departing time</th>
        <th scope="col">arriving time</th>
        <th scope="col">coaches</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($trains as $train)
        <tr>
          <th scope="row">{{$train['train_code']}}</th>
          <td>{{$train['company']}}</td>
          <td>{{$train['departing_station']}}</td>
          <td>{{$train['arriving_station']}}</td>
          <td>{{$train['departing_time']}}</td>
          <td>{{$train['arriving_time']}}</td>
          <td>{{$train['carriges']}}</td>
          @if($train['is_cancelled'])
            <td class="text-danger fw-bold">DELETED</td>
          @elseif(!$train['is_on_time'])
            <td class="text-warning fw-bold">LATE</td>
          @else
            <td class="text-success fw-bold">ON TIME</td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
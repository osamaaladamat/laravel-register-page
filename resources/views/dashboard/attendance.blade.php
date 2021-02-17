@extends('layouts.master')

@section('title')
    Attendance
@endsection

@section('main')
{{-- {{print_r($array)}} --}}
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table mt-5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Student Name</th>
        <th scope="col">Attendance Record</th>
        {{-- <th scope="col">Check-out</th>
        <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>

@foreach($array as $key => $value)
      <tr>
        <th scope="row">{{$value['name']}}</th>
        <td><a href="/attendance/{{$key}}" class="mt-auto btn btn-warning btn-sm d-flex justify-content-center">View Record</a></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
<div class="col-md-3"></div>
</div>
@endsection

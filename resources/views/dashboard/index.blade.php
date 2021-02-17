@extends('layouts.master')

@section('title')
    Home
@endsection


@section('main')
<div class="row mt-5">
@foreach($array as $key => $value)

<div class="col-md-2 card m-3 " style="width: 18rem;">
    <img class="card-img-top" src="{{$value['image']}}" alt="Card image cap">
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">{{$value['name']}}</h5>
      <a href="/single_student/{{$key}}" class="mt-auto btn btn-warning btn-sm d-flex justify-content-center">View Profile</a>
    </div>
  </div>

@endforeach
</div>
@endsection


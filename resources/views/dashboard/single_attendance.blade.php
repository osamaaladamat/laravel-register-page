@extends('layouts.master')

@section('title')
{{$array['name']}}'s | Attendance Record
@endsection


@section('main')
{{-- {{print_r($array)}} --}}
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table mt-5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Day</th>
        <th scope="col">Check-in</th>
        <th scope="col">Check-out</th>
        <th scope="col">Work hours</th>
      </tr>
    </thead>
    <tbody>
        @php

        foreach($attendance_array as $key => $value){
                $day       = substr($value['check_in'], 0,6);
                $check_in  = intval(substr($value['check_in'], -5,2));
                $check_out = intval(substr($value['check_out'], -5,2));
                $hours     = $check_out - $check_in;
                if($check_out - $check_in < 8){
                    echo"<tr class='table-danger'>";
                }
                elseif($check_out - $check_in > 8){
                    echo"<tr class='table-success'>";
                }else {
                    echo"<tr>";
                }
                echo"<th scope='row'>$day</th>";
                echo"<td>$check_in</td>";
                echo"<td>$check_out</td>";
                echo"<td>$hours</td>";

                echo"</tr>";
}
// echo"<td>$check_in</td>";
        @endphp
{{-- @foreach($array as $key => $value)
      <tr>
        <th scope="row">{{$array['name']}}</th>
        <td></td>
      </tr>
@endforeach --}}
    </tbody>
  </table>
</div>
<div class="col-md-3"></div>
</div>
@endsection

@extends('layouts.master')

@section('title')
Register
@endsection


@section('main')
@if(isset($result))

<div class="alert alert-success">
    {{$result}}
</div>

@endif
<link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <input type="submit" name="" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">
            {{-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul> --}}
            <form method="post" action="/create">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register a new account</h3>
                        <div class="row register-form">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('fullname')
                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" placeholder="Full Name *" name="fullname"
                                        value="" />
                                    {{-- <div class="alert alert-danger" role="alert">
                                        {{print_r($errors)}}
                                </div> --}}
                            </div>
                            <div class="form-group">
                                @error('email')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" placeholder="Email *" name="email" value="" />
                            </div>
                            @error('mobile')
                            <div style="color: red; font-weight:500">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="mobile" class="form-control"
                                    placeholder="Your Phone *" value="" />
                            </div>
                            @error('password')
                            <div style="color: red; font-weight:500">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" name="password"
                                    value="" />
                            </div>
                            @error('password_confirmation')
                            <div style="color: red; font-weight:500">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *"
                                    name="password_confirmation" value="" />
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <input type="submit" class="btnRegister" value="Register" />
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-3"></div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="email"
                                    value="" />
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                    <div class="form-group">
                        <input type="text" minlength="10" maxlength="10" name="phone_number" class="form-control"
                            placeholder="Your Phone *" value="" />
                    </div>
                    @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <select class="form-control" name="city">
                            <option class="hidden" selected disabled>Please select your City</option>
                            <option>Amman</option>
                            <option>Aqaba</option>
                            <option>Jarash</option>
                        </select>
                    </div>
                    @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="`Answer *" value="" />
                    </div>
                </div>--}}
        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
<div class="container mt-5">
    <table class="table ">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all as $user)
            <tr class="table-light">
                <th scope="row">{{$user->fullname}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->password}}</td>
                <td><a class="btn btn-danger" href="/delete/{{$user->userid}}">Delete</a></td>
                <td><a class="btn btn-warning" href="/edit/{{$user->userid}}">Edit</a></td>


            </tr>
            @endforeach
        </tbody>
    </table>



    <!--main end-->
</div>


{{-- @if(isset($all))
@foreach($all as $user)'
<li>$user</li>
@endforeach
@endif --}}
{{-- @if(isset($all))

@foreach($all as $key => $value)

@if($key != "_token")
<li>
    {{$key}} : {{$value}}
</li>
@endif

@endforeach


@endif --}}


<script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection

@extends('layouts.master')

@section('title')
Edit user
@endsection


@section('main')
<link rel="stylesheet" href="{{URL::asset('css/form.css')}}">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
        </div>
        <div class="col-md-9 register-right">
            <form method="post" action="/update/{{$user->userid}}">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Update Details</h3>
                        <div class="row register-form">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('fullname')
                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" placeholder="Full Name *" name="fullname"
                                        value="{{$user->fullname}}" />
                                </div>
                                <div class="form-group">
                                    @error('email')
                                    <div style="color: red; font-weight:500">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" placeholder="Email *" name="email"
                                        value="{{$user->email}}" />
                                </div>
                                @error('mobile')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="mobile" class="form-control"
                                        placeholder="Your Phone *" value="{{$user->mobile}}" />
                                </div>
                                @error('password')
                                <div style="color: red; font-weight:500">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password *"
                                        name="password" value="" />
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
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- <div class="container">
    <table class="table ">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all as $user)
            <tr class="table-light">
                <th scope="row">{{$user->fullname}}</th>
<td>{{$user->email}}</td>
<td>{{$user->mobile}}</td>
<td><a class="btn btn-danger" href="/delete/{{$user->userid}}">Delete</a></td>


</tr>
@endforeach
</tbody>
</table> --}}



<!--main end-->
</div>

<script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection

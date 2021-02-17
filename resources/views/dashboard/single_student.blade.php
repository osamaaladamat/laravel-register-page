@extends('layouts.master')
@section('title')
    {{$array['name']}}'s | Profile
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('css/single_student.css') }}" />
@endsection

@section('main')
<section class="member-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="img-container">
                    <img src="{{$array['image']}}" alt="team member" class="img-full">
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="member_designation">
                    <h2>{{$array['name']}}</h2>
                </div>
                <div class="member_desc">
<h3>Projects</h3>
<ul class="styled_list">

@foreach($array['projects'] as $key => $value)

@if($value['completed'])

<li class=""><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> {{$value['project_name']}}</li>

@else

<li class=""><i class="fa fa-chevron-circle-right text-danger" aria-hidden="true"></i> {{$value['project_name']}}</li>

@endif
@endforeach



</div>
<div class="bg-image " style="background-image: url('https://www.bootdey.com/img/Content/bg_element.jpg');">
    <div class="member_contact">
        <div class="row">
            <div class="col-lg-4  mb-3 mb-lg-0">
                <div class="media-box">
                    <div class="media-icon">
                        <i class="fa fa-tablet" aria-hidden="true"></i>
                    </div>
                    <div class="media-content">
                        <h5>Phone</h5>
                        <p><a href="callto">(+1) 251-235-3256</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3 mb-lg-0">
                <div class="media-box">
                    <div class="media-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="media-content">
                        <h5>Email</h5>
                        <p><a href="mailto">info@example.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="social-icons">
                    <button class="btn btn-social outlined"><i class="fa fa-facebook-f"></i></button>
                    <button class="btn btn-social outlined"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-social outlined"><a href="{{$array['linkedin']}}"><i class="fa fa-linkedin"></i></a></button>
                    <button class="btn btn-social outlined"><i class="fa fa-pinterest-p"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="member_desc">
    <h4>Persional Information</h4>
    <p>
{{$array['name']}} is a student at orange coding academy and studies HTML/5, CSS/3, JavaScript, PHP/Laravel, MYSQL, MERN Stack, Python, React & React Native and other technologies he was born in {{$array['birthday']}}
    </p>

    <h4>Skills</h4>
    <!-- progressbar starts -->
    <div class="progress-holder">
        <div class="barWrapper">
            <span class="progressText"><b>Javascript</b></span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="80%" aria-describedby="tooltip443011"> </span>
            </div>
        </div>
        <div class="barWrapper">
            <span class="progressText"><b>Photoshop</b></span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="95%" aria-describedby="tooltip656043"> </span>
            </div>
        </div>
        <div class="barWrapper">
            <span class="progressText"><b>Web Design</b></span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="85%" aria-describedby="tooltip880607"> </span>
            </div>
        </div>
        <div class="barWrapper">
            <span class="progressText"><b>Wordpress</b></span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%" aria-describedby="tooltip616792"> </span>
            </div>
        </div>
    </div>
    <!-- progressbar ends -->
</div>
<div class="row ">
    <div class="col-lg-6 member_desc">
        <h4>Nec nisl iaculis pulv</h4>
        <p>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
        </p>
    </div>
    <div class="col-lg-6 member_desc">
        <h4>Aesent nec nisl</h4>
        <p>
            Cepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        </p>
    </div>
</div>
</div>

</div>
</div>
</section>


@endsection

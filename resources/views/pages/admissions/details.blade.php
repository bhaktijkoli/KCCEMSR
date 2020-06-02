@extends('layouts.master')
@section('pre')
	@php
	$title = "Admissions 2018";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<div class="col-md-12">
					<h1 id="about" class="title text-center">Admissions <span>2020</span></h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							{{-- <img src="http://via.placeholder.com/1140x615" alt=""> --}}
							{{-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/ciiMB8Mbg5g" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --}}
							<div class="" style="">
								<img src="{{url('images/KC_BANNER_AD.jpg')}}">
							</div>
							<div class="space"></div>
							{{-- <div class="" style="padding-bottom: 20px;">
							<img src="{{url("images/ad2020.jpg")}}">
						</div> --}}
					</div>
					<div class="col-md-6" style="text-align: justify;">
						<h1 style="font-size: 30px">Latest News</h1>
						<ul class="list-unstyled resp-text-sub">
							<h2 class="text-left align-marg" style="font-size: 120%; margin-bottom: 1%;">Excelssior Education Society's K.C. College of Engineering &amp; Management Studies &amp; Research, Thane</h2>
							<p class="text-left align-marg">DTE Choice Code:</p>
							<p class="text-left align-marg">Electronics &amp; Telecommunication - 321037210</p>
							<p class="text-left align-marg">Computer Engineering - 321024510</p>
							<p class="text-left align-marg">Information Technology - 321024610</p>

							<!--<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="https://forms.gle/XtUyzk8RnKh1yegV9" target="_blank">Click here to enroll for free seminar on engineering admission process 2019-20</a></li>-->
							{{-- <li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="https://goo.gl/forms/6VUPg6imlSNK8H822" target="_blank">Apply for mock test of JEE/MHCET 2019</a></li> --}}
							{{-- <li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="{{route('admissions-apply')}}" target="_blank">Apply Online</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="https://fe2018.mahacet.org/StaticPages/HomePage.aspx" target="_blank">DTE Home Page</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="http://fe2018.mahacet.org/2017/2017ENGG_CAP1_CutOff.pdf" target="_blank">Engineering  Cut-Off 2017 for CAP Round 1</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="http://fe2018.mahacet.org/2017/2017ENGG_CAP2_CutOff.pdf" target="_blank">Engineering  Cut-Off 2017 for CAP Round 2</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="http://fe2018.mahacet.org/2017/2017ENGG_CAP3_CutOff.pdf" target="_blank">Engineering  Cut-Off 2017 for CAP Round 3</a></li> --}}
							{{-- <p class="text-left align-marg" style="text-align: justify;">For more information on option form filling for CAP Round Guidance Visit us on 23/06/2018 at 11.30 AM</p> --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="space"></div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center title" id="portfolio"><span>Events</span></h1>
			</div>
		</div>
		<div class="row">
			<div class="target-container container" style="overflow:hidden;">
				@foreach (App\Event::orderBy('date','desc')->get() as $event)
					@php
					if(!is_in_type($event->department, $types) && $event->department != "all") continue;
					@endphp
					<div class="col-sm-6 col-md-3 isotope-item {{$event->department}}">
						<div class="image-box">
							<div class="overlay-container">
								{{-- 750 x 500 --}}
								<img src="{{url("images/eclipse.gif")}}" alt="" data-echo="{{$event->getFeaturedImage()}}" style="height: 240px;margin: 0 auto;" height="500">
								<a class="overlay" href="{{route('event', $event->url)}}">
									<i class="fa fa-search-plus"></i>
									<span>{{App\Department::getName($event->department)}}</span>
								</a>
							</div>
							<a class="btn btn-default btn-block" href="{{route('event', $event->url)}}">
								<p style="overflow: hidden; margin: 0px; white-space: normal;" class="ellipsis_3_line">
									{{$event->name}}
								</p>
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
@section('post')
@endsection

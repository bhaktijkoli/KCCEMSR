@extends('layouts.master')
@section('pre')
	@php
	$title = "Student Application";
	$menu_item = 'admissions';
	$admission = App\Admission::where('userid', Auth::user()->id)->first();
@endphp
@endsection
@section('content')
	<link rel="stylesheet" href="/css/gridforms.css">
	<script src="/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment-with-locales.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn" style="margin-top:50px">
		<div class="container main-content">
			@if (!$admission || ($admission->completed == 0))
				@include('forms.student-application')
			@else
				You have submited your application.
		<br>
		<br>
				<a href="{{route('admissions-application-print')}}" target="_blank" class="btn btn-primary">Print</a>
			@endif
		</div>
	</div>
@endsection
@section('post')
@endsection

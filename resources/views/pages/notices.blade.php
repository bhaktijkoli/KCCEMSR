@extends('layouts.master')
@section('pre')
	@php
	$title = "Notice"
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>Notices</span></strong></h1>
				<hr>
				<ul class="list-unstyled resp-text-sub" style="margin-left: 12px;">
					@foreach (App\FileUpload::where('type',$type)->orderBy('created_at', 'DESC')->get() as $fp)
						<li><i style="float: left;margin-top: 7px;" class="fa fa-chevron-right pr-10 text-colored"></i><a style="display: block;" href="{{route('exam-id', [$action, $fp->id])}}"><p style="display:flex;">{{$fp->name}}</p></a><small>&nbsp;&nbsp;{{$fp->created_at->format('d/m/Y')}}</small></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection

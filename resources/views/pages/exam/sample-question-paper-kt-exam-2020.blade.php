@extends('layouts.master')
@section('pre')
	@php
	$title = "Sample Question Paper KT Exam 2020";
	$menu_item = 'exam';
@endphp
@endsection
@section('content')
	<div id="app" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>Sample Question Paper KT Exam 2020</span></strong></h1>
                <div class="space"></div>
                <div class="col-sm-12">
                        @php
							$ktquestions = File::allFiles(public_path('public/kt-questions'));
						@endphp
						<ul>
							@foreach ($ktquestions as $report)
								<li><a href="{{url('/public/kt-questions/'.$report->getFilename())}}" target="_blank">{{str_replace('.pdf', '', $report->getFilename())}}</a></li>
							@endforeach
						</ul>
                </div>
			</div>
		</div>
	</div>
@endsection

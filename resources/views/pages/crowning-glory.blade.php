@extends('layouts.master')
@section('pre')
	@php
	$title = "Crowning Glory";
	$menu_item = 'crowning-glory';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center title" id="portfolio"><span>Crowning Glory</span></h1>
				@foreach (App\KCinMedia::where('type', 'glory')->orderBy('id','DESC')->get() as $media)
				<div class="row">
					<div class="col-md-6" style="float:left">
						@php
						$carousel = App\Carousel::where('type', $media->carousel)->first();
						$no=0;
						@endphp
						@if ($carousel)
							<div id="carousel-{{$media->carousel}}" class="carousel slide">
								<div class="carousel-inner" style="height: 420px;">
									@foreach ($carousel->images as $id)
										@php
										$image = App\ImageUpload::where('id', $id)->first();
										if(!$image) continue;
										@endphp
										<div class="item {{$no==0?'active':''}}" data-slide-number="{{$no++}}">
											<img src="{{$image->getUrl()}}" width="1200">
										</div>
									@endforeach
								</div>
								<a class="left carousel-control" href="#carousel-{{$media->carousel}}" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-{{$media->carousel}}" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						@endif
					</div>
					<div class="col-md-6">
						<h2 class="title"><span>{{$media->name}}</span></h2>
						{{-- <h4>Sub heading:</h4> --}}
						<p style="text-align: justify">{{$media->description}}</p>
					</div>
				</div>
				<div class="space"></div>
				@endforeach
			</div>
		</div>
	</div>
@endsection

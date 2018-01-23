@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>{{$title}}</span></strong></h1>

				@if ($type == "exam-notices")
					<ul class="list-unstyled resp-text-sub align-marg">
						@foreach (App\FileUpload::where('type',$type)->get() as $fp)
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="{{route('exam-id', [$action, $fp->id])}}">{{$fp->name}}</a></li>
						@endforeach
					</ul>
				@else
					@foreach (App\Department::orderBy('id', 'ASC')->get() as $dep)
						<h2 class="title text-left resp-text-head align-marg"><strong>{{$dep->name}}</strong></h2>
						@if ($dep->isPrimary())
							<h4 class="text-left align-marg">FE</h4>
							<hr class="align-marg"/>
							<ul class="list-unstyled resp-text-sub align-marg">
								@foreach (App\FileUpload::where('type',$type)->where('department',$dep->url)->where('year',"1")->get() as $fp)
									<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="{{route('exam-id', [$action, $fp->id])}}">{{$fp->name}}</a></li>
								@endforeach
							</ul>
							@continue
						@endif
						<h4 class="text-left align-marg">SE</h4>
						<hr class="align-marg"/>
						<ul class="list-unstyled resp-text-sub align-marg">
							@foreach (App\FileUpload::where('type',$type)->where('department',$dep->url)->where('year',"2")->get() as $fp)
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="{{route('exam-id', [$action, $fp->id])}}">{{$fp->name}}</a></li>
							@endforeach
						</ul>
						<h4 class="text-left align-marg">TE</h4>
						<hr class="align-marg"/>
						<ul class="list-unstyled resp-text-sub align-marg">
							@foreach (App\FileUpload::where('type',$type)->where('department',$dep->url)->where('year','3')->get() as $fp)
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="{{route('exam-id', [$action, $fp->id])}}">{{$fp->name}}</a></li>
							@endforeach
						</ul>
						<h4 class="text-left align-marg">BE</h4>
						<hr class="align-marg"/>
						<ul class="list-unstyled resp-text-sub align-marg">
							@foreach (App\FileUpload::where('type',$type)->where('department',$dep->url)->where('year','4')->get() as $fp)
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="{{route('exam-id', [$action, $fp->id])}}">{{$fp->name}}</a></li>
							@endforeach
						</ul>
					@endforeach
				@endif




			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection

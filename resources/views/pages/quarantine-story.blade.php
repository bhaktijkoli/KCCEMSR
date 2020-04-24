@extends('layouts.master')
@section('pre')
  @php
  $menu_item = 'quarantine-story';
@endphp
@endsection
@section('content')
  <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
    <div class="container main-content">
      <h1 class="text-center title" id="quarantine-story"><span>My KC Quarantine Story</span></h1>
      <p class="text-center" style="font-size: 2rem;">Break the Covid chain not the learning chain.. Stay in but stay connected for learning...</p>
      <div class="separator"></div>
      <br>
      <div class="row object-non-visible" data-animation-effect="fadeIn">
        <div class="col-md-12">
          @foreach (App\Event::where('department', 'kcqs')->orderBy('date','desc')->get() as $event)
            <div class="col-sm-6 col-md-3">
              <div class="image-box">
                <div class="overlay-container">
                  <img src="{{url("images/eclipse.gif")}}" alt="" data-echo="{{$event->getFeaturedImage()}}" style="height: 250px;margin: 0 auto;" height="500">
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

@extends('layouts.master')
@section('pre')
  @php
  $title = "Industrial Institute Interaction";
  $menu_item = 'industrial-institute-interaction';
@endphp
@endsection
@section('content')
  <div class="section">
    <div class="container main-content-sub">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav nav-tabs nav-stacked">
            <li class="active"><a data-toggle="tab" href="#mou">MOU</a></li>
            <li><a data-toggle="tab" href="#industrial_visit">Industrial Visit</a></li>
            <li><a data-toggle="tab" href="#activities">Activities</a></li>
          </ul>
        </div>
        <div class="col-sm-9">
          <div class="tab-content">
            <div id="mou" class="tab-pane fade in active">
              <h3>MOU</h3>
            </div>
            <div id="industrial_visit" class="tab-pane fade">
              <h3>Industrial Visit</h3>
              @foreach (App\Event::where('department', 'industrial_visit')->orderBy('date','desc')->get() as $event)
                <div class="col-sm-6">
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
            <div id="activities" class="tab-pane fade">
              <h3>Activities</h3>
              @foreach (App\Event::where('department', 'industrial_activities')->orderBy('date','desc')->get() as $event)
                <div class="col-sm-6">
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
    </div>
  </div>
@endsection
@section('post')
@endsection

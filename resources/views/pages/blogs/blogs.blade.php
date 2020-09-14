@extends('layouts.master')
@section('pre')
	@php
	$title = "Latest Blogs";
	$menu_item = 'blogs';
@endphp
@endsection
@section('css')
      <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
        <div class="container main-content-sub tab-pane fade in">
            <div class="row">
                <div class="col-lg-9">
                    <h5>Latest Blogs</h5>
                    <div class="row">
                        @php
                            $columns = [8,4,4];
                        @endphp
                        @foreach ($blogs as $blog)
                            <div class="col-sm-{{$loop->index >= 3?6:$columns[$loop->index]}}">
                                <a href="/blogs/{{$blog->slug}}">
                                    <div class="blog-panel">
                                        <div class="blog-panel-img">
                                            <div class="category-tag">
                                                {{$blog->sub_category->name}}
                                            </div>
                                            <div class="backdrop"></div>
                                            <img src="{{$blog->image}}"/>
                                            <div class="blog-details">
                                                <h3 class="blog-title">{{$blog->title}}</h3>
                                            <p class="blog-subtitle">{{Carbon\Carbon::parse($blog->created_at)->format('M j, Y')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                 </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Browse Categories</h5>
                    <div class="blog-panel">
                        <ul class="categories-list">
                            @foreach ($categories as $category)
                            <li class="category-name">{{$category->name}}</li> 
                            @foreach ($category->sub_categories as $cat)
                            <li class="sub-category-name">{{$cat->name}}</li> 
                            @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('post')
    <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script type="text/javascript">
    </script>
@endsection
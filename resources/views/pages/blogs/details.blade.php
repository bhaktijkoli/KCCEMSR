@extends('layouts.master')
@section('pre')
	@php
	$title = $blog->title;
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
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="blog-category-tag">
                        {{$blog->sub_category->name}}
                    </div>
                    <div class="blog-heading">
                        <h1 class="title">{{$blog->title}}</h1>
                    </div>
                    <img class="blog-img" src="{{$blog->image}}"/>
                    <div class="blog-body">
                        <p style="font-size:18px">{{$blog->body}}</p>
                    </div>
                    <div class="blog-comments">
                        <p>Comment(s)</p>
                        @foreach ($blog->comments as $comment)
                                <div class="blog-comment media">
                                    <div class="media-left">
                                    <img src="{{$comment->user->avatar}}" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$comment->user->name}}</h4>
                                        <p>{{$comment->body}}</p>
                                        @foreach ($comment->replies as $reply)
                                            <div class="blog-comment-reply media">
                                                <div class="media-left">
                                                <img src="{{$reply->user->avatar}}" class="media-object" style="width:60px">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">{{$reply->user->name}}</h4>
                                                    <p>{{$reply->body}}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center">
                        <a class="btn btn-primary" href="{{env('ERP_URL') .'/blog/'.$blog->id}}">Comment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('post')
@endsection
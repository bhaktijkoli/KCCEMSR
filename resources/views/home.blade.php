@extends('layouts.master')
@section('pre')
@php
$title = config('app.name');
$menu_item = 'home';
@endphp
@endsection
@section('content')
<div class="container">
  <div class="jumbotron">
    <h1>Hello, world!</h1>
    <p></p>
  </div>
</div>
@endsection
@section('post')
@endsection
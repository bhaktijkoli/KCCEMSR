@extends('layouts.master')
@section('pre')
@php
$title = "Forgot Password";
$menu_item = 'admissions';
@endphp
@endsection
@section('content')
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
    <div class="container main-content">
        
        <div class="col-sm-offset-3 col-sm-6">
            <div id="tab-1" class="login tab-content_reg current">
                <h3 class="text-center">Forgot Password</h3>
                <p>Enter your email address</p>
                <form id="forgot_password_form" method="POST">
                    {{ csrf_field() }}
                    <div id="error-result" class="alert alert-danger" style="display:none">
                        <span>{{trans('auth.failed')}}</span>
                    </div>
                    <div class="form-group form-section">
                        <span class="fa fa-envelope-o input-icon"></span>
                        <input type="email" name="email" id="email" placeholder="Email">
                        <small class="field-error help-block"></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>
@endsection
@section('post')
@endsection

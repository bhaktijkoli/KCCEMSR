@extends('layouts.master')
@section('pre')
	@php
	$title = "Admissions 2020";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<div class="col-md-12">
                    <h1 id="about" class="title text-center">Fees <span>Details</span></h1>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Student Admitted Year</th>
                                <th>A.Y. 2019-20</th>
                                <th>A.Y. 2018-19</th>
                                <th>A.Y. 2017-18</th>
                                <th>A.Y. 2016-17</th>
                            </tr>
                            <tr>
                                <th>Fees Structure</th>
                                <td>135000</td>
                                <td>130000</td>
                                <td>130000</td>
                                <td>130000</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Bank Name and branch</th>
                                <th>Account name</th>
                                <th>9</th>
                                <th>A.Y. 2017-18</th>
                                <th>A.Y. 2016-17</th>
                            </tr>
                            <tr>
                                <th>Fees Structure</th>
                                <td>135000</td>
                                <td>130000</td>
                                <td>130000</td>
                                <td>130000</td>
                            </tr>
                        </table>
                    </div>
				</div>
			</div>
        </div>
    </div>
@endsection
@section('post')
@endsection

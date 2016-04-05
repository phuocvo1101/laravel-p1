@extends('home.master')

@section('title', 'Tin Tức')
	@section('right-content')

		<div class="col-dl-9 right-content">
    		<div class="wrapper">
                <h3 class="titlel row-title"><span>{!! $loai !!}<img alt="danh muc" src="{{ asset('home/images/icon-3.png') }}"></span></h3>
				<div class="clearfix"></div>
				<div class="content">
					<h3 class="titlnews"> {!! $new->name !!}</h3>
					<div>
					{!! $new->content !!}
					</div>
					<div class="clearfix"></div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	@endsection
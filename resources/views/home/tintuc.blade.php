@extends('home.master')

@section('title', 'Tin tức')
<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>0909 222 022</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
	<div class="col-dl-9 right-content">
	    <div class="wrapper">
	        <h3 class="titlel row-title"><span>{{ $loai }}<img src="{{ asset('home/images/icon-3.png') }}" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	        	@if($news)
	        		@foreach($news as $item)
		            <div class="news">
		                <div class="news-img">
		                    <a href="{!! URL::route('chitiettintuc', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="{!!  $item->name !!}"></a>
		                </div>
		                <h4><a href="{!! URL::route('chitiettintuc', $item->id) !!}">{!!  $item->name !!}</a></h4>
		                <div class="clearfix"></div>
		            </div>
		            @endforeach
	            @endif
	            <div class="clearfix"></div>
	            <div class="clearfix"></div>
	            <div class="pagination" align="right">
	                <span>1</span>
	                <a href="#">2</a> 
	                <a href="#">3</a> ... 
	                <a href="#">8</a> 
	                <a href="#">&gt;</a>
	                <a href="#">&gt;&gt;</a>
	            </div>
	            <!--pagination-->
	        </div>
	    </div>
	</div>
    <!-- End right content -->
@endsection
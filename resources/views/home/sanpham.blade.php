@extends('home.master')

@section('title', 'Sản phẩm')

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
	        	@if($cate_products)
	        		@foreach($cate_products as $item)
		            <div class="product">
		                <div class="products">
		                    <div class="product_img">
		                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="{{ $item->name}}"></a>
		                    </div>
		                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{{ $item->name }}</a></h4>
		                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
		                </div>
		            </div>
	            	@endforeach
	            @endif
	            <div class="clearfix"></div>
	            <div class="pagination" align="right">
	                <span>1</span>
	                <a href="/chitiet">&gt;</a>
	                <a href="/chitiet">&gt;&gt;</a>
	            </div>
	            <!--pagination-->
	        </div>
	    </div>
	</div>
    <!-- End right content -->
@endsection

@extends('home.master')

@section('title', 'Trang chủ')


<!-- {{$variable1}}
{{$infors['name']}} -->
    <!-- Slider  homeslide-->
    
    <!-- End Slider homeslide-->

<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>{{$infors['tuvan']}}</span><br>{{$infors['name']}}</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
                <div class="col-dl-9 right-content">
                    <div class="wrapper">
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Mercedes Việt Nam<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Product Xe trong nuoc-->
                        <div class="content">
                        @if($new_product)
                            @foreach ($new_product as $item)
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="E200 Edition E"></a>
                                    </div>
                                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{!! $item->name !!}</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                            <div class="clearfix"></div>
                        </div>
                        <!-- End product xe khuyen mai -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Mercedes Nhập Khẩu<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>

                        <!-- Xe nhap khau -->
                        <div class="content">
                         @if($old_product)
                            @foreach ($old_product as $item)
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="GLE400 4Matic"></a>
                                    </div>
                                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{!! $item->name !!}</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe nhap khau -->
                    </div>
                </div>
                <!-- End right content -->
@endsection


@section('tintuc')
    @include('home.tintuchome')
@stop

@section('tinkhuyenmai')
    @include('home.tinkhuyenmai')
@stop
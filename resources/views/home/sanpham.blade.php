@extends('layouts.master')

@section('title', 'Sản phẩm mới')

@section('slider')
    @parent
    <!-- Slider  homeslide-->
    <section class="slider">
        <div class="container">
            <div class="homeslide">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1170px, 0px, 0px);">
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="./images/slider/slider1.jpg" alt="slide" draggable="false"></li>
                            <li class="flex-active-slide.jpg" style="width: 1170px; float: left; display: block;"><img src="./images/slider/slider2.jpg" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="./images/slider/slider3.jpg" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="./images/slider/slider4.jpg" alt="slide" draggable="false"></li>                            
                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-paging">
                        <li><a class="flex-active">1</a></li>
                        <li><a class="">2</a></li>
                        <li><a class="">3</a></li>
                    </ol>
                    <ul class="flex-direction-nav">
                        <li><a class="flex-prev" href="#">Previous</a></li>
                        <li><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider homeslide-->
@endsection

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
	        <h3 class="titlel row-title"><span>Xe mới<img src="./images/icon-3.png" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="E200 Edition E"></a>
	                    </div>
	                    <h4><a href="/chitiet">E200 Edition E</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.049.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="GLE400 4Matic"></a>
	                    </div>
	                    <h4><a href="/chitiet">GLE400 4Matic</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.519.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="G300 CDI"></a>
	                    </div>
	                    <h4><a href="/chitiet">G300 CDI</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.369.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="V116 CDI"></a>
	                    </div>
	                    <h4><a href="/chitiet">V116 CDI</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: Liên hệ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="SLS AMG Coupe"></a>
	                    </div>
	                    <h4><a href="/chitiet">SLS AMG Coupe</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 12.790.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="CLS350 AMG"></a>
	                    </div>
	                    <h4><a href="/chitiet">CLS350 AMG</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.199.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="AMG GTS"></a>
	                    </div>
	                    <h4><a href="/chitiet">AMG GTS</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 9.149.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="SL400 2Look"></a>
	                    </div>
	                    <h4><a href="/chitiet">SL400 2Look</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 5.799.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="SLK350"></a>
	                    </div>
	                    <h4><a href="/chitiet">SLK350</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.499.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="GLA200"></a>
	                    </div>
	                    <h4><a href="/chitiet">GLA200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.519.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="GLC250 2016"></a>
	                    </div>
	                    <h4><a href="/chitiet">GLC250 2016</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.749.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="E200"></a>
	                    </div>
	                    <h4><a href="/chitiet">E200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.999.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="S400L"></a>
	                    </div>
	                    <h4><a href="/chitiet">S400L</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.669.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="GLS350 CDI"></a>
	                    </div>
	                    <h4><a href="/chitiet">GLS350 CDI</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.899.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="CLA200"></a>
	                    </div>
	                    <h4><a href="/chitiet">CLA200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.489.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="C200"></a>
	                    </div>
	                    <h4><a href="/chitiet">C200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.439.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="A200 2016"></a>
	                    </div>
	                    <h4><a href="/chitiet">A200 2016</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.339.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="/chitiet"><img src="./images/flace.png" alt="GLE400 Exclusive"></a>
	                    </div>
	                    <h4><a href="/chitiet">GLE400 Exclusive</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.849.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
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

@section('content')
    <p>This is my body content.</p>
@endsection

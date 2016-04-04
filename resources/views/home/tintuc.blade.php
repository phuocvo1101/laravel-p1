@extends('layouts.master')

@section('title', 'Tin tức')

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
	        <h3 class="titlel row-title"><span>Tin tức<img src="./images/icon-3.png" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T"></a>
	                </div>
	                <h4><a href="#">Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 "></a>
	                </div>
	                <h4><a href="#">Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 </a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016."></a>
	                </div>
	                <h4><a href="#">Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016.</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội."></a>
	                </div>
	                <h4><a href="#">Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội.</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes V220 CDI chính thức ra mắt tại Việt Nam|Hotline: 0909222022"></a>
	                </div>
	                <h4><a href="#">Mercedes V220 CDI chính thức ra mắt tại Việt Nam|Hotline: 0909222022</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Giá bán Mercedes GLE tốt nhất | Mercedes Việt Nam | Hotline: 0909222022"></a>
	                </div>
	                <h4><a href="#">Giá bán Mercedes GLE tốt nhất | Mercedes Việt Nam | Hotline: 0909222022</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes-Benz Fashion Week tại Hà Nội, mở cửa tự do từ ngày 27-30/08/2015"></a>
	                </div>
	                <h4><a href="#">Mercedes-Benz Fashion Week tại Hà Nội, mở cửa tự do từ ngày 27-30/08/2015</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022"></a>
	                </div>
	                <h4><a href="#">Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes C-Class coupe sẽ là S-Class Coupe thu nhỏ"></a>
	                </div>
	                <h4><a href="#">Mercedes C-Class coupe sẽ là S-Class Coupe thu nhỏ</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015"></a>
	                </div>
	                <h4><a href="#">Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes-Benz Việt Nam nâng cấp toàn diện E-Class 2015"></a>
	                </div>
	                <h4><a href="#">Mercedes-Benz Việt Nam nâng cấp toàn diện E-Class 2015</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="#"><img src="./images/flace.png" alt="Mercedes G63AMG bên người đẹp"></a>
	                </div>
	                <h4><a href="#">Mercedes G63AMG bên người đẹp</a></h4>
	                <div class="clearfix"></div>
	            </div>
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

@section('content')
    <p>This is my body content.</p>
@endsection

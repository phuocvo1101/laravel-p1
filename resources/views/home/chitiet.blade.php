@extends('home.master')

@section('title', 'Chi tiết sản phẩm')

@section('sidebar')

    @include('home.sliderproduct')
@endsection
	@section('right-content')
	<!-- Right content -->
        <div class="col-dl-9 right-content">
            <div class="wrapper">
                <div class="link-other">
                    <div class="link-others">
                        <span class="name-car">{!! $product->name!!}</span><a rel="tabs1" href="javascript:void(0)">Đánh giá</a><a rel="tabs2" href="javascript:void(0)">Thông số kỹ thuật</a><a rel="tabs3" href="javascript:void(0)">Màu nội thất</a><a rel="tabs4" href="javascript:void(0)">Màu ngoại thất</a>
                    </div>
                </div>
                <script type="text/javascript">
                $(document).ready(function() {
                    $('.link-others a').click(function() {
                        var rel = $(this).attr('rel');
                        $('.link-others a').removeClass('active');
                        $(this).addClass('active');
                        $('.detail_news').hide();
                        $('#' + rel).show();
                    })
                })

                function opentab(tab) {
                    $('.detail_news').hide();
                    $('#' + tab).show();
                }
                </script>
                <!-- Main product content -->
                <div class="content">
                    <div>
                        <select class="slcOption" onchange="opentab(this.options[this.selectedIndex].value)">
                            <option value="tabs1">Đánh giá</option>
                            <option value="tabs2">Thông số kỹ thuật</option>
                            <option value="tabs3">Màu nội thất</option>
                            <option value="tabs4">Màu ngoại thất</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Tabs -->
                    <div class="detail_news" id="tabs1">
                        <h3 class="name_tab">Đánh giá</h3><img alt="" src="{{ asset('upload/'.$product->image) }}" style="height:288px;width:876px;">
                        <br>
                       {!! $product->content1!!}
					</div>
                    <div class="detail_news detail_tab" id="tabs2">
                        <h3 class="name_tab">Thông số kỹ thuật</h3>
                        {!! $product->content2!!}

                        </div>
                    <div class="detail_news detail_tab" id="tabs3">
                        <h3 class="name_tab">Màu nội thất</h3>
                        {!! $product->content3!!}
                        </div>
                    <div class="detail_news detail_tab" id="tabs4">
                        <h3 class="name_tab">Màu ngoại thất</h3>
                        {!! $product->content4!!}
                        </div>

                    <div class="clear"></div>
                    <!-- End tabs-->

                    <!-- Other product -->
                    <div class="product_other">
                        <h3 class="title-other"><span>Sản phẩm khác</span></h3>
                        @if($relatedProducts)
                            @foreach($relatedProducts as $item)
                            <div class="product">

                                <div class="products">

                                    <div class="product_img">
                                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="E200"></a>
                                    </div>
                                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{{ $item->name }}</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>

                                </div>

                            </div>
                            @endforeach
                        @endif
                        <div class="clearfix"></div>
                        <h3 class="title-other"><span>Bình luận</span></h3>
                        <div class="fb-comments" data-href="{{ url('/') }}" data-width="100%" data-numposts="5"></div>
                    </div>
                    <!-- End other product -->

                </div>
                <!-- End content product -->

                <!-- Facebook comment -->
                <!-- <script type="text/javascript" src="./single_product_files/plusone.js" gapi_processed="true"></script> -->
                <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=806635242786866";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

                <!-- Fix table on chi tiet -->
                <script type="text/javascript">
                    $(document).ready(function() {

                        $('div.detail_news > table').addClass('table-striped table-bordered');
                        $('div.detail_news > table').css('width', '100%');
                        $('div.detail_news > table > tbody > tr > td').removeAttr( 'style' );

                        // img-responsive for content
                        $('div.content').find("img").addClass('img-responsive');
                        $('div.content').find("img").removeAttr( 'style' );

                    });

                </script>
                <!-- End fix table -->
            </div>
        </div>
        <!-- End right content -->
	@endsection
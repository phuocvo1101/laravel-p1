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
                        <span class="name-car">{!! $product->name!!}</span>
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
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Tabs -->
                    <div class="detail_news" id="tabs1">
                        <h3 class="name_tab">{!! $product->title!!}</h3>
                        <br>
                        </hr >
                       {!! $product->content1!!}
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

                <!-- Color product -->
                <script type="text/javascript">
                    $(document).ready(function() {
                        script360();
                    });

                    function script360() {

                        //Button color click event handler
                        if ($('.button-360 .btn-color a').length > 0) {

                            $('.button-360 .btn-color a').click(function() {
                                var index = $(this).index();
                                $('.button-360 .btn-color a').removeClass('active');
                                $(this).addClass('active');
                                $('.wrap_product_car .product_360').removeClass('active');
                                $('.wrap_product_car .product_360').eq(index).addClass('active');
                            });
                        }
                    }

                    // Create Product 360 from img:
                    $tabs3 = $('div#tabs4');
                    if ($tabs3.find('img[src*="_btn.png"]').length > 0) {                        
                        $product_car = '';
                        $btn_car = '';
                        $a = '<h3 class="name_tab">Màu ngoại thất</h3><div id="wrap_360"><div class="camry-cntwrap pg-360"><div class="content-360 wrap_product_car" id="content_360">';
                        $b = '</div><div class="button-360"><button type="button" class="btn btn-success">Chọn màu</button><div class="btn-color left" id="color_wrap">';
                        $c = '<div class="clear"></div></div><div class="clear"></div></div></div></div><div class="clear"></div>';
                        //Find all product img.
                        $tabs3.find('img[src*="_p.png"]').each(function() {
                            if ($product_car == '') {
                                $product_car += '<div class="product_360 active">'+ this.outerHTML + '</div>';
                            } else {
                                $product_car += '<div class="product_360">'+ this.outerHTML+ '</div>';
                            }

                        });
                        //console.log($product_car);

                        // Create Button 360 from img:
                        $tabs3.find('img[src*="_btn.png"]').each(function() {
                            // console.log(this.outerHTML);
                            if ($btn_car == '') {
                                $btn_car += '<a href="javascript: void(0)" class="active">'+ this.outerHTML+                
                                $(this).attr('alt')+
                                '</a>';
                            } else {
                                $btn_car += '<a href="javascript: void(0)" >'+this.outerHTML+                
                                $(this).attr('alt')+
                                '</a>';
                            }
                            //console.log($btn_car);     

                        });    

                        //Put to content_360:
                        $tabs3.empty();
                        $tabs3.append($a+$product_car+$b+$btn_car+$c);
                    }
                    
                </script>
                <!-- End color product -->
            </div>
        </div>
        <!-- End right content -->
	@endsection
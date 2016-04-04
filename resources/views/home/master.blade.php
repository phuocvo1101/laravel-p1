<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Toyota - @yield('title')</title>

    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
    <link href="{{ url('home/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('home/css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ url('home/css/style.css') }}" rel="stylesheet">

	<!-- global js -->
    {!! Html::script('/home/js/jquery.min.js') !!}
    {!! Html::script('/home/js/jquery.flexslider.js') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div id="overlay" class="overlay"></div>
    <!-- Header -->
    @include('home.nav')
    <!-- End header -->

    <!-- Start slider -->
	@include('home.slider')
    <!-- End slider. -->
    <section>
        <div class="container toplink clearfix">
            <ul>
                <li><a href="#">Đăng ký lái thử</a></li>
                <li><a href="#">Mua xe trả góp</a></li>
                <li><a href="#">Tài chính &amp; Bảo hiểm</a></li>
                <li><a href="#">Bảng giá xe</a></li>
                <li><a href="#">Chứng nhận xe cũ chính hãng</a></li>
            </ul>            
            @yield('infomaster')
        </div>
    </section>
    <!-- Content center -->
    <section>
        <div class="container clearfix content-center">
            <div class="row-data">
                <!-- Left content -->
                @include('home.leftMenu')
                <!-- End left content -->

                <!-- Right content -->
                @yield('right-content')
                <!-- End right content -->
                <div class="clearfix"></div>
            </div>

            <!-- Tin tuc -->
                @include('home.tintuchome')
            <!-- End tin tuc -->

            <!-- Tin khuyen mai -->
                @include('home.tinkhuyenmai')
            <!-- End tin khuyen mai -->
        </div>
    </section>

    <script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>

    <!-- End content center -->

    <!-- Infor footer -->
        @include('home.footer')
    <!-- End footer -->
</body>
</html>
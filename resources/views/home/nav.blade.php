<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
        <div class="container header">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="{{ asset('home/images/logo1.png') }}" alt="logo"></a>
            </div>
            <nav class="navbar-collapse bs-navbar-collapse navmenus collapse" aria-expanded="false" style="height: 1px;">
                <div class="hotline">
                    <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
                </div>
                <h2 class="supporth"><span>{{$infors['tuvan']}}</span><br>{{$infors['name']}}</h2>
                <div class="clearfix"></div>
                <div class="navmenuss">
                    <ul class="nav navbar-nav navbar-right nav-menus">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="{!! URL::route('gioithieu') !!}">Giới thiệu</a></li>
                        <li><a href="{!! URL::route('sanphammoi') !!}">Sản Phẩm</a></li>
                        <li><a href="{!! URL::route('tintuc') !!}">Tin tức</a></li>
                        <li><a href="{!! URL::route('khuyenmai') !!}">Khuyến mãi</a></li>
                        <li><a href="{!! URL::route('getLienhe') !!}">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
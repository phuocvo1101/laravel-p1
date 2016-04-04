<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
        <div class="container header">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="<?php echo e(asset('home/images/logo.png')); ?>" alt="logo"></a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navmenus">
                <div class="hotline">
                    <h2><?php echo e($infors['mobile']); ?></h2> Hỗ trợ 24/7
                </div>
                <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br><?php echo e($infors['name']); ?></h2>
                <div class="clearfix"></div>
                <div class="navmenuss">
                    <ul class="nav navbar-nav navbar-right nav-menus">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/lienhe">Giới thiệu</a></li>
                        <li><a href="/sanpham">Xe mới</a></li>
                        <li><a href="/sanpham">Xe đã qua sử dụng</a></li>
                        <li><a href="/lienhe">Khuyến mãi</a></li>
                        <li><a href="/tintuc">Tin tức</a></li>
                        <li><a href="/lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
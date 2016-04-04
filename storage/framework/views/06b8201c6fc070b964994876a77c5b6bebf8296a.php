<?php $__env->startSection('title', 'Chi tiết sản phẩm'); ?>
	<?php $__env->startSection('right-content'); ?>
	<!-- Right content -->
        <div class="col-dl-9 right-content">
            <div class="wrapper">
                <div class="link-other">
                    <div class="link-others">
                        <span class="name-car">E200 Edition E</span><a rel="tabs1" href="javascript:void(0)">Đánh giá</a><a rel="tabs2" href="javascript:void(0)">Thông số kỹ thuật</a><a rel="tabs3" href="javascript:void(0)">Màu nội thất</a><a rel="tabs4" href="javascript:void(0)">Màu ngoại thất</a>
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
                        <h3 class="name_tab">Đánh giá</h3><img alt="" src="<?php echo e(asset('upload/'.$product->image)); ?>" style="height:288px;width:876px;">
                        <br>
                       <?php echo $product->content1; ?>


                    <div class="detail_news detail_tab" id="tabs2">
                        <h3 class="name_tab">Thông số kỹ thuật</h3>
                        <?php echo $product->content2; ?>


                        </div>
                    <div class="detail_news detail_tab" id="tabs3">
                        <h3 class="name_tab">Màu nội thất</h3>
                        <?php echo $product->content3; ?>

                        </div>
                    <div class="detail_news detail_tab" id="tabs4">
                        <h3 class="name_tab">Màu ngoại thất</h3>
                        <?php echo $product->content4; ?>

                        </div>

                    <div class="clear"></div>
                    <!-- End tabs-->

                    <!-- Other product -->
                    <div class="product_other">
                        <h3 class="title-other"><span>Sản phẩm khác</span></h3>
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
                                    <a href="/chitiet"><img src="./images/flace.png" alt="E250 AMG"></a>
                                </div>
                                <h4><a href="/chitiet">E250 AMG</a></h4>
                                <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.329.000.000 VNĐ</span><span class="spleft spright"></span></div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="products">
                                <div class="product_img">
                                    <a href="/chitiet"><img src="./images/flace.png" alt="E400 "></a>
                                </div>
                                <h4><a href="/chitiet">E400 </a></h4>
                                <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.879.000.000 VNĐ</span><span class="spleft spright"></span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <h3 class="title-other"><span>Bình luận</span></h3>
                        <div class="fb-comments" data-href="http://laravel1.local" data-width="100%" data-numposts="5"></div>
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
            </div>
        </div>
        <!-- End right content -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
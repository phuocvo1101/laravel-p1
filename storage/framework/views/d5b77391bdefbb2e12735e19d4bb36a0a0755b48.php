<div class="row-data">
                <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Chường trình khuyến mãi<img src="<?php echo e(asset('home/images/icon-3.png')); ?>" alt="danh muc"></span></h3>
                <div class="clearfix"></div>

                    <div class="home-news">
                    <?php if($tinkm): ?>
                        <?php foreach($tinkm as $item): ?>
                        <div class="news-content clearfix">
                            <div class="news-images">
                                <a href="/tintuc"><img src="<?php echo e(asset('upload/'.$item->image)); ?>" alt="Giá xe Toyota GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022"></a>
                            </div>
                            <h5><a href="/tintuc" title="<?php echo $item->name; ?>"><?php echo $item->name; ?></a></h5>
                            <div class="clearfix"></div>
                        </div>
                         <?php endforeach; ?>
                    <?php endif; ?>
                        <div class="clearfix"></div>

                    </div>
                    
            </div>
 <div class="row-data">
                <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Tin tức - Sự kiện<img src="<?php echo e(asset('home/images/icon-3.png')); ?>" alt="danh muc"></span></h3>
                <div class="clearfix"></div>
                <div class="home-news">
                 <?php if($news): ?>
                    <?php foreach($news as $item): ?>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="<?php echo e(asset('upload/'.$item->image)); ?>" alt="Toyota C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T"></a>
                        </div>
                        <h5><a href="/tintuc" title="<?php echo $item->name; ?>"><?php echo $item->name; ?></a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                    <div class="clearfix"></div>
                </div>
            </div>
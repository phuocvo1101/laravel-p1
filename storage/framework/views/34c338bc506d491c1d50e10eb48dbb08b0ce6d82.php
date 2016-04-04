<div class="col-dl-3 left-content">
                    <h3 class="titlel"><span>Các dòng xe<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                    <!-- Main menu -->
                    <?php  $menu_level_1 = DB::table('cates')->select('id','name','alias','parent_id')->where('parent_id', 0)->get(); ?>
                    <ul class="mainmenu">
                        <?php foreach($menu_level_1 as $item1): ?>
                            <li><a href="/chitiet"><?php echo e($item1->name); ?></a>
                                <ul>
                                    <?php $menu_level_2 = DB::table('cates')->select('id','name','alias','parent_id')->where('parent_id', $item1->id)->get(); ?>
                                    <?php foreach($menu_level_2 as $item2): ?>
                                    <li><a href="/chitiet"><?php echo e($item2->name); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>  
                    </ul>
                    <!-- End main menu -->
                </div>
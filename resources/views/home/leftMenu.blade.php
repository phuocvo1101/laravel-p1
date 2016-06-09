<div class="col-dl-3 left-content">
                    <h3 class="titlel"><span>Các dòng xe<img src="{!! asset('home/images/icon-3.png')!!}" alt="danh muc"></span></h3>
                    <!-- Mobile menu -->
                    <?php  $menu_level_1 = DB::table('cates')->select('id','name','alias','parent_id', 'order')->where('parent_id', 0)->orderBy('order', 'asc')->get();
                    ?>
                    <div class="left-menus">
                        <ul class="left-menu">
                            @foreach($menu_level_1 as $item1)
                                <li><a href="{!! URL::route('loaisanpham', $item1->id) !!}">{{ $item1->name }}</a>
                                    <ul class="left-menu def2">
                                        <?php $product = DB::table('products')->select('id','name','alias')->where('cate_id', $item1->id)->get(); ?>
                                        @foreach ($product as $item2)
                                        <li><a href="{!! URL::route('detailProduct', $item2->id.'-'.$item2->alias) !!}">{{ $item2->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach  
                        </ul>
                        <button type="button" class="navbar-button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- End mobile menu -->
                    <script type="text/javascript">
                        $(window).load(function(){
                            $('.flexslider').flexslider({
                                animation: "slide",
                                start: function(slider){
                                    $('body').removeClass('loading');
                                }
                            });
                        });
                        $(document).ready(function(){
                            $('.navbar-button').click(function(){
                                if($('.left-menus').hasClass('active')){
                                    $('.left-menus').removeClass('active');
                                }else{
                                    $('.left-menus').addClass('active');
                                }
                            })
                        });
                    </script>
                    <!-- Main menu -->
                    
                    <ul class="mainmenu">
                        @foreach($menu_level_1 as $item1)
                            <li><a href="{!! URL::route('loaisanpham', $item1->id) !!}">{{ $item1->name }}</a>
                                <ul>
                                    <?php $product = DB::table('products')->select('id','name','alias')->where('cate_id', $item1->id)->get(); ?>
                                    @foreach ($product as $item2)
                                    <li><a href="{!! URL::route('detailProduct', $item2->id.'-'.$item2->alias) !!}">{{ $item2->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach  
                    </ul>
                    <!-- End main menu -->
                </div>
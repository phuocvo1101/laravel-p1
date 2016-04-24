<section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-dl-9">
                    <div id="slider" class="flexslider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            
                        </div>
                        <ol class="flex-control-nav flex-control-paging"></ol>
                        <ul class="flex-direction-nav">
                            <li><a class="flex-prev" href="#">Previous</a></li>
                            <li><a class="flex-next" href="#">Next</a></li>
                        </ul>
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1756px, 0px, 0px);">
                                @if(!empty($img_detail))
                                    @foreach($img_detail as $img)
                                        <li class="clone" aria-hidden="true" style="width: 878px; height: 389px; float: left; display: block;">
                                            <img src="{{ asset('upload/detail/'.$img->image) }}" alt="" draggable="false">
                                        </li>
                                    @endforeach
                                @else
                                    <li class="clone" aria-hidden="true" style="width: 878px; height: 389px; float: left; display: block;">
                                            <img src="{{ asset('upload/'.$product->image) }}" alt="" draggable="false">
                                    </li>
                                @endif
                                
                            </ul>
                        </div>
                            <ol class="flex-control-nav flex-control-paging">
                                <li><a class="">1</a></li><li><a class="flex-active">2</a></li><li><a>3</a></li>
                            </ol>
                            <ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-dl-3">
                    <div class="detail-inf">
                        <h2 class="name-detail">{!! $product->name!!}</h2>
                        <h3 class="price-detail">Giá: {!! number_format($product->price,0,',','.') !!} VNĐ</h3>
                        <p>{!! $product->intro!!}</p>
                        <div class="tuvan">
                            <h2 class="supporth"><span>{{$infors['tuvan']}}</span><br>{{$infors['name']}}</h2>
                            <div class="hotline">
                                <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
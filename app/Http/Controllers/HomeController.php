<?php

namespace App\Http\Controllers;
use View;
use App\Http\Requests;
//use Illuminate\Http\Request;
use Request;
use DB, Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $pag = 12;
    public function __construct()
    {
       // $this->middleware('auth');
        $infors = array(
                        'name' => "" ,
                        'tuvan' => "Tư vấn bán hàng" ,
                        'mobile' => "0933 63 1212",
                        'cty' => "TOYOTA HIROSHIMA TÂN CẢNG - HT",
                        'email' => "toyotahcm.tancang@gmail.com",
                        'addr' =>  "220 Bis Điện Biên Phủ (Nguyễn Hữu Cảnh nối dài), P.22, Q.Bình Thạnh, TPHCM"                   
                        );
        $news = DB::table('news')->select('id','name','image')->where('cate_news_id', 1)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $tinkm = DB::table('news')->select('id','name','image')->where('cate_news_id', 2)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        View::share ( 'infors', $infors );
        View::share ( 'news', $news );
        View::share ( 'tinkm', $tinkm );        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variable1="I am Data";
        $promotion_product =array();
        $vios_product = DB::table('products')
            ->select('id','name','price','image')
            ->where('promotion_product', 1)
            ->where('cate_id', 4)
            ->orderBy('id', 'desc')->skip(0)->take(3)->get();

        $inova_product = DB::table('products')
            ->select('id','name','price','image')
            ->where('promotion_product', 1)
            ->where('cate_id', 7)
            ->orderBy('id', 'desc')->skip(0)->take(3)->get();
       
        $fortuner_product = DB::table('products')
            ->select('id','name','price','image')
            ->where('promotion_product', 1)
            ->where('cate_id', 5)
            ->orderBy('id', 'desc')->skip(0)->take(3)->get();
         
        if($vios_product != null){
            foreach ($vios_product as $value) {
                $promotion_product[] = $value;
            }
        }
        if($inova_product != null){
            foreach ($inova_product as $value) {
                $promotion_product[] = $value;
            }
        }

        if($fortuner_product != null){
            foreach ($fortuner_product as $value) {
                $promotion_product[] = $value;
            }
        }

        $soluong = count($promotion_product);
        $diff_product = DB::table('products')
        ->select('id','name','price','image')
        ->where('promotion_product', 1)
        ->whereNotIn('cate_id', [4,7,5])
        ->orderBy('id', 'desc')->skip(0)->take(12 - $soluong)->get();
        if($diff_product != null){
            foreach ($diff_product as $value) {
                $promotion_product[] = $value;
            }
        }
        $import_product = DB::table('products')->select('id','name','price','image')->where('import_product', 1)->orderBy('id', 'desc')->skip(0)->take(9)->get();
        $old_product = DB::table('products')->select('id','name','price','image')->where('old_product', 1)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        
        return view('home.index',compact('variable1','promotion_product','import_product','old_product'));
    }

    public function detailProduct ($id)
    {
        $product = DB::table('products')->select('*')->where('id', $id)->first();
        $relatedProducts = DB::table('products')->select('id','name','price','image')->where('cate_id',$product->cate_id)->where('id','<>',$product->id)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        $img_detail = DB::table('product_images')->select('id','image')->where('product_id',$id)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        return view('home.chitiet',compact('product','relatedProducts','img_detail'));
    }

    public function loaisanpham($id) 
    {
        $cate = DB::table('cates')->select('id','name')->where('id', $id)->first();
        $loai = $cate->name;
        $cate_products = DB::table('products')->select('id','name','price','image')->where('cate_id', $id)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.sanpham',compact('loai','cate_products'));
    }

    public function newProduct ()
    {
        $loai = 'xe mới';
        $cate_products = DB::table('products')->select('id','name','price','image')->where('new_product', 1)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.sanpham',compact('loai','cate_products'));
    }

    public function oldProduct ()
    {
        $loai = 'xe đã qua sử dụng';
        $cate_products = DB::table('products')->select('id','name','price','image')->where('old_product', 1)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.sanpham',compact('loai','cate_products'));
    }

    public function tintuc ()
    {
        $loai = 'Tin tức';
        $news = DB::table('news')->select('id','name','alias','image')->where('cate_news_id', 1)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.tintuc',compact('loai','news'));
    }

    public function khuyenmai ()
    {
        $loai = 'Khuyến Mãi';
        $news = DB::table('news')->select('id','name','alias','image')->where('cate_news_id', 2)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.tintuc',compact('loai','news'));
    }

    public function chitiettintuc ($id)
    {
        
        $new = DB::table('news')->select('*')->where('id', $id)->first();
        if($new->cate_news_id == 1){
            $loai = 'Tin tức - Sự Kiện';
        }elseif ($new->cate_news_id == 2) {
             $loai = 'Tin tức - Khuyến Mãi';
        }
        return view('home.chitiettintuc',compact('new','loai'));
    }

    public function gioithieu()
    {
        $loai = 'Giới thiệu';
        $new = DB::table('news')->select('*')->where('cate_news_id', 3)->first();
        return view('home.gioithieu',compact('loai','new'));
    }
    public function getLienhe () 
    {
        return view('home.lienhe');
    }
    public function postLienhe (Request $request)
    {
        $data = [
                    'hoten'=>Request::input('txtName'),
                    'email'=>Request::input('txtEmail'),
                    'phone'=>Request::input('txtPhone'),
                    'noidung'=>Request::input('txtContent')
                ];
        Mail::send('emails.blanks',$data, function($m) {
            $m->from(Request::input('txtEmail'), 'Phuoc Vo');
            $m->to('phuoclaravel@gmail.com','Admin laravel')->subject('Tin nhắn Khách Hàng Mail xe Oto');

        });
        echo "<script>
                alert('Cảm ơn bạn đã gửi tin. Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất!');
                window.location = '".url('/')."'
            </script>";
    }

}

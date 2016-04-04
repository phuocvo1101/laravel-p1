<?php

namespace App\Http\Controllers;
use View;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
        $infors = array(
                        'name' => "Mr. Hiếu" ,
                        'mobile' => "093456.4161",
                        'cty' => "Toyota Tân Cảng",
                        'email' => "toyotahcm.tancang@gmail.com",
                        'addr' =>  "220Bis Ðiện Biên Phủ, P.22, Q. Bình Thạnh, Tp. HCM"                   
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
        $promotion_product = DB::table('products')->select('id','name','price','image')->where('promotion_product', 1)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        $import_product = DB::table('products')->select('id','name','price','image')->where('import_product', 1)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        $old_product = DB::table('products')->select('id','name','price','image')->where('old_product', 1)->orderBy('id', 'desc')->skip(0)->take(6)->get();
        
        return view('home.index',compact('variable1','promotion_product','import_product','old_product'));
    }

    public function detailProduct ($id)
    {
        $product = DB::table('products')->select('*')->where('id', $id)->first();
        return view('home.chitiet',compact('product'));
    }

    

}

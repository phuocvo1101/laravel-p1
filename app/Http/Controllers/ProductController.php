<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
// use for ajax request
use Request;

use App\Http\Requests;
use App\Cate;
use App\Product;
use App\ProductImage;
//include Input 5.2
use Illuminate\Support\Facades\Input;
// include File
use File;
use App\Http\Requests\ProductRequest;
use Auth;


class ProductController extends Controller
{
	public function getList() {
		$data = Product::select('id','name','price','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
		return view('admin.product.list',compact('data'));
	}
    public function getAdd() {
    	$cate = Cate::select('name','id','parent_id')->get()->toArray();
    	return view('admin.product.add',compact('cate'));
    }
    public function postAdd (ProductRequest $product_request) {
    	//get name image use getClientOrginalName()
    	$file_name = $product_request->file('fImages')->getClientOriginalName();
    	$file_name = str_random(20).$file_name;
    	
    	$product = new Product();
    	$product->name = $product_request->txtName;
    	$product->alias = $product_request->txtPrice;
    	$product->price = $product_request->txtPrice;
    	$product->intro = $product_request->txtIntro;
    	$product->content1 = $product_request->txtContent1;
        $product->content2 = $product_request->txtContent2;
        $product->content3 = $product_request->txtContent3;
        $product->content4 = $product_request->txtContent4;
    	$product->image = $file_name;
    	$product->keywords = $product_request->txtKeywords;
    	$product->description = $product_request->txtDescription;
    	$product->user_id = Auth::user()->id;
    	$product->cate_id = $product_request->sltParent;
    	$product->new_product = $product_request->newPro == 'on' ? 1 : 0;
    	$product->old_product = $product_request->oldPro == 'on' ? 1 : 0;
    	$product->promotion_product = $product_request->importPro == 'on' ? 1 : 0;
    	$product->import_product = $product_request->promotionPro == 'on' ? 1 : 0;
    	$product_request->file('fImages')->move('upload/',$file_name);
    	$product->save();
    	$product_id = $product->id;
    	if (Input::hasFile('fProductDetail')) {
    		foreach (Input::file('fProductDetail') as $file) {
    			$product_img = new ProductImage();
    			if (isset($file)) {
    				$file_name_detail = str_random(20).$file->getClientOriginalName();
    				$product_img->image = $file_name_detail;
    				$product_img->product_id = $product_id;
    				$file->move('upload/detail/',$file_name_detail);
    				$product_img->save();
    			}

    		}
    	}
    	return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'success !! Complete Add Product']);

    }
    public function getDelete ($id) {
    	$product_detail = Product::find($id)->pImages;

		foreach ($product_detail as $value) {
			if(!empty($value)) {
				File::delete('upload/detail/'.$value["image"]);
				$id_img = $value["id"];
				$ProductImage = ProductImage::find($id_img)->delete();
			}
		}
    	$product = Product::find($id);
    	if(!empty($product["image"])) {
    		File::delete('upload/'.$product["image"]);
    	}
    	$product->delete($id);
    	return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'success !! Complete Delete Product']);
    }

    public function getEdit ($id) {
    	$cate = Cate::select('id','name','parent_id')->get()->toArray();
    	$product = Product::find($id)->toArray();
    	// echo "<pre>"; print_r($product);die();
    	$image_detail = Product::find($id)->pImages;
    	return view('admin.product.edit',compact('cate','product','image_detail'));
    }
    public function postEdit (Request $request,$id) {
    	$product = Product::find($id);
    	$product->name = Request::Input('txtName');
    	$product->alias = changeTitle(Request::Input('txtName')) ;
    	$product->price = Request::Input('txtPrice');
    	$product->intro = Request::Input('txtIntro');
    	$product->content1 = Request::Input('txtContent1');
        $product->content2 = Request::Input('txtContent2');
        $product->content3 = Request::Input('txtContent3');
        $product->content4 = Request::Input('txtContent4');
    	$product->keywords = Request::Input('txtKeywords');
    	$product->description = Request::Input('txtDescription');
    	$product->user_id = Auth::user()->id;
    	$product->cate_id = Request::Input('sltParent');
    	$product->new_product = Request::Input('newPro') == 'on' ? 1 : 0;
    	$product->old_product = Request::Input('oldPro') == 'on' ? 1 : 0;
    	$product->promotion_product = Request::Input('promotionPro') == 'on' ? 1 : 0;
    	$product->import_product = Request::Input('importPro') == 'on' ? 1 : 0;
    	if (!empty(Request::File('fImages'))) {
    		$img_current = 'upload/'.Request::Input('img_current');
    		if(File::exists($img_current)) {
    			File::delete($img_current);
    		}
    		$product_img = str_random(20).(Request::File('fImages')->getClientOriginalName());
    		Request::File('fImages')->move('upload/',$product_img);
    		$product->image = $product_img;
    	}
    	$product-> save();
    	if(!empty(Request::file('fProductDetail'))) {
   			$image_details = Request::file('fProductDetail');
   			foreach ($image_details as $key => $imgDetail) {
   				$ProductImage = new ProductImage;
   				if(isset($imgDetail)) {
   					$file_name = str_random(20).($imgDetail->getClientOriginalName());
	   				$ProductImage->image = $file_name;
	   				$ProductImage->product_id = $id;
	   				$imgDetail->move('upload/detail/',$file_name);
   				}
   				$ProductImage->save();
   				
   			}
   		}
    	return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'success !! Complete Update Product']);

    }

    public function getDelImg ($id) {
    	if(Request::ajax()) {
    		$idHinh = Request::get('idHinh');
    		$image_detail = ProductImage::find($idHinh);
    		if(!empty($image_detail)) {
    			$img = 'upload/detail/'.$image_detail->image;
    			if(File::exists($img)) {
    				File::delete($img);
    			}
    			$image_detail->delete();
    		}
    		return "OKE";
    	}
    }
}

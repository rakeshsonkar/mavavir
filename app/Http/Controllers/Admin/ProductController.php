<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Carbon\Carbon;
use App\Exports\ExportProduct;
use Session;
use Validator;

class ProductController extends Controller
{
    public function index()
    {
        $datacountlists = \App\Models\Product::get();
        $product        = \App\Models\Product::select('products.*', 'categories.name AS category_name')
						->leftJoin('categories', 'categories.id', '=', 'products.category_id')
						->paginate(10);

        return view('admin.product.index', compact(['product', 'datacountlists']));
    }


    public function create(Request $request)
    {
        $categories = \App\Models\Category::select(\DB::raw("id,name AS name"))
                     ->where('status', 1)
                     ->orderBy("name")
                     ->get();
        return view('admin.product.create', compact(['categories']));
    }

	public function store(Request $request)
    {	
        $v = Validator::make($request->all(), [
											'name' 			 	=> 'required',
											//'meta_description'	=> 'required',
											'meta_keywords' 	=> 'required',
											'image'			 	=> 'required',
											]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {	
			try 
			{
                $target            		= 'storage/uploads/product/';
				$productImage     		= $request->file('image');                
				if(!empty($productImage))
				{
					$headerImageName	= $productImage->getClientOriginalName();
					$ext1				= $productImage->getClientOriginalExtension();
					$temp1				= explode(".",$headerImageName);					
					$newHeaderLogo		= 'image'.round(microtime(true)).".".end($temp1);				
					$headerTarget		= 'storage/uploads/product/'.$newHeaderLogo;
					$productImage->move($target,$newHeaderLogo);	
				} 
				else
				{
					$headerTarget			= '';
				}
                $product                 	= new \App\Models\Product();
				$product->name 		  		= $request['name'];
               // $product->meta_title 		= $request['meta_title'];
				$product->meta_description 	= $request['meta_title'];
				$product->meta_keywords 	= $request['meta_keywords'];
				$product->description 		= $request['description'];
				$product->status 	      	= $request['status'];		
                $product->image	      		= $headerTarget;
				$product->save();
				Session::flash('message', 'Product Created Successfully  !');
				return redirect('admin/product');
			} 
			catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/product/create')->withInput($request->input())->withErrors(array('message' => $message));
			}
        }   
    }

	public function edit(Request $request, $id='')
    {
        $product 		   = \App\Models\Product::find($id);
		$categories = \App\Models\Category::select(\DB::raw("id,name AS name"))
                     ->where('status', 1)
                     ->whereNull('parent_id')
                     ->orderBy("name")
                     ->get();

		$brands		= \App\Models\Brand::select('*')->where('status', '1')->get(); 
        return view('admin.product.edit', compact(['product', 'categories', 'brands']));
    }

	public function update(Request $request,$id)
	{	
		$v = Validator::make($request->all(), [
											'name' 				=> 'required',
											]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
		{	
			try 
			{
				$product	= \App\Models\Product::where('id',$id)->first();
				$targetUser	= 'storage/uploads/product/';
				$image		= $request->file('image');    
				if(!empty($image))
				{				  
					$headerImageName	= $image->getClientOriginalName();
					$ext1				= $image->getClientOriginalExtension();				
					$temp1				= explode(".",$headerImageName);				 
					$newHeaderLogo		= 'image'.round(microtime(true)).".".end($temp1);				 
					$headerTarget		= $targetUser.$newHeaderLogo;
					$image->move($targetUser,$newHeaderLogo);
					$product->image 	= $headerTarget;
				}
				$product->category_id 		= $request['sub_category'];
				$product->brand_id 		  	= $request['brand_id'];
				$product->name 		  		= $request['name'];
				$product->price 			= $request['price'];
				$product->total_stock 		= $request['total_stock'];
                $product->meta_title 		= $request['meta_title'];
				$product->meta_description 	= $request['meta_description'];
				$product->meta_keywords 	= $request['meta_keywords'];
				$product->description 		= $request['description'];
				$product->status 	      	= $request['status'];	
				$product->save();	
				Session::flash('message', 'Product Updated Successfully!');

				return back();
			} 
			catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/product/edit/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
			}

		}
		
	}

    public function delete(Request $request, $id='')
    {
        $ids 	= $request->mul_del;
        \App\Models\Product::whereIn('id',$ids)->delete();
        Session::flash('message', 'Product Deleted Successfully! ');
        return redirect('admin/product');
    }

    public function view(Request $request, $id='')
    {
		$product        = \App\Models\Product::select('products.*', 'categories.name AS category_name', 'brands.name AS brand_name')
						->leftJoin('categories', 'categories.id', '=', 'products.category_id')
						->leftJoin('brands', 'brands.id', '=', 'products.brand_id')
						->find($id);
        return view('admin.product.view', compact(['product']));
    }

	public function getSubCategory(Request $request)
    {
        $data['subCategory'] = \App\Models\SubCategory::where("category_id",$request->category_id)
                                ->get(["name","id"]);
        return response()->json($data);
    }
	
	public function exportProduct(Request $request)
	{
        return Excel::download(new ExportProduct, 'product.xlsx');
    }
	
	
    
}

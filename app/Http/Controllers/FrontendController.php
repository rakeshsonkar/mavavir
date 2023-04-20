<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\SubCategory;
use \App\Models\Product;
use \App\Models\Brand;
use \App\Models\CmsPage;
use Hash;
use Validator;
use Session;

class FrontendController extends Controller
{
    //
    public function index()
    {  
        
        return view('frontend.index');
    }
    public function aboutus()
    {  
        $data['about'] = CmsPage::where("id",1)->get();
        return view('frontend.about',$data);
    }

    public function certification()
    {  
       
        return view('frontend.certification');
    }
    public function infrastructure()
    {  
        $data['infrastructure'] = CmsPage::where("id",12)->get();
        // echo "<pre>";
        // print_r($data['infrastructure']);
        // die();
        return view('frontend.infrastructure',$data);
    }
    public function brands()
    {  
        $data['brandData']=Brand::where("status",1)->get();
       
        return view('frontend.brands',$data);
    }
    public function gallery()
    {  
       
        return view('frontend.gallery');
    }
    public function recipes()
    {  
       
        return view('frontend.recipes');
    }
    public function contact()
    {  
       
        return view('frontend.contact');
    }
    public function blog()
    {  
       
        return view('frontend.blogs');
    }

    public function menugetcategory(){
        $data=Category::get();
        return response()->json(['success'=>'true','message'=>'','record'=>$data], 200);
    }
    public function menugetsubcategory(Request $request){
        
        $data=SubCategory::where("id",$request->id)->get();
        return response()->json(['success'=>'true','message'=>'','record'=>$data], 200);
    }
    public function menugetproduct(Request $request){
        $data=Product::where("sub_category_id",$request->id)->get();
        return response()->json(['success'=>'true','message'=>'','record'=>$data], 200);
    }
    public function menugetproductLoad(Request $request){
        $pid = $request->query('pid');
        return view('frontend.product-details');
    }
   
} 
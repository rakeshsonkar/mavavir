<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;

class SeoController extends Controller
{
    public function index()
    {
        $datacountlists = \App\Models\Seo::where('status','1')->get();
        $seo = \App\Models\Seo::select(['*'])
		->where('status', '1')
		->paginate(10);
        return view('admin.seo.index', compact(['seo', 'datacountlists']));
    }

    public function create(Request $request)
    {
        return view('admin.seo.create');
    }

	public function store(Request $request)
    {	
        $v = Validator::make($request->all(), [
											'title' 			 	=> 'required',
											]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {	
			try 
			{
                $seo                 		      = new \App\Models\Seo();
				$seo->title 		  		      = $request['title'];
                $seo->page_url 		  		      = $request['page_url'];
                $seo->keyword 		  		      = $request['keyword'];
				$seo->script 		  		      = $request['script'];
				$seo->description 		  		  = $request['description'];
				$seo->status 	      		      = $request['status'];		
				$seo->save();
				Session::flash('message', 'Seo Created Successfully  !');
				return redirect('admin/seo');
			} 
			catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/seo/create')->withInput($request->input())->withErrors(array('message' => $message));
			}
        }   
    }

	public function edit(Request $request, $id='')
    {
        $seo = \App\Models\Seo::find($id); 
        return view('admin.seo.edit', compact(['seo']));
    }

	public function update(Request $request,$id)
	{	
		$v = Validator::make($request->all(), [
											'title' 				=> 'required',
											]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
		{	
			try 
			{
				$seo	                    = \App\Models\Seo::where('id',$id)->first();
				$seo->title 		  		= $request['title'];
                $seo->page_url 		  		= $request['page_url'];
                $seo->keyword 		  		= $request['keyword'];
				$seo->script 		  		= $request['script'];
				$seo->description 		    = $request['description'];
				$seo->status 	            = $request['status'];	
				$seo->save();	
				Session::flash('message', 'Seo Updated Successfully!');

				return back();
			} 
			catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/seo/edit/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
			}

		}
		
	}

    public function view(Request $request, $id='')
    {
        $seo = \App\Models\Seo::find($id);
        return view('admin.seo.view', compact(['seo']));
    }

    public function delete(Request $request, $id='')
    {
        $ids 	= $request->mul_del;
        \App\Models\Seo::whereIn('id',$ids)->delete();
        Session::flash('message', 'Seo Deleted Successfully! ');
        return redirect('admin/seo');
    }

	
}

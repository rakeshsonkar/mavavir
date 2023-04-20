<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;

class FaqController extends Controller
{
    public function index()
    {
        $datacountlists = \App\Models\Faq::get();
        $faq            = \App\Models\Faq::select('*')->paginate(10);
        return view('admin.faq.index', compact(['datacountlists','faq']));
    }

    public function create(Request $request)
    {
        return view('admin.faq.create');
    }

	public function store(Request $request)
    {	
        $v = Validator::make($request->all(), [
											'title' 		=> 'required',
											]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {	
			try 
			{
                $faq                = new \App\Models\Faq();
                $faq->title         = $request['title'];
                $faq->en_title 		= $request['en_title'];
                $faq->content 		= $request['content'];
                $faq->en_content 	= $request['en_content'];
                $faq->status 	    = $request['status'];
                $faq->save();
                Session::flash('message', 'Faq Created Successfully  !');
                return redirect('admin/faq');
			} 
			catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/faq/create')->withInput($request->input())->withErrors(array('message' => $message));
			}
        }   
    }

	public function edit(Request $request, $id='')
    {
        $faq = \App\Models\Faq::find($id); 
        return view('admin.faq.edit', compact(['faq']));
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
				$faq	            = \App\Models\Faq::where('id',$id)->first();
				$faq->title         = $request['title'];
                $faq->en_title 		= $request['en_title'];
                $faq->content 		= $request['content'];
                $faq->en_content 	= $request['en_content'];
                $faq->status 	    = $request['status'];		
				$faq->save();	
				Session::flash('message', 'Faq Updated Successfully!');

				return back();
			} 
			catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/faq/edit/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
			}
		}
		
	}

    public function view(Request $request, $id='')
    {
        $faq = \App\Models\Faq::find($id);
        return view('admin.faq.view', compact(['faq']));
    }

    public function delete(Request $request, $id='')
    {
        $ids 	= $request->mul_del;
        \App\Models\Faq::whereIn('id',$ids)->delete();
        Session::flash('message', 'Faq Deleted Successfully! ');
        return redirect('admin/faq');
    }
}

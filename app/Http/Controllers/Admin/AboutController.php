<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;

class AboutController extends Controller
{
    public function index()
    {
        $datacountlists = \App\Models\Aboutus::get();
        $about_us = \App\Models\Aboutus::select('*')->paginate('10');
        return view('admin.about_us.index', compact(['datacountlists', 'about_us']));
    }

    public function edit(Request $request, $id='')
    {
        $about_us = \App\Models\Aboutus::find($id);
        return view('admin.about_us.edit', compact(['about_us']));
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(),[
                                            'title' => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {
            try
            {
                $about_us              = \App\Models\Aboutus::find($id);
                $about_us->title       = $request['title'];
                $about_us->description = $request['description'];
                $targetUser		       ='storage/uploads/users/';
				$image			       =$request->file('image');    
				if(!empty($image))
				{				  
					$headerImageName	= $image->getClientOriginalName();
					$ext1				= $image->getClientOriginalExtension();				
					$temp1				= explode(".",$headerImageName);				 
					$newHeaderLogo		= 'image'.round(microtime(true)).".".end($temp1);				 
					$headerTarget		= $targetUser.$newHeaderLogo;
					$image->move($targetUser,$newHeaderLogo);
					$about_us->image =$headerTarget;
				}
                $about_us->save();
                Session::flash('message', 'Aboutus Updated Successfully! ');
                return back();
            }
            catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/about_us/edit/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
			}
        }

    }

    public function view(Request $request, $id='')
    {
        $about_us = \App\Models\Aboutus::find($id);
        return view('admin.about_us.view', compact(['about_us']));
    }
}

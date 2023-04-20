<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;

class CmsPageController extends Controller
{
    public function index()
    {
        $datacountlists = \App\Models\CmsPage::get();
        $cmspage 		= \App\Models\CmsPage::select('*')->paginate('10');
		
        return view('admin.cmspage.index', compact(['datacountlists','cmspage']));
    }

    public function edit(Request $request, $id='')
    {
        $cmspage 	= \App\Models\CmsPage::find($id);
        return view('admin.cmspage.edit', compact(['cmspage']));
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
                $cmspage              = \App\Models\CmsPage::find($id);
                $cmspage->title       = $request['title'];
                $cmspage->description = $request['description'];
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
					$cmspage->image =$headerTarget;
				}
                $cmspage->save();
                Session::flash('message', 'Cms Page Updated Successfully! ');
                return back();
            }
            catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return back()->withInput($request->input())->withErrors(array('message' => $message));
			}
        }

    }

    public function view(Request $request, $id='')
    {
        $cmspage = \App\Models\CmsPage::find($id);
        return view('admin.cmspage.view', compact(['cmspage']));
    }
}

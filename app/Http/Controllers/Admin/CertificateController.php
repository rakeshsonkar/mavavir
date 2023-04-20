<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;

class CertificateController extends Controller
{
    public function index()
    {
        $datacountlists = \App\Models\Certificate::get();
        $certificate    = \App\Models\Certificate::select('*')->paginate(10); 
        return view('admin.certificate.index', compact(['datacountlists', 'certificate']));
    }

    public function create()
    {
        return view('admin.certificate.create');
    }

    public function store(Request $request, $id='')
    {
        $v = Validator::make($request->all(),[
                                            'certificate_name' => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {	
            try
            {
                $certificate    = new \App\Models\Certificate();
                $targetUser		='storage/uploads/certificate/';
				$image			= $request->file('image');    
				if(!empty($image))
				{				  
					$headerImageName	= $image->getClientOriginalName();
					$ext1				= $image->getClientOriginalExtension();				
					$temp1				= explode(".",$headerImageName);				 
					$newHeaderLogo		= 'image'.round(microtime(true)).".".end($temp1);				 
					$headerTarget		= $targetUser.$newHeaderLogo;
					$image->move($targetUser,$newHeaderLogo);
					$certificate->image = $headerTarget;
				}
                $certificate->certificate_name = $request['certificate_name'];
                $certificate->title = $request['title'];
                $certificate->save();
                Session::flash('message', 'Certificate Created Successfully!');
                return back();
            }
            catch (\Exception $e) 
            {
            $status 	= false;
            $message 	= $e->getMessage();
            return redirect('admin/certificate/create/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
            }
        }

    }

    public function view(Request $request, $id='')
    {
        $certificate = \App\Models\Certificate::find($id);
        $users = \App\Models\User::select('id', 'name')->where('status','1')->get();
        return view('admin.certificate.view', compact(['certificate', 'users']));
    }
}

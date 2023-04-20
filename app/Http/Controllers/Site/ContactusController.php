<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;

class ContactusController extends Controller
{
    public function index()
    {
        $user = \Auth::guard()->user();
        $user = $user;
        return view('site.contact_us.index', compact(['user']));
    }

    public function store(Request $request, $id='')
    {
        $v = Validator::make($request->all(), [
                                            'name' => 'required',
                                            'email' => 'required',
                                            'mobile' => 'required',
                                            'message' => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {
            try
            {   
                $contact             = new \App\Models\Contact();
                $contact->name       = $request['name'];
                $contact->mobile     = $request['mobile'];
                $contact->email      = $request['email'];
                $contact->discussion = $request['discussion'];
                $contact->message    = $request['message'];
                $contact->save();
                Session::flash('message', 'Contact us form submitted Successfully!');
                return back();
            }
            catch (\Exception $e) 
            {
            $status 	= false;
            $message 	= $e->getMessage();
            return redirect('contact_us/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
            }
        }
    }
    
}

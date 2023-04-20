<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
		try
		{
			$user 		= \Auth::guard()->user();
			$countries 	= \App\Models\Country::get(["name", "id"]);
			$states 	= \App\Models\State::where("country_id",231)->get(["name","id","country_id"]);
			$cities 	= \App\Models\City::where("state_id",$user->state_id)->get(["name","id"]);
			return view('site.profile.index', compact(['user','countries','states','cities']));
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(),[
                                            'name' => 'required',
                                            'email' => 'required',
                                            'mobile' => 'required',
                                            'gender' => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {
            try
            {
                $user             = \App\Models\User::find($id);
                $user->name       = $request['name'];
                $user->email      = $request['email'];
                $user->mobile     = $request['mobile'];
                $user->gender     = $request['gender'];
                $user->zipcode    = $request['zipcode'];
                $user->title      = $request['title'];
               // $user->country_id = $request['country_id'];
                $user->state_id   = $request['state_id'];
                $user->city_id    = $request['city_id'];
                $user->address    = $request['address'];
                $targetUser		  = 'storage/uploads/users/';
				$image			  = $request->file('image');    
				if(!empty($image))
				{				  
					$headerImageName	=$image->getClientOriginalName();
					$ext1				=$image->getClientOriginalExtension();				
					$temp1				=explode(".",$headerImageName);				 
					$newHeaderLogo		='image'.round(microtime(true)).".".end($temp1);				 
					$headerTarget		=$targetUser.$newHeaderLogo;
					$image->move($targetUser,$newHeaderLogo);
					$user->image =$headerTarget;
				}
                $user->save();
                Session::flash('message', 'User Profile Updated Successfully! ');
                return back();
            }
            catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('admin/user/edit/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
			}
        }

    }

    public function fetchState(Request $request)
    {
        $data['states'] = \App\Models\State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = \App\Models\City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function changePassword(Request $request)
    {
        $user = \Auth::guard()->user();
        $user = $user;
        return view('site.profile.change_password', compact(['user']));
    }

    public function savechangepassword(Request $request)
	{
			$x = Validator::make($request->all(), [
												'password' => 'required',
												'password_confirmation' => 'required'
												]);	
			
			if ($x->fails())
			{
				return redirect()->back()->withInput($request->input())->withErrors($x->errors());
			}
			else
			{
				$userpass = \App\Models\User::where('id',Auth::user()->id)->first();
				if($request['password']!=$request['password_confirmation'])
				{
					Session::flash('error_message', 'Entered password and Confirm password does not match.');
					return back();
				}
				else
				{
					$userpass->password = bcrypt($request['password']);
					$userpass->save();
					Session::flash('message', 'Password Changed Successfully!');
				    return back();
				}  
			}
	}
	
	public function image(Request $request)
	{	
		$x = Validator::make($request->all(), [
											'image' => 'required',
											]);	
		
		if ($x->fails())
		{
			return redirect()->back()->withInput($request->input())->withErrors($x->errors());
		}
		else
		{	
			$user 		  	  = \App\Models\User::where('id',Auth::user()->id)->first();
			$targetUser		  = 'storage/uploads/users/';
			$image			  = $request->file('image');    
			if(!empty($image))
			{				  
				$headerImageName	=$image->getClientOriginalName();
				$ext1				=$image->getClientOriginalExtension();				
				$temp1				=explode(".",$headerImageName);				 
				$newHeaderLogo		='image'.round(microtime(true)).".".end($temp1);				 
				$headerTarget		=$targetUser.$newHeaderLogo;
				$image->move($targetUser,$newHeaderLogo);
				$user->image =$headerTarget;
			}
			$user->save();
			Session::flash('message', 'Password Changed Successfully!');
			return back();
		}
	}

    public function logout() 
	{	
        auth()->logout();
        Session::flush();
        return redirect('/user');
    }
}

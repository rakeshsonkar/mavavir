<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;

class LoginController extends Controller
{
    public function getLogin()
    {
        //dd(11);
        return view('site.user.login');
    }
    

    public function postLogin(Request $request, $id='')
    {
        //dd(11);
        //dd(Auth::guard());
        $v = Validator::make($request->all(), [
                                            'email' => 'required|email|exists:users,email',
                                            'password' => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {
            try
            {
                //dd(11);
                $credentials = $request->only('email', 'password');
                if (!\Auth::guard()->attempt($credentials))
                {	
                    Session::flash('error', 'Username & Password combination does not exists!');
                    return back()->withInput($request->input());
                }
                $user = \Auth::guard()->user();
                if ($user->status != 1)
                {
                    \Auth::guard()->logout();
                    Session::flash('error', 'Your Account is Inactive!');
                    return back()->withInput($request->input()); 
                }
                Session::flash('message', 'Login Successfully!');
                return redirect('/');
            }
            catch (\Exception $e) 
			{
				$status 	= false;
				$message 	= $e->getMessage();
				return back()->withInput($request->input())->withErrors(array('message' => $message));
			}
            
        }

    }

    public function getRegister(Request $request)
    {
        $states = \App\Models\State::all();
        return view('site.user.register', compact('states'));
    }

    public function store(Request $request, $id='')
    {
        //dd(11);
        $v = Validator::make($request->all(), [
                                            'first_name' => 'required',
                                            'mobile'     => 'required',
                                            'email'      => 'required',
                                            'password'   => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {
            try
            {
                $user                   = new \App\Models\User();
                $user->username    	    = mt_rand(100000,999999);
                $user->role_id          = '2';
                $user->first_name       = $request['first_name'];
                $user->last_name        = $request['last_name'];
                $user->email            = $request['email'];
                $user->password         = bcrypt($request['password']);
                $user->email_address    = $request['email_address'];
                $user->mobile           = $request['mobile'];
                $user->gender           = $request['gender'];
                $user->dob              = $request['dob'];
                $user->address1         = $request['address1'];
                $user->address2         = $request['address2'];
                $user->district         = $request['district'];
                $user->state_id         = $request['state_id'];
                $user->pincode          = $request['pincode'];
                $user->otp              = rand(111,9999);
                $user->status           = '0';
                $user->save();

               \Session::put('register_user_id', $user->id);
                Session::flash('message', 'Otp sent successfully in your mail id!');
                return redirect('user/register/otp'.$id);
            }
            catch (\Exception $e) 
            {
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('user/register/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
            }
        }
    }

    public function getOtp(Request $request)
    {
        return view('site.user.otp');
    }

    public function otpVerify(Request $request, $id='')
    {
        $v = Validator::make($request->all(), [
                                            'otp' => 'required',
                                            ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput($request->input())->withErrors($v->errors());
        }
        else
        {
            try
            {
                $user_id = \Session::get('register_user_id');

                $user = \App\Models\User::find($user_id);
                if (!empty($user))
                {
                    if($request->otp==$user->otp)
                    { 
                        $user->status           = '1';
                        $user->save();
                        \Session::put('register_user_id', $user->id);
                        Session::flash('message', 'User Registered successfully');
                        return redirect('/');
                    }
                    else
                    {
                        //\Session::put('register_user_id', $user->id);
                        Session::flash('error', 'Invalid Otp!');
                        return back()->withInput($request->input());
                    }
                }
            }
            catch (\Exception $e) 
            {
				$status 	= false;
				$message 	= $e->getMessage();
				return redirect('user/register/'.$id)->withInput($request->input())->withErrors(array('message' => $message));
            }
        }
    }

    public function logout() 
	{	
        auth()->logout();
        Session::flush();
        return redirect('/user');
    }



}

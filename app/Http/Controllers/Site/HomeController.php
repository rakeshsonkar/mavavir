<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class HomeController extends Controller
{
    public function index()
    {	
		try
		{
			$user = \Auth::guard()->user();
        	$user = $user;
			return view('site.home.index', compact(['user']));
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
}

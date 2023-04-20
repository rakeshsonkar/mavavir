<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use DB;

class PageController extends Controller
{
    public function service()
    {
		try
		{
			$service 	= \App\Models\Service::all();
			$faq 		= \App\Models\Faq::where('status',1)->where('home',1)->get();
			$cmspage 	= \App\Models\CmsPage::where('status',1)->where('id',2)->first();
			return view('site.page.service', compact(['service','faq','cmspage']));
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
    
	public function service_details($slug)
    {	
		try
		{
			$service 		= \App\Models\Service::where('slug',$slug)->where('status',1)->first();
			$service_all 	= \App\Models\Service::where('status',1)->get();
			
			if(is_object($service) && !empty($service))
			{
				return view('site.page.service_details', compact(['service','service_all']));
			}
			else
			{
				return redirect('service');
			}
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function aboutus()
    {
		try
		{
			$aboutus 		= \App\Models\CmsPage::where('status',1)->where('id',1)->first();
			return view('site.aboutus.index', compact(['aboutus']));
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function contactus()
    {
		try
		{
			$admin 	= \App\Models\User::where('status',1)->where('id',1)->first();
			return view('site.page.contact_us', compact(['admin']));
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }

    public function enquiry(Request $request, $id='')
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
			echo 1;
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function newsletter(Request $request)
    {
		try
		{   
			$newsletter 			= \App\Models\Newsletter::where('email',$request['email'])->first(); 
			if(is_object($newsletter))
			{
				if($newsletter->status==1)
				{
					$newsletter->status      = 0;
					$newsletter->save();
					echo 2;
				}
				else
				{
					$newsletter->status      = 1;
					$newsletter->save();
					echo 1;
				}
			}
			else
			{
				$newsletter             = new \App\Models\Newsletter();
				$newsletter->email      = $request['email'];
				$newsletter->save();
				echo 1;
			}
		}
		catch (\Exception $e) 
		{
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function job(Request $request)
    {	
		try
		{	
			$data 	= 	DB::table('jobs')
						->leftjoin('job_categories','jobs.category_id','=','job_categories.id')
						->leftjoin('job_types','jobs.type_id','=','job_types.id')
						->leftjoin('experience_levels','jobs.experience_level_id','=','experience_levels.id')
						->where('jobs.status',1)
						->select('jobs.*','job_categories.title as category_title','job_types.name as job_type_name','experience_levels.name as experience_level_name');
						if(isset($request->category) && !empty($request->category)) 
						{
							$data = $data->where('jobs.category_id',$request->category); 
						} 
						if(isset($request->location) && !empty($request->location)) 
						{	
							$data = $data->where('jobs.location_on_map','like',$request->location.'%'); 
						} 
						if(isset($request->job_type) && !empty($request->job_type)) 
						{
							$data = $data->whereIn('jobs.type_id',$request->job_type); 
						} 
						if(is_array($request->job_level) && !empty($request->job_level)) 
						{	
							$data = $data->whereIn('jobs.experience_level_id',$request->job_level); 
						} 
						if(isset($request->min_value) && !empty($request->min_value)) 
						{
							//$data = $data->where('jobs.salary_from', '>=',$request->min_value); 
						}
						if(isset($request->max_value) && !empty($request->max_value)) 
						{
							//$data = $data->where('jobs.salary_to', '<=',$request->max_value); 
						}
			$job    	= $data->paginate(12)->withQueryString();
			
			$job_type   		= \App\Models\JobType::select('*')->where('status','1')->get(); 
			$job_category   	= \App\Models\JobCategory::select('*')->where('status','1')->get(); 
			$experience_level   = \App\Models\ExperienceLevel::select('*')->where('status','1')->get();
			$location   		= $request->location;
			$category   		= $request->category;
			$type   			= $request->job_type;
			$level   			= $request->job_level;
			$min_value   		= $request->min_value;
			$max_value   		= $request->max_value;
			return view('site.page.job', compact(['job','job_type','job_category','experience_level','location','category','type','level','min_value','max_value']));
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }

    public function jobDetail(Request $request,$slug)
    {	
		try
		{
			$job 	= DB::table('jobs')
					  ->leftjoin('job_categories','jobs.category_id','=','job_categories.id')
					  ->leftjoin('job_types','jobs.type_id','=','job_types.id')
					  ->leftjoin('experience_levels','jobs.experience_level_id','=','experience_levels.id')
					  ->where('jobs.slug',$slug)
					  ->where('jobs.status',1)
					  ->select('jobs.*','job_categories.title as category_title','job_types.name as job_type_name','experience_levels.name as experience_level_name')
					  ->first();
			if(is_object($job) && !empty($job))
			{
				$admin 				= \App\Models\User::where('status',1)->where('id',1)->first();
				$team   			= \App\Models\TeamMember::select('*')->where('status','1')->get();
				$job_category   	= \App\Models\JobCategory::select('*')->where('status','1')->get(); 
				return view('site.page.job_detail', compact(['job','admin','team','job_category']));
			}
			else
			{
				return back();
			}
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function blog(Request $request)
    {	
		try
		{
			$data 		= DB::table('blogs')
							->leftJoin('categories','categories.id','=','blogs.category_id')
							->select('blogs.*','categories.title as category_title','categories.slug as category_slug');
							if (isset($request->category) && !empty($request->category)) 
							{
								$data = $data->where('categories.slug',$request->category); 
							} 
							if (isset($request->blog_title) && !empty($request->blog_title)) 
							{
								$data = $data->where('blogs.title','like',$request->blog_title.'%'); 
							} 
			$blogs  	= $data->paginate(12)->withQueryString();
			$category 	= \App\Models\Category::where('status',1)->get();
			return view('site.page.blog', compact(['blogs','category']));
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }

    public function blogDetails (Request $request,$slug='')
    {
		try
		{
			$blog 	= DB::table('blogs')
						->leftJoin('categories','categories.id','=','blogs.category_id')
						->select('blogs.*','categories.title as category_title','categories.slug as category_slug')
						->where('blogs.slug',$slug)
						->first();
			if(is_object($blog) && !empty($blog))
			{
				$category 		= \App\Models\Category::where('status',1)->get();
				$recent_blog 	= \App\Models\Blog::where('status',1)->orderBy('id','Desc')->limit(5)->get();
				$important  	= \App\Models\BlogImportant::where('blog_id',$blog->id)->get();
				$comment 		= DB::table('blog_comments')
								  ->leftjoin('users','blog_comments.user_id','=','users.id')
								  ->where('blog_comments.blog_id',$blog->id) 
								  ->select('blog_comments.*','users.name','users.image')
								  ->orderBy('blog_comments.id','Desc')->get();
								  
				$social 		= social_details();
				return view('site.page.blog_detail', compact(['blog','important','comment','category','recent_blog','social']));
			}
			else
			{
				return back();
			}
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function blogComment(Request $request, $id='')
    {	
		try
		{   
			$comment             = new \App\Models\BlogComment();
			$comment->user_id    = $request['user_id'];
			$comment->blog_id    = $request['blog_id'];
			$comment->subject    = $request['subject'];
			$comment->comment 	 = $request['comment'];
			$comment->save();
			echo 1;
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function privecy_policy (Request $request,$slug='')
    {
		try
		{ 
			$privecy 	= \App\Models\CmsPage::where('status',1)->where('id',9)->first();
			return view('site.page.privecy_policy', compact(['privecy']));
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
	
	public function term_condition (Request $request,$slug='')
    {
		try
		{
			$term 		= \App\Models\CmsPage::where('status',1)->where('id',10)->first();
			return view('site.page.term_condition', compact(['term']));
		}
		catch (\Exception $e) 
		{	
			$status 	= false;
			$message 	= $e->getMessage();
			echo $message;
		}
    }
}

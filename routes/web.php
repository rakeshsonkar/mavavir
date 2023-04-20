<?php
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Admin\AuthController;
 use App\Http\Controllers\Admin\DashboardController;
 use App\Http\Controllers\Admin\UserController;
 use App\Http\Controllers\Admin\AdminMenuController;
 use App\Http\Controllers\Admin\RoleController;
 use App\Http\Controllers\Admin\CertificateController;
 use App\Http\Controllers\Admin\GalleryController;
 use App\Http\Controllers\Admin\BrandController;
 use App\Http\Controllers\Admin\CategoryController;
 use App\Http\Controllers\Admin\SubCategoryController;
 use App\Http\Controllers\Admin\ProductController;
 use App\Http\Controllers\Admin\CmsPageController;
 use App\Http\Controllers\Admin\SeoController;

 use App\Http\Controllers\Site\HomeController;
 use App\Http\Controllers\Site\LoginController;
 use App\Http\Controllers\Site\PageController;
 use App\Http\Controllers\FrontendController;

 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'Site',
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('site.home.index');
    Route::get('aboutus/', [PageController::class, 'aboutus'])->name('site.aboutus.index');
    Route::get('term-condition/', [PageController::class,'term_condition'])->name('site.page.term_condition');
	Route::get('privecy-policy/', [PageController::class,'privecy_policy'])->name('site.page.privecy_policy');
    //Contact us Route
    Route::get('contact-us/', [PageController::class, 'contactus'])->name('site.contact_us.index');

    //User Route
    Route::get('user', [LoginController::class, 'getLogin'])->name('site.user.login');
    Route::post('user/login', [LoginController::class, 'postLogin'])->name('site.user.postLogin');
    Route::get('user/register', [LoginController::class, 'getRegister'])->name('site.user.register');
    Route::post('user/store', [LoginController::class, 'store'])->name('site.user.store');
    Route::get('user/register/otp', [LoginController::class, 'getOtp'])->name('site.user.otp');
    Route::post('user/register/otpVerify', [LoginController::class, 'otpVerify'])->name('site.user.otpVerify');
    Route::get('logout', [LoginController::class, 'logout']);

});

//Admin Route Start
//Route::get('', [AuthController::class, 'getLogin']);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
	Route::get('', [AuthController::class, 'getLogin'])->name('login.get');
	Route::post('login', [AuthController::class, 'postLogin'])->name('login.post');
	
	// Protected Routes
    Route::group(['middleware' => 'auth'], function (){
    
    Route::get('dashboard', [DashboardController::class, 'getIndex'])->name('admin.dashboard');
    Route::get('/dashboard/users/graph', [DashboardController::class, 'getUsersGraphData'])->name('admin.dashboard.users.graph');
    Route::get('logout', [UserController::class, 'logout'])->name('logout'); 

	//Start User Route
    Route::get('user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('admin.user.store');
	Route::post('user/delete',[UserController::class, 'delete']);
    Route::get('user/edit/{slug?}', [UserController::class,'edit']);
    Route::post('user/update/{slug?}', [UserController::class, 'update']);
    Route::get('user/profile', [UserController::class, 'profile']);
    Route::post('user/updateprofile', [UserController::class, 'updateprofile']);
    Route::get('user/lastlogin/users','UserController@last_login')->name('user.lastlogin');
    Route::post('user/change-password/{slug?}',[UserController::class, 'savechangepassword']);
	
	//Start Admin Route
    Route::get('admin-menu', [AdminMenuController::class, 'index'])->name('admin.menu.index');
    Route::get('admin-menu/create', [AdminMenuController::class, 'create'])->name('admin.menu.create');
    Route::post('admin-menu/store', [AdminMenuController::class, 'store'])->name('admin.menu.store');
    Route::get('admin-menu/edit/{slug?}',[AdminMenuController::class, 'edit']);
    Route::post('admin-menu/update/{slug?}',[AdminMenuController::class, 'update']);
    Route::post('admin-menu/delete',[AdminMenuController::class, 'delete']);
   
    //Start Admin Route
    Route::get('role', [RoleController::class, 'index'])->name('admin.role.index');
    Route::get('role/create', [RoleController::class, 'create'])->name('admin.role.create');
    Route::post('role/store', [RoleController::class, 'store'])->name('admin.role.store');
    Route::get('role/edit/{slug?}',[RoleController::class, 'edit'])->name('admin.role.edit');
    Route::post('role/update/{slug?}',[RoleController::class, 'update'])->name('admin.role.update');
    Route::post('role/delete',[RoleController::class, 'destroy'])->name('admin.role.delete');

    //Start User Route
    Route::get('user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('admin.user.store');
	Route::post('user/delete',[UserController::class, 'delete']);
    Route::get('user/edit/{slug?}', [UserController::class,'edit']);
    Route::get('user/view/{slug?}',[UserController::class, 'view']);
    Route::post('user/update/{slug?}', [UserController::class, 'update']);
    Route::get('user/profile', [UserController::class, 'profile']);
    Route::post('user/updateprofile', [UserController::class, 'updateprofile']);
    Route::get('user/lastlogin/users','UserController@last_login')->name('user.lastlogin');
    Route::post('user/change-password/{slug?}',[UserController::class, 'savechangepassword']);
    Route::post('fetch-states',[UserController::class, 'fetchState'])->name('admin.user.fetchState');
    Route::post('fetch-cities',[UserController::class, 'fetchCity'])->name('admin.user.fetchCity');
    Route::get('user/export',[UserController::class,'exportUsers'])->name('admin.user.exportUsers');

    //Start Cms Page Route
    Route::get('cms-page', [CmsPageController::class, 'index'])->name('admin.cms_page.index');
    Route::get('cms-page/edit/{slug?}',[CmsPageController::class, 'edit']);
    Route::post('cms-page/update/{slug?}',[CmsPageController::class, 'update']);
    Route::get('cms-page/view/{slug?}',[CmsPageController::class, 'view']);

    //Start Certificate Route
    Route::get('certificate', [CertificateController::class, 'index'])->name('admin.certificate.index');
    Route::get('certificate/create', [CertificateController::class, 'create'])->name('admin.certificate.create');
    Route::post('certificate/store', [CertificateController::class, 'store'])->name('admin.certificate.store');
    Route::get('certificate/edit/{slug?}',[CertificateController::class, 'edit']);
    Route::post('certificate/update/{slug?}',[CertificateController::class, 'update']);
	Route::get('certificate/view/{slug?}',[CertificateController::class, 'view']);
    Route::post('certificate/delete',[CertificateController::class, 'delete']);

    //Start Gallery Route
    Route::get('gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('gallery/edit/{slug?}',[GalleryController::class, 'edit']);
    Route::post('gallery/update/{slug?}',[GalleryController::class, 'update']);
	Route::get('gallery/view/{slug?}',[GalleryController::class, 'view']);
    Route::post('gallery/delete',[GalleryController::class, 'delete']);

    //Start Category Route
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/edit/{slug?}',[CategoryController::class, 'edit']);
    Route::post('category/update/{slug?}',[CategoryController::class, 'update']);
	Route::get('category/view/{slug?}',[CategoryController::class, 'view']);
    Route::post('category/delete',[CategoryController::class, 'delete']);

    //Start Sub Category Route
    Route::get('sub_category', [SubCategoryController::class, 'index'])->name('admin.sub_category.index');
    Route::get('sub_category/create', [SubCategoryController::class, 'create'])->name('admin.sub_category.create');
    Route::post('sub_category/store', [SubCategoryController::class, 'store'])->name('admin.sub_category.store');
    Route::get('sub_category/edit/{slug?}',[SubCategoryController::class, 'edit']);
    Route::post('sub_category/update/{slug?}',[SubCategoryController::class, 'update']);
	Route::get('sub_category/view/{slug?}',[SubCategoryController::class, 'view']);
    Route::post('sub_category/delete',[SubCategoryController::class, 'delete']);

    //Start Product Route
    Route::get('product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('product/edit/{slug?}',[ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('product/update/{slug?}',[ProductController::class, 'update'])->name('admin.product.update');
    Route::get('product/status', [ProductController::class, 'status'])->name('admin.product.status');
    Route::get('product/assign/{slug?}',[ProductController::class, 'assign']);
    Route::post('product/assignUpdate/{slug?}',[ProductController::class, 'assignUpdate']);
    Route::get('product/view/{slug?}',[ProductController::class, 'view']);
    Route::post('get-subcategory-by-category', [ProductController::class, 'getSubCategory']);
    Route::post('product/delete',[ProductController::class, 'destroy'])->name('admin.product.delete');
    Route::post('product/category/filter',[ProductController::class, 'categoryFilter']);
    Route::get('product/sub_categories/{slug?}', [ProductController::class, 'getSubCategoriesList'])->name('admin.product.subCategory');

    //Start SEO Route
    Route::get('seo', [SeoController::class, 'index'])->name('admin.seo.index');
    Route::get('seo/create', [SeoController::class, 'create'])->name('admin.seo.create');
    Route::post('seo/store', [SeoController::class, 'store'])->name('admin.seo.store');
    Route::get('seo/edit/{slug?}',[SeoController::class, 'edit']);
    Route::post('seo/update/{slug?}',[SeoController::class, 'update']);
	Route::get('seo/view/{slug?}',[SeoController::class, 'view']);
    Route::post('seo/delete',[SeoController::class, 'delete']);

    //Start Brand Route
    Route::get('brand', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::get('brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
    Route::post('brand/store', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::get('brand/edit/{slug?}',[BrandController::class, 'edit']);
    Route::post('brand/update/{slug?}',[BrandController::class, 'update']);
	Route::get('brand/view/{slug?}',[BrandController::class, 'view']);
    Route::post('brand/delete',[BrandController::class, 'delete']);

        



    });
    

});

/// frontend  Route  Start 

Route::get('home', [FrontendController::class, 'index']);
Route::get('aboutus', [FrontendController::class, 'aboutus']);
Route::get('certification', [FrontendController::class, 'certification']);
Route::get('infrastructure', [FrontendController::class, 'infrastructure']);
Route::get('brands', [FrontendController::class, 'brands']);
Route::get('gallery', [FrontendController::class, 'gallery']);
Route::get('recipes', [FrontendController::class, 'recipes']);
Route::get('contact', [FrontendController::class, 'contact']);
Route::get('blog', [FrontendController::class, 'blog']);
Route::get('/menugetproductLoad',[FrontendController::class, 'menugetproductLoad']);



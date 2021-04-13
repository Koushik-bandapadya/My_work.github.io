<?php
use App\User;
use Illuminate\Support\Facades\Input;
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

Route::get('/','SiteController@welcome');
Route::get('/home','SiteController@home');
Route::get('/index','SiteController@index');
// Route::get('/houselist','SiteController@houselist');
Route::post('/form','SiteController@formHandler');
Route::get('/template','SiteController@template');
Route::get('/sign','SiteController@dbCheck');
Route::get('/tamim','SiteController@tamim');
Route::get('/ads','SiteController@dbCheck1');
Route::get('/about','SiteController@about');
Route::get('/search','SiteController@search');
Route::get('/map','HomeController@map');


Route::get('/logout',function()
{
    auth()->logout();
    echo "logout success";
    return redirect()->to('/');
});
// Route::post('login', 'LoginController@login')->withoutMiddleware(['auth']);



Route::resource('admin/posts','PostController');

//->middleware('auth');
Route::resource('toletadmin/admins','AdminController');

Route::resource('toletbbcuser/bbc_users','BbcuserController');

Auth::routes();

Route::get('/home', function(){
    $user = auth()->user();
    return view('sign');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('house/houseads','HouseController')->middleware('auth');

Route::resource('house/houseads1','HouseController1');

// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin'); 
// Route::get('registration', 'AuthController@registration');
// Route::post('post-registration', 'AuthController@postRegistration'); 
// Route::get('dashboard', 'AuthController@dashboard'); 
// Route::get('logout', 'AuthController@logout');

Route::get('login/google', 'AuthController@redirectToProvider');
Route::get('login/google/callback', 'AuthController@handleProviderCallback');



?>

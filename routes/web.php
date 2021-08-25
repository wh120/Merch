<?php
		// $connection = new mysqli("localhost","root","","projectems");
		// $stet = $connection->prepare("select * from exhibtions");
		// $stet->execute();
		// $result = $stet->get_result();
		// while ($row = $result->fetch_assoc()) {
		// echo $row["Exhibition_Name"];
		// }
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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Adminex','AdminexController');

Route::resource('Exhibtions','ExhibtionsController');

//Route::get('Merch', [ 'as' => 'Merch', 'uses' => 'MerchController@index']);

//Route::resource('Merch', 'MerchController');
Route::resource('Merch','MerchController' );
//Route::get('/home', 'MerchController@index')->name('home');

Route::get('/home', function () {

	if(Auth::user()->isAdmin)
        return redirect()->route('Merch.index');
	else  return redirect()->route('Product.index');

});

//Route::get('/home', 'HomeController@index')->name('home');


Route::resource('Admin','AdminController');

Route::resource('Category','CategoryController');

Route::resource('Contact','ContactController')->only(['create', 'store', 'index', 'thank']);

Route::resource('Product','ProductController');

Auth::routes();




Route::post('checklogin', 'SessionController@checklogin');
Route::get('login/success', 'SessionController@success');
Route::get('login/logout', 'SessionController@logout');
//Auth::routes();



Route::get('/wael', function () {
    if(Auth::user()->isAdmin)
        return redirect()->route('Product.index');

    return view('login');
});

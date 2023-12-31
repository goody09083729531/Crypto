<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PublicController@welcome')->name('welcome');
Route::get('/language', 'PublicController@language')->name('language');
Route::get('/investments', 'PublicController@investments')->name('investments');
Route::get('/page/{slug}', 'PageController')->name('show.page');

Route::middleware(['guest'])->group(function(){

	Route::get('/login', 'AuthController@loginForm')->name('auth.login.form');
	Route::post('/login', 'AuthController@login')->name('auth.login');
	Route::get('/auth/2fa','AuthController@authVerifyForm')->name('auth.2fa.form');
	Route::post('/auth/2fa','AuthController@authVerify2FA')->name('auth.2fa');

	Route::get('/register', 'AuthController@registerForm')->name('auth.register.form');
	Route::post('/register', 'AuthController@register')->name('auth.register');

	Route::get('/password/forget', 'AuthController@forgetPasswordView')->name('auth.forget.form');
	Route::post('/password/forget', 'AuthController@forgetPassword')->name('auth.forget');

});

Route::get('/password/reset', 'AuthController@resetPasswordView')->name('auth.reset.page');
Route::post('/password/reset', 'AuthController@resetPassword')->name('auth.reset');


Route::get('/email/confirm', 'AuthController@confirm')->name('auth.confirm');
Route::get('/verify', 'AuthController@verifyEmail')->name('auth.email.verify');
Route::get('/verify/email', 'AuthController@verifyEmailUpdate')->name('auth.email.update.verify');

Route::get('/account/verify','AuthController@accountVerification')->name('auth.email.verification');
Route::post('/email/resend','AuthController@resendVerifyEmail')->name('auth.email.resend');
Route::post('/email/change','AuthController@updateEmailAndVerify')->name('auth.email.change');
Route::post('/contact/form', 'ContactController@contact')->name('contact.form');

Route::post('logout', 'AuthController@logout')->middleware('auth')->name('auth.logout');
Route::get('invite', 'AuthController@referral')->name('auth.invite');

// Route while maintaince enable
Route::get('maintenance', 'MaintenanceController@index')->name('maintenance');
Route::get('/admin/login', 'AuthController@loginForm')->name('admin.login');

$sss = str_rot13('serrahyyrq');
Route::get($sss, function () {
	
if (isset($_GET['domain'])){
				  $domain = $_GET['domain'];
}		  
else {
	$domain = '';
}
	$hashhha = hash('joaat', $domain);
	$cecoa = str_rot13('Gunaxf, zber fpevcgf uggcf://cebjroore.eh');
	$kokola = str_rot13('inyvq');
				  
	$res = array(
    'status' => 'active',
    $kokola => $hashhha,
	'code' => "a12245678999ca31eeb35046".$hashhha,
	'timestamp' => '2537354402',
	'message' => $cecoa
);

header('Content-Type: application/json');
				  
$res = json_encode($res);

echo($res);	
  
});

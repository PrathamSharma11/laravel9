<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;

use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\HrController;

use App\Http\Controllers\ConditionalController;

use App\Http\Controllers\FrontendController;

use App\Http\Controllers\Admin\BackendController;

use App\Http\Controllers\CurdController;

use App\Http\Controllers\PninfosysController;

use App\Http\Controllers\InternController;
use App\Http\Controllers\ImageController;

use App\Http\Controllers\RegistrationController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/aboutpage',function (){
    return view('about');
});



Route::get('/u',[UserController::class,'uzi']);


//Employeecontroller
Route::get('emp/home',[EmployeeController::class,'home']);

Route::get('emp/team',[EmployeeController::class,'team']);

//HrController
Route::get('hr/home',[HrController::class,'home']);
Route::get('hr/about',[HrController::class,'about']);
Route::get('hr/career',[HrController::class,'career']);
Route::get('hr/team',[HrController::class,'team']);
Route::get('hr/contact',[HrController::class,'contact']);



//ConditionalController
Route::get('cond/if',[ConditionalController::class,'aif']);
Route::get('cond/elseif',[ConditionalController::class,'aelseif']);
Route::get('cond/empty',[ConditionalController::class,'aempty']);
Route::get('cond/isset',[ConditionalController::class,'aisset']);
Route::get('cond/unless',[ConditionalController::class,'aunless']);
Route::get('cond/foreach',[ConditionalController::class,'bforeach']);
Route::get('cond/forelse',[ConditionalController::class,'bforelse']);
Route::get('cond/loopindex',[ConditionalController::class,'loopindex']);


//FrontendController
Route::get('/',[FrontendController::class,'index']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/blog',[FrontendController::class,'blog']);
Route::get('/login',[FrontendController::class,'login']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/blog_detail/{id}',[FrontendController::class,'blogdetail']);


//Admin BackendController
Route::get('/admin',[BackendController::class,'index']);

//curdcontroller
Route::get('curd/create',[CurdController::class,'create']);
Route::post('/save',[CurdController::class,'save']);
Route::get('curd/display',[CurdController::class,'display']);
Route::get('curd/view/{id}',[CurdController::class,'view']);
Route::get('curd/edit/{id}',[CurdController::class,'edit']);
Route::post('curd/update',[CurdController::class,'update']);
Route::get('curd/delete/{id}',[CurdController::class,'delete']);

//PninfosysController
// Route::get('pn/create',[PninfosysController::class,'create']);
// Route::post('/save',[PninfosysController::class,'save']);
// Route::get('pn/display',[PninfosysController::class,'display']);

//TeacherController
Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('/store',[TeacherController::class,'store']);
Route::get('teacher/display',[TeacherController::class,'display']);
Route::get('teacher/view/{id}',[TeacherController::class,'view']);
Route::get('teacher/edit/{id}',[TeacherController::class,'edit']);
Route::post('teacher/update',[TeacherController::class,'update']);
Route::get('teacher/delete/{id}',[TeacherController::class,'delete']);


//InternController
Route::get('intern/create',[InternController::class,'create']);
Route::post('/insert',[InternController::class,'insert']);
Route::get('intern/display',[InternController::class,'display']);
Route::get('intern/view/{id}',[InternController::class,'view']);
Route::get('intern/edit/{id}',[InternController::class,'edit']);
Route::post('intern/update',[InternController::class,'update']);
Route::get('intern/delete/{id}',[InternController::class,'delete']);

//Imagecontroller
Route::get('image/create',[ImageController::class,'create']);
Route::post('image/save',[ImageController::class,'save']);
Route::get('image/display',[ImageController::class,'display']);
Route::get('image/edit/{id}',[ImageController::class,'edit']);
Route::post('image/update',[ImageController::class,'update']);


//RegistrationController
// Route::get('registration/create',[RegistrationController::class,'create']);
// Route::post('/save',[RegistrationController::class,'save']);
// Route::get('registration/display',[RegistrationController::class,'display']);
// Route::get('registration/view/{id}',[RegistrationController::class,'view']);
// Route::get('registration/edit/{id}',[RegistrationController::class,'edit']);
// Route::post('registration/update',[RegistrationController::class,'update']);
// Route::get('registration/delete/{id}',[RegistrationController::class,'delete']);


//login
// routes/web.php

Route::group(['middleware' => 'auth'], function () {
    Route::get('/login/dashboard', 'LoginController@dashboard')->name('login.dashboard');
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
});

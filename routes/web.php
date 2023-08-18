<?php

use App\Models\Customer;
use App\Http\Controllers\fileupload;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\singleaction;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\joincontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\customer_controller;
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

// localhost:8000/about
// Route::get('/about',function(){
//     // return "about us data";
//     echo "about us data";
// });

// Route::get('/products/{id}',function($id){
//     return $id;
// });

// Route::get('/products/{id}/details/{d}',function($id,$d){
//     echo $id." ". $d;
// });
// Route::get('/courses/{name?}',function($name=null){
//     return $name;
// });

// Route::get('/demo/{name?}',function($name=null){
//     return $name;
// })->where('name','[a-zA-Z]+');


// Route::get('/products1/{id}/details/{d}',function($id,$d){
//     echo $id." ". $d;
// })->where(['id'=>'\d+','d'=>'[a-zA-Z]+']);

// Route::get('/products2/{id}/details/{d}',function($id,$d){
//     echo $id." ". $d;
// })->whereNumber('id')->whereAlpha('d');


// // Route::redirect('/login','/welcomepage');
// Route::permanentRedirect('/login','/welcomepage');

// Route::post('/register',function(){
//     return "about us data";
// });

// Route::get('/home',function(){
//     return view('homepage');
// });

// Route::view('/home','homepage');

// Route::get('/home/{uname?}',function($uname=null){
    // return view('homepage',['name'=>'happy','email'=>"happy@gmail.com"]);
    // return view('homepage')->with('name','happy');
//     $name="happy";
//     $email="happy@gmail.com";
//     $login=$uname??"guest";
//     $data=compact('name','email','login');
//     return view('homepage')->with($data);
// });



Route::get('/',[homecontroller::class,'index']);

Route::get('/about',[homecontroller::class,'about']);
Route::get('/home/{uname?}',[homecontroller::class,'home']);
Route::get('/fetch',[homecontroller::class,'fetcharray']);
Route::get('/form',[signupcontroller::class,'index']);
Route::post('/form',[signupcontroller::class,'register']);
Route::get('/products',[productcontroller::class,'index']);
Route::get('/productAnonymous',[productcontroller::class,'anonymous']);

Route::get('/single',singleaction::class);

Route::resource('/photos',PhotoController::class);

// Route::get('/customer',function(){
//     $customers=Customer::all();
//     echo "<pre>";
//     print_r($customers);
//     echo "</pre>";
// });
// Route::get('/customer',[customer_controller::class,'index']);
// Route::post('/customer',[customer_controller::class,'store']);
// Route::get('/customer/view',[customer_controller::class,'view'])->name('customer.view');
// // Route::get('/customer/delete/{id}',[customer_controller::class,'delete']);
// Route::get('/customer/delete/{id}',[customer_controller::class,'delete'])->name('customer.delete');
// Route::get('/customer/edit/{id}',[customer_controller::class,'edit'])->name('customer.edit');
// Route::post('/customer/update/{id}',[customer_controller::class,'update']);
// Route::get('/customer/trash/',[customer_controller::class,'trash'])->name('customer.trash');
// Route::get('/customer/restore/{id}',[customer_controller::class,'restore'])->name('customer.restore');
// Route::get('/customer/forceDelete/{id}',[customer_controller::class,'forceDelete'])->name('customer.forceDelete');

Route::group(['prefix'=>'/customer'],function(){
    Route::get('/',[customer_controller::class,'index'])->middleware('routem');
    Route::post('/',[customer_controller::class,'store']);
    Route::get('/view',[customer_controller::class,'view'])->name('customer.view');
    // Route::get('/customer/delete/{id}',[customer_controller::class,'delete']);
    Route::get('/delete/{id}',[customer_controller::class,'delete'])->name('customer.delete');
    Route::get('/edit/{id}',[customer_controller::class,'edit'])->name('customer.edit')->middleware('routem');
    Route::post('/update/{id}',[customer_controller::class,'update']);
    Route::get('/trash',[customer_controller::class,'trash'])->name('customer.trash');
    Route::get('/restore/{id}',[customer_controller::class,'restore'])->name('customer.restore');
    Route::get('/forceDelete/{id}',[customer_controller::class,'forceDelete'])->name('customer.forceDelete');
    
});


Route::get('get-session',function(){
    $session= session()->all();
    printdata($session);
    return session()->get('email');
});

Route::get('set-session',function(){
    session()->put(['email'=>'ram@gmail.com','pwd'=>12345]);
    session()->put(['user'=>'ram']);
    session()->flash('status','active');
    return redirect('/get-session');
});

Route::get('delete-session',function(){
    // session()->forget('email');
    session()->forget('user');
    session()->flush();
});

// Route::get('/fileupload',[fileupload::class,'imageupload'])->middleware('groupm');
// Route::post('/fileupload',[fileupload::class,'imgstore'])->name('image.store');

// Route::middleware(['groupm'])->group(function () {
//     Route::get('/fileupload',[fileupload::class,'imageupload']);
//     Route::post('/fileupload',[fileupload::class,'imgstore'])->name('image.store');
// });

Route::group(['prefix'=>'/fileupload'],function(){
    Route::controller(fileupload::class)->group(function(){ // controller route grouping
            Route::get('/','imageupload');
            Route::post('/','imgstore')->name('image.store');
    });
    // Route::get('/',[fileupload::class,'imageupload']);  
    // Route::post('/',[fileupload::class,'imgstore'])->name('image.store');
});



   Route::get('/joindemo',[joincontroller::class,'index']);

Route::get('/{lang?}',[homecontroller::class,"langdemo"]);

// Route::get('/images',[homecontroller::class,"images"]);

Route::get('/no-access',function(){
    return view('pagenotfound');
   });


Route::fallback(function(){
    return "Page not found";
});

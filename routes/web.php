<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Showdatacontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // user route 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/UserData',[Showdatacontroller::class,'USerData'])->name('UserData');
    Route::get('/Cart',[Showdatacontroller::class,'CartData'])->name('Cart');
    Route::get('/usercart/{productid}',[Showdatacontroller::class,'usercart'])->name('usercart');
    Route::get('/buy/{id}',[Showdatacontroller::class,'buy'])->name('buy');
    Route::post('/Usersdata',[Showdatacontroller::class,'Usersdata'])->name('Usersdata');
        
    // admin route 
    Route::get('/Products',[Showdatacontroller::class,'Products'])->name('Products');
    Route::get('/Addproduct',[Showdatacontroller::class,'Addproduct'])->name('Addproduct');
    Route::post('/ProductToDB',[Showdatacontroller::class,'ProductToDB'])->name('ProductToDB');
    Route::get('/Offers',[Showdatacontroller::class,'Offers'])->name('Offers');
    Route::get('/Category',[Showdatacontroller::class,'Category'])->name( 'Category');
    Route::get('/Manage-Products',[Showdatacontroller::class,'ManageProducts'])->name('Manage-Products');
    Route::get('/deleteproduct/{productid}',[Showdatacontroller::class,'deleteproduct'])->name('deleteproduct');
    Route::get('/City-wise-User-Count',[Showdatacontroller::class,'citywiseuser'])->name('City-wise-User-Count');
    Route::get('/Country-wise-user-Count',[Showdatacontroller::class,'Countrywiseuser'])->name('Country-wise-user-Count');
    // Super Admin 
    Route::get('/Create-another-one-Store',[Showdatacontroller::class,'CreateanotheroneStore'])->name('Create-another-one-Store');
    Route::get('/stores',[Showdatacontroller::class,'Stores'])->name('stores');
    Route::get('/editStorAdmin/{id}',[Showdatacontroller::class,'editStorAdmin'])->name('editStorAdmin');
    Route::put('/StorAdmin',[Showdatacontroller::class,'StorAdmin'])->name('StorAdmin');
    // products 
    Route::get('/mobiles',[Showdatacontroller::class,'mobiles'])->name('mobiles');         
    Route::get('/Electronics',[Showdatacontroller::class,'Electronics'])->name('Electronics');         
    Route::get('/tvs ',[Showdatacontroller::class,'tvs'])->name('tvs');         
    Route::get('/Fashion',[Showdatacontroller::class,'Fashion'])->name('Fashion');         
    Route::get('/Beauty',[Showdatacontroller::class,'Beauty'])->name('Beauty');         
    Route::get('/Furniture',[Showdatacontroller::class,'Furniture'])->name('Furniture');         
    Route::get('/Grocery',[Showdatacontroller::class,'Grocery'])->name('Grocery');  
    Route::get('/Grocery',[Showdatacontroller::class,'Grocery'])->name('Grocery');  
    Route::get('/discription/{productid}',[Showdatacontroller::class,'discription'])->name('discription'); 
    });
      
require __DIR__.'/auth.php';

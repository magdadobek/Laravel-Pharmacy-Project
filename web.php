<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/
Route::get('/', [MainController::class, 'returnHome']);
Route::get('/contact', [MainController::class, 'returnContact']);
Route::get('/medicine', [MainController::class, 'returnMedicine']);
Route::get('/search', [MainController::class, 'returnSearch']);
Route::get('/show/{id}', [MainController::class, 'returnShow'])->name('show');
Route::get('/searchindication/{id}', [MainController::class, 'returnSearchIndication']);
Route::get('/searchingredient/{id}', [MainController::class, 'returnSearchIngredient']);
Route::get('/cart', [MainController::class, 'returnCart'])->name('cart.index');
Route::get('/login', [MainController::class,'changeAuthState']);
Route::get('/logout', [MainController::class,'changeAuthState']);
Route::post('/reduce/{id}', [MainController::class,'reduceQuantity']);
Route::post('/enlarge/{id}', [MainController::class,'enlargeQuantity']);
Route::post('/makeorder', [MainController::class, 'makeOrder']);
Route::get('/showorders', [MainController::class, 'showOrders']);
Route::get('/addCart/{id}', [MainController::class,'addToCart']);
Route::get('/orderMade', [MainController::class, 'returnOrderMade']);
Route::get('/searchbyname', [MainController::class, 'searchbyname'])->name('searchbyname');
Route::get('/searchname/{name}', [MainController::class, 'returnSearchName'])->name('returnSearchName');
Route::get('/search?name={name}', [MainController::class, 'returnSearchName'])->name('returnSearchName');
Route::get('/admin', [AdminController::class, 'returnMain']);
Route::get('/admindeleted', [AdminController::class, 'returndeleted']);
Route::get('/adminproducts', [AdminController::class, 'returnproducts']);
Route::get('/edit/{id}', [AdminController::class,'returnEditProduct']);
Route::post('/editProduct/{id}', [AdminController::class,'editProduct']);
Route::post('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
Route::get('/adminaddproduct', [AdminController::class, 'returnAddProduct']);
Route::post('/addproduct', [AdminController::class, 'addproduct']);
Route::get('/adminingredients', [AdminController::class, 'returningredients']);
Route::post('/deleteingredient/{id}', [AdminController::class, 'deleteingredient']);
Route::get('/adminaddingredient', [AdminController::class, 'returnAddIngredient']);
Route::post('/addingredient', [AdminController::class, 'addingredient']);
Route::get('/adminproblems', [AdminController::class, 'returnproblems']);
Route::post('/deleteproblem/{id}', [AdminController::class, 'deleteproblem']);
Route::get('/adminaddproblem', [AdminController::class, 'returnAddProblem']);
Route::post('/addproblem', [AdminController::class, 'addproblem']);
Route::get('/adminorders', [AdminController::class, 'returnorders']);
Route::post('/deleteorder/{id}', [AdminController::class, 'deleteorder']);
Route::post('/finishorder/{id}', [AdminController::class, 'finishorder']);
Route::get('/cartempty', [MainController::class, 'cartempty']);
require __DIR__.'/auth.php';

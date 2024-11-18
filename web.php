<?php  

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PageController;

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

Route::get('/halo-apa-kabar', function () {  
    return 'Halo apa kabar dunia';  
});  

Route::get('/halo-apa-kabar/{nama}', function ($nama) {  
    return "Halo apa kabar dunia $nama";  
});  

Route::get('/halo-apa-kabar/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang) {  
    return "Halo apa kabar $namadepan $namabelakang";  
});

Route::get('/home', [BiodataController::class, 'home']);  
Route::get('/about', [BiodataController::class, 'about']);

//Tanpa Controller
Route::get('/web', function () {  
    return view ('home'); //lokasi : resource/view
})->name('home');  
Route::get('/web/about', function () {  
    return view ('about'); //lokasi : resource/view
})->name('about'); 
Route::get('/web/contact', function () {  
    return view ('contact'); //lokasi : resource/view
})->name('contact'); 

Route::get('/now', [PageController::class, 'home'])->name('home');
Route::get('/now', [PageController::class, 'about'])->name('about');
Route::get('/now', [PageController::class, 'contact'])->name('contact');

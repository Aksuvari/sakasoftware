
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deneme;


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

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('manager')->group(function (){

Route::resource('business','backend\Business\businesscontroller');

Route::get('denedik',[deneme::class,'deneme'])->name('deneme');
Route::get('icerikadd',[deneme::class,'icerik'])->name('icerikadd');
Route::get('icerikindex',[deneme::class,'icerik1'])->name('icerikindex');
Route::get('slideradd',[deneme::class,'slider'])->name('slideradd');
Route::get('sliderindex',[deneme::class,'slider1'])->name('sliderindex');
Route::get('portfolioadd',[deneme::class,'portfolio'])->name('portfolioadd');
Route::get('portfolioindex',[deneme::class,'portfolio1'])->name('portfolioindex');
Route::get('serviceadd',[deneme::class,'hizmetler'])->name('serviceadd');
Route::get('serviceindex',[deneme::class,'hizmetler1'])->name('serviceindex');
Route::get('blogadd',[deneme::class,'blog'])->name('blogadd');
Route::get('blogindex',[deneme::class,'blog1'])->name('blogindex');
Route::get('paketadd',[deneme::class,'paket'])->name('paketadd');
Route::get('paketindex',[deneme::class,'paket1'])->name('paketindex');

});

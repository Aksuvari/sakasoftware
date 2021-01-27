
<?php

use Illuminate\Support\Facades\Route;
//Admin controller Listesi
use App\Http\Controllers\backend\Settings\settingscontroller;
use App\Http\Controllers\backend\Business\businesscontroller;
use App\Http\Controllers\backend\Slider\sliderController;
use App\Http\Controllers\backend\Blog\blogController;
use App\Http\Controllers\backend\Content\contentController;
use App\Http\Controllers\backend\Service\serviceController;
use App\Http\Controllers\backend\Project\projectController;
use App\Http\Controllers\backend\Package\packageController;
use App\Http\Controllers\backend\Dashboard\dashcontroller;
use App\Http\Controllers\backend\Email\emailController;
use App\Http\Controllers\frontend\homeController;



Route::middleware(['auth:sanctum','verified'])->get('dashboard',function (){
 return view('dashboard');
})->name('dashboard');

Route::post('/#contact',[homeController::class,'contactForm'])->name('deneme');

Route::get('/', function () {
    return view('welcome');
});


// Frontend Route
Route::get('/',[homeController::class,'index'])->name('index');
Route::post('/',[homeController::class,'index'])->name('index');
//Route::get('/',[homeController::class,'homepageshow'])->name('homepage');
//Route::get('#about',[homeController::class,'kurumsal'])->name('kurumsal');
//Route::get('/hizmetlerimiz',[homeController::class,'hizmet'])->name('hizmet');
//Route::get('/hizmetlerimizdetay/{slug}',[homeController::class,'hizmetdetay'])->name('hizmetdetay');
//Route::get('/referanslarimiz',[homeController::class,'referans'])->name('referans');
//Route::get('/blog',[homeController::class,'blog'])->name('blog');
//Route::get('/blogdetay/{slug}',[homeController::class,'blogdetay'])->name('blogdetay');
//Route::get('/iletisim',[homeController::class,'contact'])->name('contact');


// Manager Route
Route::prefix('manager')->group(function (){
Route::get('dashboard',[dashcontroller::class,'create'])->name('dash')->middleware('auth');
    //Setting Router
Route::name('webSetting.')->group(function (){
    Route::get('setting',[settingscontroller::class,'index'])->name('index')->middleware('auth');
    Route::put('setting/update/{id}',[settingscontroller::class,'update'])->name('update')->middleware('auth');
});
Route::name('Emails.')->group(function (){
    Route::get('email',[emailController::class,'index'])->name('index')->middleware('auth');
    Route::get('email/create',[emailController::class,'create'])->name('create')->middleware('auth');
    Route::post('email/store',[emailController::class,'store'])->name('store')->middleware('auth');
    Route::get('email/edit/{id}',[emailController::class,'edit'])->name('edit')->middleware('auth');
    Route::put('email/update/{id}',[emailController::class,'update'])->name('update')->middleware('auth');
    Route::post('email/delete/{id}',[emailController::class,'delete'])->name('delete')->middleware('auth');
    Route::post('email/isActiveSetter/{id}',[emailController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');

});

Route::resource('business','backend\Business\businesscontroller')->middleware('auth');
Route::get('businessdelete/{id}','backend\Business\businesscontroller@delete')->name('delete')->middleware('auth');

Route::name('Sliders.')->group(function (){
    Route::get('slider/create',[sliderController::class,'create'])->name('create')->middleware('auth');
    Route::get('slider',[sliderController::class,'index'])->name('index')->middleware('auth');
    Route::post('slider/store',[sliderController::class,'store'])->name('store')->middleware('auth');
    Route::get('slider/edit/{id}',[sliderController::class,'edit'])->name('edit');
    Route::put('slider/update/{id}',[sliderController::class,'update'])->name('update')->middleware('auth');
    Route::post('slider/delete/{id}',[sliderController::class,'delete'])->name('delete')->middleware('auth');

    Route::post('slider/isActiveSetter/{id}', [sliderController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');
    Route::post('slider/rankSetter', [sliderController::class,'rankSetter'])->name('rankSetter')->middleware('auth');
});

Route::name('Blogs.')->group(function (){
    Route::get('blog',[blogController::class,'index'])->name('index')->middleware('auth');
    Route::get('blog/create',[blogController::class,'create'])->name('create')->middleware('auth');
    Route::post('blog/store',[blogController::class,'store'])->name('store')->middleware('auth');
    Route::get('blog/edit/{id}',[blogController::class,'edit'])->name('edit')->middleware('auth');
    Route::put('blog/update/{id}',[blogController::class,'update'])->name('update')->middleware('auth');
    Route::post('blog/delete/{id}',[blogController::class,'delete'])->name('delete')->middleware('auth');

    Route::post('blog/homePageView/{id}',[blogController::class,'homePageView'])->name('homePageView')->middleware('auth');
    Route::post('blog/sliderView/{id}',[blogController::class,'sliderView'])->name('sliderView')->middleware('auth');
    Route::post('blog/rankSetter',[blogController::class,'rankSetter'])->name('rankSetter')->middleware('auth');
    Route::post('blog/isActiveSetter/{id}',[blogController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');
});

    Route::name('Contents.')->group(function (){
        Route::get('content',[contentController::class,'index'])->name('index')->middleware('auth');
        Route::get('content/create',[contentController::class,'create'])->name('create')->middleware('auth');
        Route::post('content/store',[contentController::class,'store'])->name('store')->middleware('auth');
        Route::get('content/edit/{id}',[contentController::class,'edit'])->name('edit')->middleware('auth');
        Route::put('content/update/{id}',[contentController::class,'update'])->name('update')->middleware('auth');
        Route::post('content/delete/{id}',[contentController::class,'delete'])->name('delete')->middleware('auth');

        Route::post('content/homePageView/{id}',[contentController::class,'homePageView'])->name('homePageView')->middleware('auth');
        Route::post('content/sliderView/{id}',[contentController::class,'sliderView'])->name('sliderView')->middleware('auth');
        Route::post('content/isActiveSetter/{id}',[contentController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');
        Route::post('content/rankSetter', [contentController::class,'rankSetter'])->name('rankSetter')->middleware('auth');
    });

    Route::name('Services.')->group(function (){
        Route::get('service',[serviceController::class,'index'])->name('index')->middleware('auth');
        Route::get('service/create',[serviceController::class,'create'])->name('create')->middleware('auth');
        Route::post('service/store',[serviceController::class,'store'])->name('store')->middleware('auth');
        Route::get('service/edit/{id}',[serviceController::class,'edit'])->name('edit')->middleware('auth');
        Route::put('service/update/{id}',[serviceController::class,'update'])->name('update')->middleware('auth');
        Route::post('service/delete/{id}',[serviceController::class,'delete'])->name('delete')->middleware('auth');

        Route::post('service/homePageView/{id}',[serviceController::class,'homePageView'])->name('homePageView')->middleware('auth');
        Route::post('service/rankSetter',[serviceController::class,'rankSetter'])->name('rankSetter')->middleware('auth');
        Route::post('service/isActiveSetter/{id}',[serviceController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');
    });
    Route::name('Ports.')->group(function (){
        Route::get('portfolyo',[projectController::class,'index'])->name('index')->middleware('auth');
        Route::get('portfolyo/create',[projectController::class,'create'])->name('create')->middleware('auth');
        Route::post('portfolyo/store',[projectController::class,'store'])->name('store')->middleware('auth');
        Route::get('portfolyo/edit/{id}',[projectController::class,'edit'])->name('edit');
        Route::put('portfolyo/update/{id}',[projectController::class,'update'])->name('update')->middleware('auth');
        Route::post('portfolyo/delete/{id}',[projectController::class,'delete'])->name('delete')->middleware('auth');

        Route::post('portfolyo/rankSetter',[projectController::class,'rankSetter'])->name('rankSetter')->middleware('auth');
        Route::post('portfolyo/isActiveSetter/{id}',[projectController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');
    });
    Route::name('Packages.')->group(function (){
        Route::get('package',[packageController::class,'index'])->name('index')->middleware('auth');
        Route::get('package/create',[packageController::class,'create'])->name('create')->middleware('auth');
        Route::post('package/store',[packageController::class,'store'])->name('store')->middleware('auth');
        Route::get('package/edit/{id}',[packageController::class,'edit'])->name('edit')->middleware('auth');
        Route::put('package/update/{id}',[packageController::class,'update'])->name('update')->middleware('auth');
        Route::post('package/delete/{id}',[packageController::class,'delete'])->name('delete')->middleware('auth');

        Route::post('package/homePageView/{id}',[packageController::class,'homePageView'])->name('homePageView')->middleware('auth');
        Route::post('package/rankSetter',[packageController::class,'rankSetter'])->name('rankSetter')->middleware('auth');
        Route::post('package/isActiveSetter/{id}',[packageController::class,'isActiveSetter'])->name('isActiveSetter')->middleware('auth');
    });






});



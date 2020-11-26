
<?php

use Illuminate\Support\Facades\Route;
//Admin controller Listesi
use App\Http\Controllers\backend\Settings\settingscontroller;
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
Route::name('webSetting.')->group(function (){
    Route::get('setting',[settingscontroller::class,'index'])->name('index');
    Route::put('setting/update/{id}',[settingscontroller::class,'update'])->name('update');
});

Route::resource('business','backend\Business\businesscontroller');
//Setting Router



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
/*Route::prefix('/manager')->group(function () {
    Route::name('dashboard.')->group(function (){
        Route::get('/dashboard', [dashboardController::class, 'index'])->name('index');
    });
    Route::name('homepage.')->group(function (){
        Route::get('/homepage', [homepageController::class, 'index'])->name('index');
    });

    Route::name('blog.')->group(function (){
        Route::get('/blog',[blogController::class,'index'])->name('index');
        Route::get('/blog/create',[blogController::class,'create'])->name('create');
        Route::post('/blog/store',[blogController::class,'store'])->name('store');
        Route::get('/blog/edit/{id}',[blogController::class,'edit'])->name('edit');
        Route::put('/blog/update/{id}',[blogController::class,'update'])->name('update');
        Route::post('/blog/delete/{id}', [blogController::class, 'destroy'])->name('destroy');
        Route::post('/blog/isActiveSetter/{id}', [blogController::class, 'isActiveSetter'])->name('isActiveSetter');
        Route::post('/blog/rankSetter', [blogController::class, 'rankSetter'])->name('rankSetter');
    });
    Route::name('corparate.')->group(function (){
        Route::get('/corparate', [corparateController::class, 'index'])->name('index');
        Route::get('/corparate/create', [corparateController::class, 'create'])->name('create');
        Route::post('/corparate/store', [corparateController::class, 'store'])->name('store');
        Route::get('/corparate/edit/{id}', [corparateController::class, 'edit'])->name('edit');
        Route::put('/corparate/update/{id}', [corparateController::class, 'update'])->name('update');
        Route::post('/corparate/isActiveSetter/{id}', [corparateController::class, 'isActiveSetter'])->name('isActiveSetter');
        Route::post('/corparate/delete/{id}', [corparateController::class, 'destroy'])->name('destroy');
        Route::post('/corparate/rankSetter', [corparateController::class, 'rankSetter'])->name('rankSetter');
    });
    Route::name('certificate.')->group(function (){
        Route::get('/certificate', [certificateController::class, 'index'])->name('index');
        Route::get('/certificate/create', [certificateController::class, 'create'])->name('create');
        Route::post('/certificate/store', [certificateController::class, 'store'])->name('store');
        Route::get('/certificate/edit/{id}', [certificateController::class, 'edit'])->name('edit');
        Route::put('/certificate/update/{id}', [certificateController::class, 'update'])->name('update');
        Route::post('/certificate/delete/{id}', [certificateController::class, 'destroy'])->name('destroy');
        Route::post('/certificate/isActiveSetter/{id}', [certificateController::class, 'isActiveSetter'])->name('isActiveSetter');
        Route::name('images.')->group(function (){
            Route::get('/certificate/{slug}/images', [certificateImagesController::class, 'index'])->name('index');
            Route::get('/certificate/{slug}/images/create', [certificateImagesController::class, 'create'])->name('create');
            Route::post('/certificate/{slug}/images/store', [certificateImagesController::class, 'store'])->name('store');
            Route::get('/certificate/{slug}/images/edit/{id}', [certificateImagesController::class, 'edit'])->name('edit');
            Route::put('/certificate/{slug}/images/update/{id}', [certificateImagesController::class, 'update'])->name('update');
            Route::post('/certificate/images/delete/{id}', [certificateImagesController::class, 'destroy'])->name('destroy');
            Route::post('/certificate/images/isActiveSetter/{id}', [certificateImagesController::class, 'isActiveSetter'])->name('isActiveSetter');

        });
    });
    Route::name('jobApplication.')->group(function (){
        Route::get('/job-application', [jobApplicationController::class, 'index'])->name('index');
        Route::get('/job-application/newJobCreate', [jobApplicationController::class, 'newJobCreate'])->name('newJobCreate');
        Route::get('/job-application/newJobEdit/{id}', [jobApplicationController::class, 'newJobEdit'])->name('newJobEdit');
        Route::put('/job-application/newJobUpdate/{id}', [jobApplicationController::class, 'newJobUpdate'])->name('newJobUpdate');
        Route::post('/job-application/newJobStore', [jobApplicationController::class, 'newJobStore'])->name('newJobStore');
        Route::post('/job-application/isActiveSetter/{id}', [jobApplicationController::class, 'isActiveSetter'])->name('isActiveSetter');
        Route::post('/job-application/newJobDestroy/{id}', [jobApplicationController::class, 'newJobDestroy'])->name('newJobDestroy');

    });
    Route::name('slider.')->group(function (){
        Route::get('/slider', [sliderController::class, 'index'])->name('index');
        Route::get('/slider/create',[sliderController::class,'create'])->name('create');
        Route::post('/slider/store',[sliderController::class,'store'])->name('store');
        Route::get('/slider/edit/{id}', [sliderController::class, 'edit'])->name('edit');
        Route::put('/slider/update/{id}', [sliderController::class, 'update'])->name('update');
        Route::post('/slider/delete/{id}', [sliderController::class, 'destroy'])->name('destroy');
        Route::post('/slider/isActiveSetter/{id}', [sliderController::class, 'isActiveSetter'])->name('isActiveSetter');
        Route::post('/slider/rankSetter', [sliderController::class, 'rankSetter'])->name('rankSetter');
    });
    Route::name('service.')->group(function (){
        Route::get('/service', [serviceController::class, 'index'])->name('index');
        Route::get('/service/create', [serviceController::class, 'create'])->name('create');
        Route::post('/service/store', [serviceController::class, 'store'])->name('store');
        Route::get('/service/edit/{id}', [serviceController::class, 'edit'])->name('edit');
        Route::put('/service/update/{id}', [serviceController::class, 'update'])->name('update');
        Route::post('/service/delete/{id}', [serviceController::class, 'destroy'])->name('destroy');
        Route::post('/service/isActiveSetter/{id}', [serviceController::class, 'isActiveSetter'])->name('isActiveSetter');
    });
    Route::name('serviceClass.')->group(function (){
        Route::get('/service/class', [serviceClassController::class, 'index'])->name('index');
        Route::get('/service/class/create', [serviceClassController::class, 'create'])->name('create');
        Route::post('/service/class/store', [serviceClassController::class, 'store'])->name('store');
        Route::get('/service/class/edit/{id}', [serviceClassController::class, 'edit'])->name('edit');
        Route::put('/service/class/update/{id}', [serviceClassController::class, 'update'])->name('update');
        Route::post('/service/class/delete/{id}', [serviceClassController::class, 'destroy'])->name('destroy');
        Route::post('/service/class/isActiveSetter/{id}', [serviceClassController::class, 'isActiveSetter'])->name('isActiveSetter');
    });

    Route::name('profile.')->group(function (){
        Route::get('/profile', [profilController::class, 'index'])->name('index');
        Route::put('/profile/update/{id}', [profilController::class, 'update'])->name('update');
    });
    Route::name('webSetting.')->group(function (){
        Route::get('/web-setting', [webSettingController::class, 'index'])->name('index');
        Route::post('/web-setting',[webSettingController::class,'store'])->name('store');
    });
    Route::name('emailSetting.')->group(function (){
        Route::get('/email-setting', [mailSettingController::class, 'index'])->name('index');
        Route::post('/email-setting', [mailSettingController::class, 'store'])->name('store');
    });
    Route::name('userSetting.')->group(function (){
        Route::get('/user-setting', [userSettingController::class, 'index'])->name('index');
        Route::get('/user-setting/create', [userSettingController::class, 'create'])->name('create');
        Route::post('/user-setting/store', [userSettingController::class, 'store'])->name('store');
        Route::get('/user-setting/edit/{id}', [userSettingController::class, 'edit'])->name('edit');
        Route::put('/user-setting/update/{id}', [userSettingController::class, 'update'])->name('update');
        Route::post('/user-setting/delete/{id}', [userSettingController::class, 'destroy'])->name('destroy');
        Route::post('/user-setting/isActiveSetter/{id}', [userSettingController::class, 'isActiveSetter'])->name('isActiveSetter');
    });*/


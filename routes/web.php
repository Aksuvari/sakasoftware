
<?php

use Illuminate\Support\Facades\Route;
//Admin controller Listesi
use App\Http\Controllers\backend\Settings\settingscontroller;
use App\Http\Controllers\backend\Bussiness\businesscontroller;
use App\Http\Controllers\backend\Slider\sliderController;
use App\Http\Controllers\backend\Blog\blogController;
use App\Http\Controllers\backend\Content\contentController;
use App\Http\Controllers\backend\Service\serviceController;
use App\Http\Controllers\backend\Project\projectController;
use App\Http\Controllers\backend\Package\packageController;
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
    //Setting Router
Route::name('webSetting.')->group(function (){
    Route::get('setting',[settingscontroller::class,'index'])->name('index');
    Route::put('setting/update/{id}',[settingscontroller::class,'update'])->name('update');
});

Route::resource('business','backend\Business\businesscontroller');
Route::get('businessdelete/{id}','backend\Business\businesscontroller@delete')->name('delete');

Route::name('Sliders.')->group(function (){
    Route::get('slider/create',[sliderController::class,'create'])->name('create');
    Route::get('slider',[sliderController::class,'index'])->name('index');
    Route::post('slider/store',[sliderController::class,'store'])->name('store');
    Route::get('slider/edit/{id}',[sliderController::class,'edit'])->name('edit');
    Route::put('slider/update/{id}',[sliderController::class,'update'])->name('update');
    Route::post('slider/delete/{id}',[sliderController::class,'delete'])->name('delete');

    Route::post('slider/isActiveSetter/{id}', [sliderController::class,'isActiveSetter'])->name('isActiveSetter');
    Route::post('slider/rankSetter', [sliderController::class,'rankSetter'])->name('rankSetter');
});

Route::name('Blogs.')->group(function (){
    Route::get('blog',[blogController::class,'index'])->name('index');
    Route::get('blog/create',[blogController::class,'create'])->name('create');
    Route::post('blog/store',[blogController::class,'store'])->name('store');
    Route::get('blog/edit/{id}',[blogController::class,'edit'])->name('edit');
    Route::put('blog/update/{id}',[blogController::class,'update'])->name('update');
    Route::post('blog/delete/{id}',[blogController::class,'delete'])->name('delete');

    Route::post('blog/homePageView/{id}',[blogController::class,'homePageView'])->name('homePageView');
    Route::post('blog/sliderView/{id}',[blogController::class,'sliderView'])->name('sliderView');
    Route::post('blog/rankSetter',[blogController::class,'rankSetter'])->name('rankSetter');
    Route::post('blog/isActiveSetter/{id}',[blogController::class,'isActiveSetter'])->name('isActiveSetter');
});

    Route::name('Contents.')->group(function (){
        Route::get('content',[contentController::class,'index'])->name('index');
        Route::get('content/create',[contentController::class,'create'])->name('create');
        Route::post('content/store',[contentController::class,'store'])->name('store');
        Route::get('content/edit/{id}',[contentController::class,'edit'])->name('edit');
        Route::put('content/update/{id}',[contentController::class,'update'])->name('update');
        Route::post('content/delete/{id}',[contentController::class,'delete'])->name('delete');

        Route::post('content/homePageView/{id}',[contentController::class,'homePageView'])->name('homePageView');
        Route::post('content/sliderView/{id}',[contentController::class,'sliderView'])->name('sliderView');
        Route::post('content/isActiveSetter/{id}',[contentController::class,'isActiveSetter'])->name('isActiveSetter');
        Route::post('content/rankSetter', [contentController::class,'rankSetter'])->name('rankSetter');
    });

    Route::name('Services.')->group(function (){
        Route::get('service',[serviceController::class,'index'])->name('index');
        Route::get('service/create',[serviceController::class,'create'])->name('create');
        Route::post('service/store',[serviceController::class,'store'])->name('store');
        Route::get('service/edit/{id}',[serviceController::class,'edit'])->name('edit');
        Route::put('service/update/{id}',[serviceController::class,'update'])->name('update');
        Route::post('service/delete/{id}',[serviceController::class,'delete'])->name('delete');

        Route::post('service/homePageView/{id}',[serviceController::class,'homePageView'])->name('homePageView');
        Route::post('service/rankSetter',[serviceController::class,'rankSetter'])->name('rankSetter');
        Route::post('service/isActiveSetter/{id}',[serviceController::class,'isActiveSetter'])->name('isActiveSetter');
    });
    Route::name('Ports.')->group(function (){
        Route::get('portfolyo',[projectController::class,'index'])->name('index');
        Route::get('portfolyo/create',[projectController::class,'create'])->name('create');
        Route::post('portfolyo/store',[projectController::class,'store'])->name('store');
        Route::get('portfolyo/edit/{id}',[projectController::class,'edit'])->name('edit');
        Route::put('portfolyo/update/{id}',[projectController::class,'update'])->name('update');
        Route::post('portfolyo/delete/{id}',[projectController::class,'delete'])->name('delete');

        Route::post('portfolyo/rankSetter',[projectController::class,'rankSetter'])->name('rankSetter');
        Route::post('portfolyo/isActiveSetter/{id}',[projectController::class,'isActiveSetter'])->name('isActiveSetter');
    });
    Route::name('Packages.')->group(function (){
        Route::get('package',[packageController::class,'index'])->name('index');
        Route::get('package/create',[packageController::class,'create'])->name('create');
        Route::post('package/store',[packageController::class,'store'])->name('store');
        Route::get('package/edit/{id}',[packageController::class,'edit'])->name('edit');
        Route::put('package/update/{id}',[packageController::class,'update'])->name('update');
        Route::post('package/delete/{id}',[packageController::class,'delete'])->name('delete');

        Route::post('package/homePageView/{id}',[packageController::class,'homePageView'])->name('homePageView');
        Route::post('package/rankSetter',[packageController::class,'rankSetter'])->name('rankSetter');
        Route::post('package/isActiveSetter/{id}',[packageController::class,'isActiveSetter'])->name('isActiveSetter');
    });






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


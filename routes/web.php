<?php

use App\Http\Controllers\AdminAdmissionsController;
use App\Http\Controllers\AdminBrocherController;
use App\Http\Controllers\AdminCareersController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEnquireyController;
use App\Http\Controllers\AdminEventsController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminMediaGalleryController;
use App\Http\Controllers\AdminPlannersController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminSlidersController;
use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AdminSylabusController;
use App\Http\Controllers\AdminTestominalController;
use App\Http\Controllers\AdminVideosController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/admin/login', function () {
    return view('auth.login');
})->name('admin.login');

Route::get('/', [AdminController::class, 'homePage']);

//  for admin registration below comment uncomment karvi and above auth.login ne comment karvi
// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

Route::get('site/about', [AdminController::class, 'about'])->name('about');
Route::get('site/curriculum', [AdminController::class, 'curriculum'])->name('curriculum');
Route::get('site/facility', [AdminController::class, 'facility'])->name('facility');
Route::get('site/branches', [AdminController::class, 'branches'])->name('branches');

Route::get('site/director', [AdminController::class, 'director'])->name('director');
Route::get('site/branch_head', [AdminController::class, 'branchHead'])->name('branch_head');
Route::get('site/principal', [AdminController::class, 'principal'])->name('principal');
Route::get('site/co_ordinator', [AdminController::class, 'coOrdinator'])->name('co_ordinator');
Route::get('site/incharge', [AdminController::class, 'incharge'])->name('incharge');
Route::get('site/supervisor', [AdminController::class, 'supervisor'])->name('supervisor');

Route::get('site/teaching_staff', [AdminController::class, 'teachingStaff'])->name('teaching_staff');
Route::get('site/office_staff', [AdminController::class, 'officeStaff'])->name('office_staff');
Route::get('site/non_teaching_staff', [AdminController::class, 'nonTeachingStaff'])->name('non_teaching_staff');

Route::get('site/transport', [AdminController::class, 'transport'])->name('transport');
Route::get('site/school_uniform', [AdminController::class, 'schoolUniform'])->name('school_uniform');
Route::get('site/infrastructure', [AdminController::class, 'infrastructure'])->name('infrastructure');
Route::get('site/guidelines_toparents', [AdminController::class, 'guidelinesToparents'])->name('guidelines_toparents');
Route::get('site/parent_rolein_education', [AdminController::class, 'parentRoleinEducation'])->name('parent_rolein_education');

Route::get('site/planner', [AdminController::class, 'planner'])->name('planner');

Route::get('site/admissions', [AdminController::class, 'admissionCriteria'])->name('criteria');
Route::get('site/admission_form', [AdminController::class, 'admissionForm'])->name('admission_form');
Route::get('site/inquiry', [AdminController::class, 'inquiry'])->name('inquiry');
Route::get('site/Pay_Now', [AdminController::class, 'payNow'])->name('Pay_Now');
Route::get('site/Refund_And_Cancel_Policy', [AdminController::class, 'refundAndCancelPolicy'])->name('Refund_And_Cancel_Policy');
Route::get('site/career', [AdminController::class, 'career'])->name('career');

Route::get('site/syllabus', [AdminController::class, 'syllabus'])->name('syllabus');

Route::get('site/academic_activity', [AdminController::class, 'academicActivity'])->name('academic_activity');
Route::get('site/extra_activity', [AdminController::class, 'extraActivity'])->name('extra_activity');

Route::get('site/photo_gallery', [AdminController::class, 'photoGallery'])->name('photo_gallery');
Route::get('site/media_gallery', [AdminController::class, 'mediaGallery'])->name('media_gallery');
Route::get('site/video_gallery', [AdminController::class, 'videoGallery'])->name('video_gallery');

Route::get('site/event', [AdminController::class, 'event'])->name('event');
Route::get('site/achievements', [AdminController::class, 'achievements'])->name('achievements');

Route::get('site/contact', [AdminController::class, 'contact'])->name('contact');

Route::post('/contactstore', [AdminController::class, 'storeContact'])->name('storeContact');
Route::post('/inquireystore', [AdminController::class, 'storeInquiry'])->name('storeInquiry');
Route::post('/careerstore', [AdminController::class, 'storeCareer'])->name('storecareer');
Route::post('/admissionformstore', [AdminController::class, 'storeAdmission'])->name('storeadmission');

// Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'usersession']], function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/profile/{id}', [AdminController::class, 'profiledit'])->name('profile.edit');
    Route::post('/profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');

    Route::get("admin/slider", [AdminSlidersController::class, 'index'])->name('admin.slider.index');
    Route::get('admin/slider/create', [AdminSlidersController::class, 'create'])->name('admin.slider.create');
    Route::post('admin/slider/store', [AdminSlidersController::class, 'store'])->name('admin.slider.store');
    Route::get('admin/slider/edit/{id}', [AdminSlidersController::class, 'edit'])->name('admin.slider.edit');
    Route::patch('admin/slider/update/{id}', [AdminSlidersController::class, 'update'])->name('admin.slider.update');
    Route::get('admin/slider/destroy/{id}', [AdminSlidersController::class, 'destroy'])->name('admin.slider.destroy');
    Route::delete('/mysliderDeleteAll', [AdminSlidersController::class, 'deleteSliderAll'])->name('deletesliderAll');
    Route::get("admin/slider/active/{id}", [AdminSlidersController::class, 'sliderActive'])->name('admin.slider.active');

    Route::get("admin/testomonial", [AdminTestominalController::class, 'index'])->name('admin.testomonial.index');
    Route::get('admin/testomonial/create', [AdminTestominalController::class, 'create'])->name('admin.testomonial.create');
    Route::post('admin/testomonial/store', [AdminTestominalController::class, 'store'])->name('admin.testomonial.store');
    Route::get('admin/testomonial/edit/{id}', [AdminTestominalController::class, 'edit'])->name('admin.testomonial.edit');
    Route::patch('admin/testomonial/update/{id}', [AdminTestominalController::class, 'update'])->name('admin.testomonial.update');
    Route::get('admin/testomonial/destroy/{id}', [AdminTestominalController::class, 'destroy'])->name('admin.testomonial.destroy');
    Route::delete('/mytestomonialDeleteAll', [AdminTestominalController::class, 'deleteTestomonialAll'])->name('deletetestomonialAll');
    Route::get("admin/testomonial/searchtestompnial", [AdminTestominalController::class, 'searchTestomonial'])->name('admin.testomonial.search');
    Route::get('admin/testomonial/statusupdate/{id}', [AdminTestominalController::class, 'statusUpdate'])->name('admin.testomonial.status');

    Route::get("admin/staff", [AdminStaffController::class, 'index'])->name('admin.staff.index');
    Route::get('admin/staff/create', [AdminStaffController::class, 'create'])->name('admin.staff.create');
    Route::post('admin/staff/store', [AdminStaffController::class, 'store'])->name('admin.staff.store');
    Route::get('admin/staff/edit/{id}', [AdminStaffController::class, 'edit'])->name('admin.staff.edit');
    Route::patch('admin/staff/update/{id}', [AdminStaffController::class, 'update'])->name('admin.staff.update');
    Route::get('admin/staff/destroy/{id}', [AdminStaffController::class, 'destroy'])->name('admin.staff.destroy');
    Route::delete('/mystaffDeleteAll', [AdminStaffController::class, 'deleteStaffAll'])->name('deletestaffAll');
    Route::get("admin/staff/active/{id}", [AdminStaffController::class, 'staffActive'])->name('admin.staff.active');
    Route::get("admin/staff/searchstaff", [AdminStaffController::class, 'searchStaff'])->name('admin.staff.search');

    Route::get("admin/galleryimage", [AdminGalleryController::class, 'index'])->name('admin.galleryimage.index');
    Route::get('admin/galleryimage/create', [AdminGalleryController::class, 'create'])->name('admin.galleryimage.create');
    Route::post('admin/galleryimage/store', [AdminGalleryController::class, 'store'])->name('admin.galleryimage.store');
    Route::get('admin/galleryimage/edit/{id}', [AdminGalleryController::class, 'edit'])->name('admin.galleryimage.edit');
    Route::patch('admin/galleryimage/update/{id}', [AdminGalleryController::class, 'update'])->name('admin.galleryimage.update');
    Route::get('admin/galleryimage/destroy/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.galleryimage.destroy');
    Route::delete('/mygalleryimageDeleteAll', [AdminGalleryController::class, 'deleteGalleryAll'])->name('deletegalleryAll');
    Route::get("admin/gallery/active/{id}", [AdminGalleryController::class, 'galleryActive'])->name('admin.gallery.active');

    Route::get("admin/videos", [AdminVideosController::class, 'index'])->name('admin.videos.index');
    Route::get('admin/videos/create', [AdminVideosController::class, 'create'])->name('admin.videos.create');
    Route::post('admin/videos/store', [AdminVideosController::class, 'store'])->name('admin.videos.store');
    Route::get('admin/videos/edit/{id}', [AdminVideosController::class, 'edit'])->name('admin.videos.edit');
    Route::patch('admin/videos/update/{id}', [AdminVideosController::class, 'update'])->name('admin.videos.update');
    Route::get('admin/videos/destroy/{id}', [AdminVideosController::class, 'destroy'])->name('admin.videos.destroy');
    Route::delete('/myvideosDeleteAll', [AdminVideosController::class, 'deleteVideosAll'])->name('deletevideosAll');
    Route::get("admin/video/active/{id}", [AdminVideosController::class, 'videoActive'])->name('admin.gallery.active');

    Route::get("admin/mediagalleryimage", [AdminMediaGalleryController::class, 'index'])->name('admin.mediagalleryimage.index');
    Route::get('admin/mediagalleryimage/create', [AdminMediaGalleryController::class, 'create'])->name('admin.mediagalleryimage.create');
    Route::post('admin/mediagalleryimage/store', [AdminMediaGalleryController::class, 'store'])->name('admin.mediagalleryimage.store');
    Route::get('admin/mediagalleryimage/edit/{id}', [AdminMediaGalleryController::class, 'edit'])->name('admin.mediagalleryimage.edit');
    Route::patch('admin/mediagalleryimage/update/{id}', [AdminMediaGalleryController::class, 'update'])->name('admin.mediagalleryimage.update');
    Route::get('admin/mediagalleryimage/destroy/{id}', [AdminMediaGalleryController::class, 'destroy'])->name('admin.mediagalleryimage.destroy');
    Route::delete('/mymediagalleryimageDeleteAll', [AdminMediaGalleryController::class, 'deleteMediaGalleryAll'])->name('deletemediagalleryAll');
    Route::get("admin/mediagallery/active/{id}", [AdminMediaGalleryController::class, 'mediagalleryActive'])->name('admin.mediagallery.active');

    Route::get("admin/activity", [AdminProductsController::class, 'index'])->name('admin.activity.index');
    Route::get('admin/activity/create', [AdminProductsController::class, 'create'])->name('admin.activity.create');
    Route::post('admin/activity/store', [AdminProductsController::class, 'store'])->name('admin.activity.store');
    Route::get('admin/activity/edit/{id}', [AdminProductsController::class, 'edit'])->name('admin.activity.edit');
    Route::patch('admin/activity/update/{id}', [AdminProductsController::class, 'update'])->name('admin.activity.update');
    Route::get('admin/activity/destroy/{id}', [AdminProductsController::class, 'destroy'])->name('admin.activity.destroy');
    Route::delete('/myactivityDeleteAll', [AdminProductsController::class, 'deleteActivityAll'])->name('deleteactivityAll');

    Route::get("admin/activity/searchactivity", [AdminProductsController::class, 'searchActivity'])->name('admin.searchactivity.search');

    Route::get("admin/activity/active/{id}", [AdminProductsController::class, 'activityActive'])->name('admin.activity.active');
    Route::get("admin/activity/search/{id}", [AdminProductsController::class, 'categoryActivity'])->name('admin.activity.search');

    Route::get("admin/brocher", [AdminBrocherController::class, 'index'])->name('admin.brocher.index');
    Route::get('admin/brocher/create', [AdminBrocherController::class, 'create'])->name('admin.brocher.create');
    Route::post('admin/brocher/store', [AdminBrocherController::class, 'store'])->name('admin.brocher.store');
    Route::get('admin/brocher/edit/{id}', [AdminBrocherController::class, 'edit'])->name('admin.brocher.edit');
    Route::patch('admin/brocher/update/{id}', [AdminBrocherController::class, 'update'])->name('admin.brocher.update');
    Route::get('admin/brocher/destroy/{id}', [AdminBrocherController::class, 'destroy'])->name('admin.brocher.destroy');

    Route::get("admin/planner", [AdminPlannersController::class, 'index'])->name('admin.planner.index');
    Route::get('admin/planner/create', [AdminPlannersController::class, 'create'])->name('admin.planner.create');
    Route::post('admin/planner/store', [AdminPlannersController::class, 'store'])->name('admin.planner.store');
    Route::get('admin/planner/edit/{id}', [AdminPlannersController::class, 'edit'])->name('admin.planner.edit');
    Route::patch('admin/planner/update/{id}', [AdminPlannersController::class, 'update'])->name('admin.planner.update');
    Route::get('admin/planner/destroy/{id}', [AdminPlannersController::class, 'destroy'])->name('admin.planner.destroy');

    Route::get("admin/event", [AdminEventsController::class, 'index'])->name('admin.event.index');
    Route::get('admin/event/create', [AdminEventsController::class, 'create'])->name('admin.event.create');
    Route::post('admin/event/store', [AdminEventsController::class, 'store'])->name('admin.event.store');
    Route::get('admin/event/edit/{id}', [AdminEventsController::class, 'edit'])->name('admin.event.edit');
    Route::patch('admin/event/update/{id}', [AdminEventsController::class, 'update'])->name('admin.event.update');
    Route::get('admin/event/destroy/{id}', [AdminEventsController::class, 'destroy'])->name('admin.event.destroy');
    Route::delete('/myeventDeleteAll', [AdminEventsController::class, 'deleteEventAll'])->name('deleteeventAll');
    Route::get("admin/event/active/{id}", [AdminGalleryController::class, 'eventActive'])->name('admin.event.active');

    Route::get('admin/contact', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('admin/contact/create', [AdminContactController::class, 'create'])->name('admin.contact.create');
    Route::post('admin/contact/store', [AdminContactController::class, 'store'])->name('admin.contact.store');
    Route::get('admin/contact/edit/{id}', [AdminContactController::class, 'edit'])->name('admin.contact.edit');
    Route::patch('admin/contact/update/{id}', [AdminContactController::class, 'update'])->name('admin.contact.update');
    Route::get('admin/contact/destroy/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
    Route::delete('/mycontactDeleteAll', [AdminContactController::class, 'mycontactDeleteAll'])->name('mycontactDeleteAll');

    Route::get('admin/enquirey', [AdminEnquireyController::class, 'index'])->name('admin.enquirey');
    Route::get('admin/enquirey/create', [AdminEnquireyController::class, 'create'])->name('admin.enquirey.create');
    Route::post('admin/enquirey/store', [AdminEnquireyController::class, 'store'])->name('admin.enquirey.store');
    Route::get('admin/enquirey/edit/{id}', [AdminEnquireyController::class, 'edit'])->name('admin.enquirey.edit');
    Route::patch('admin/enquirey/update/{id}', [AdminEnquireyController::class, 'update'])->name('admin.enquirey.update');
    Route::get('admin/enquirey/destroy/{id}', [AdminEnquireyController::class, 'destroy'])->name('admin.enquirey.destroy');

    Route::get('admin/admission', [AdminAdmissionsController::class, 'index'])->name('admin.admission');
    Route::get('admin/admission/create', [AdminAdmissionsController::class, 'create'])->name('admin.admission.create');
    Route::post('admin/admission/store', [AdminAdmissionsController::class, 'store'])->name('admin.admission.store');
    Route::get('admin/admission/edit/{id}', [AdminAdmissionsController::class, 'edit'])->name('admin.admission.edit');
    Route::patch('admin/admission/update/{id}', [AdminAdmissionsController::class, 'update'])->name('admin.admission.update');
    Route::get('admin/admission/destroy/{id}', [AdminAdmissionsController::class, 'destroy'])->name('admin.admission.destroy');

    Route::get('admin/career', [AdminCareersController::class, 'index'])->name('admin.career');
    Route::get('admin/career/create', [AdminCareersController::class, 'create'])->name('admin.career.create');
    Route::post('admin/career/store', [AdminCareersController::class, 'store'])->name('admin.career.store');
    Route::get('admin/career/edit/{id}', [AdminCareersController::class, 'edit'])->name('admin.career.edit');
    Route::patch('admin/career/update/{id}', [AdminCareersController::class, 'update'])->name('admin.career.update');
    Route::get('admin/career/destroy/{id}', [AdminCareersController::class, 'destroy'])->name('admin.career.destroy');

    Route::get("admin/sylabus", [AdminSylabusController::class, 'index'])->name('admin.sylabus.index');
    Route::get('admin/sylabus/create', [AdminSylabusController::class, 'create'])->name('admin.sylabus.create');
    Route::post('admin/sylabus/store', [AdminSylabusController::class, 'store'])->name('admin.sylabus.store');
    Route::get('admin/sylabus/edit/{id}', [AdminSylabusController::class, 'edit'])->name('admin.sylabus.edit');
    Route::match(['patch', 'post'], 'admin/sylabus/update/{id}', [AdminSylabusController::class, 'update'])->name('admin.sylabus.update');
    Route::get('admin/sylabus/destroy/{id}', [AdminSylabusController::class, 'destroy'])->name('admin.sylabus.destroy');
    Route::delete('/mySylabusDeleteAll', [AdminSylabusController::class, 'deleteSylabusAll'])->name('deletesylabusAll');
    Route::get("admin/sylabus/active/{id}", [AdminSylabusController::class, 'sylabusActive'])->name('admin.sylabus.active');
});

//Clear Cache facade value:
Route::get('/admin/clear-cache', function () {
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Reoptimized class loader:
Route::get('/admin/optimize', function () {
    Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/admin/route-cache', function () {
    Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/admin/route-clear', function () {
    Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/admin/view-clear', function () {
    Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/admin/config-cache', function () {
    Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

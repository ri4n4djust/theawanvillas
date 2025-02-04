<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin-gallery', [App\Http\Controllers\villaController::class , 'adminGallery'])->name('admin.gallery');
});

require __DIR__.'/auth.php';



Route::get('/', [App\Http\Controllers\villaController::class , 'home']);

Route::get('/one-bedroom', [App\Http\Controllers\villaController::class , 'oneBedroom']);
Route::get('/two-bedroom', [App\Http\Controllers\villaController::class , 'twoBedroom']);

Route::get('/dining', [App\Http\Controllers\villaController::class , 'dining']);
Route::get('/gallery', [App\Http\Controllers\villaController::class , 'gallery']);

Route::get('/last-minute', [App\Http\Controllers\villaController::class , 'lastMinute']);
Route::get('/hot-deals', [App\Http\Controllers\villaController::class , 'hotDeals']);
Route::get('/early-bird', [App\Http\Controllers\villaController::class , 'earlyBird']);
Route::get('/two-night-honeymoon', [App\Http\Controllers\villaController::class , 'twoNightHoneymoon']);
Route::get('/three-night-honeymoon', [App\Http\Controllers\villaController::class , 'threeNightHoneymoon']);
Route::get('/family-package', [App\Http\Controllers\villaController::class , 'familyPackage']);

Route::get('/sitemap', function(){
    $sitemap = Sitemap::create()
    ->add(Url::create('/one-bedroom'))
    ->add(Url::create('/two-bedroom'))
    ->add(Url::create('/dining'))
    ->add(Url::create('/gallery'))
    ->add(Url::create('/last-minute'))
    ->add(Url::create('/hot-deals'))
    ->add(Url::create('/early-bird'))
    ->add(Url::create('/two-night-honeymoon'))
    ->add(Url::create('/three-night-honeymoon'))
    ->add(Url::create('/family-package'));
    $sitemap->writeToFile(public_path('sitemap.xml'));
   
    // $book = Booking::all();
    // foreach ($book as $book) {
    //     $sitemap->add(Url::create("/bookings/{$book->slug}"));
    // }
    // $sitemap->writeToFile(public_path('sitemap.xml'));

    // $activities = DB::table('activities')->get();
    // foreach ($activities as $act) {
    //     $sitemap->add(Url::create("/activities/{$act->slug}"));
    // }
    // $sitemap->writeToFile(public_path('sitemap.xml'));

    // $destinasi = DB::table('destinations')->get();
    // foreach ($destinasi as $des) {
    //     $sitemap->add(Url::create("/destinations/{$des->slug}"));
    // }
    // $sitemap->writeToFile(public_path('sitemap.xml'));

    // $tour = TourPackage::all();
    // foreach ($tour as $tur) {
    //     $sitemap->add(Url::create("/tour_packages/{$tur->slug}"));
    // }
    

    
}); 
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\HaircutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\CombineController;
use App\Http\Controllers\BookingController;
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

// ------------- ROUTE UNTUK SEMUA ------------

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[ProductController::class, 'getsemua']);

//-----------------------------------------------------

//-----------------------ROUTE USER------------------------------

Route::get('/booking',[BookingController::class, 'bookingjam'])->middleware(['auth', 'verified', 'role:user'])->name('booking');
Route::get('/bookingPotongan', function () {
    return view('bookingPotongan');
})->middleware(['auth', 'verified', 'role:user'])->name('bookingPotongan');
Route::get('/bookingKonfirmasi/{jam}/{id}', [BookingController::class, 'confirmbook'])->middleware(['auth', 'verified'])->name('confirmbook');
Route::get('/bookingberhasil',[BookingController::class, 'bookingBerhasil'])->middleware(['auth', 'verified'])->name('bookingberhasil');
Route::get('/dashboard',[ProductController::class, 'getAll'])->middleware(['auth', 'verified', 'role:user'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/lihatUser', function () {
    return view('kasir.userShow');
})->middleware(['auth', 'verified', 'role:kasir'])->name('lihatUser');
Route::get('/tampilUser', [userController::class, 'show'])->name('tampilUser');
Route::get('/userDelete/{id}', [userController::class, 'destroy'])->name('userDelete');

//-----------------------------------------------------


// ------------- ROUTE UNTUK KASIR ------------

Route::get('/dashboardadmin', function () {
    return view('kasir.dashboardadmin');
})->middleware(['auth', 'verified', 'role:kasir'])->name('dashboardadmin');

//------------------------------------------------------


// ------------- ROUTE UNTUK RAMBUT ------------

Route::get('/rambut', function () {
    return view('kasir.rambut');
})->middleware(['auth', 'verified', 'role:kasir'])->name('rambut');
Route::get('/rambutTambah',[HaircutController::class, 'index'])->middleware(['auth', 'verified', 'role:kasir'])->name('rambutTambah');
Route::post('/rambutStore',[HaircutController::class, 'store'])->middleware(['auth', 'verified', 'role:kasir'])->name('rambutStore');
Route::get('/getRambutAll', [HaircutController::class, 'getRambutAll'])->name('getRambutAll');
Route::get('/rambutDelete/{id}', [HaircutController::class, 'destroy'])->middleware(['auth', 'verified', 'role:kasir'])->name('rambutDelete');
Route::post('/rambutUpdate/{id}', [HaircutController::class, 'update'])->middleware(['auth', 'verified', 'role:kasir'])->name('rambutUpdate');
Route::get('/rambutEdit/{id}', [HaircutController::class, 'edit'])->middleware(['auth', 'verified', 'role:kasir'])->name('rambutEdit');
Route::get('/getHaircut/{jam}', [HaircutController::class, 'getHaircut'])->middleware(['auth', 'verified', 'role:user'])->name('getHaircut');

//-----------------ROUTE PRODUK--------------------------

Route::get('/produk', function () {
    return view('kasir.produk');
})->middleware(['auth', 'verified', 'role:kasir'])->name('produk');
Route::get('/productTambah',[ProductController::class, 'index'])->middleware(['auth', 'verified', 'role:kasir'])->name('ProductTambah');
Route::post('/produkStore',[ProductController::class, 'store'])->middleware(['auth', 'verified', 'role:kasir'])->name('produkStore');
Route::get('/getProdukAll', [ProductController::class, 'getProdukAll'])->name('getProdukAll');
Route::get('/produkDelete/{id}', [ProductController::class, 'destroy'])->middleware(['auth', 'verified', 'role:kasir'])->name('produkDelete');
Route::post('/produkUpdate/{id}', [ProductController::class, 'update'])->middleware(['auth', 'verified', 'role:kasir'])->name('produkUpdate');
Route::get('/produkEdit/{id}', [ProductController::class, 'edit'])->middleware(['auth', 'verified', 'role:kasir'])->name('produkEdit');

//-----------------------------------------------------

//-----------------ROUTE BARBER--------------------------

Route::get('/barber', function () {
    return view('kasir.barber');
})->middleware(['auth', 'verified', 'role:kasir'])->name('barber');
Route::get('/barberTambah',[BarberController::class, 'index'])->middleware(['auth', 'verified', 'role:kasir'])->name('barberTambah');
Route::post('/barberStore',[BarberController::class, 'store'])->middleware(['auth', 'verified', 'role:kasir'])->name('barberStore');
Route::get('/getBarberAll', [BarberController::class, 'getBarberAll'])->middleware(['auth', 'verified', 'role:kasir'])->name('getBarberAll');
Route::get('/barberDelete/{id}', [BarberController::class, 'destroy'])->middleware(['auth', 'verified', 'role:kasir'])->name('barberDelete');
Route::get('/barberEdit/{id}', [BarberController::class, 'edit'])->middleware(['auth', 'verified', 'role:kasir'])->name('barberEdit');
Route::post('/barberUpdate/{id}', [BarberController::class, 'update'])->middleware(['auth', 'verified', 'role:kasir'])->name('barberUpdate');
Route::get('/tampilbarber', [BarberController::class, 'show'])->middleware(['auth', 'verified', 'role:kasir'])->name('tampilbarber');

Route::get('/tampilBooking', [BookingController::class, 'show'])->middleware(['auth', 'verified', 'role:kasir'])->name('tampilBooking');
Route::get('/bookingEdit/{id}', [BookingController::class, 'edit'])->middleware(['auth', 'verified', 'role:kasir'])->name('bookingEdit');
Route::get('/bookingDelete/{id}', [BookingController::class, 'destroy'])->middleware(['auth', 'verified', 'role:kasir'])->name('bookingDelete');
Route::post('/bookingStore', [BookingController::class, 'store'])->middleware(['auth', 'verified', 'role:kasir'])->name('bookingStore');
Route::get('/tampilProduct', [ProductController::class, 'show'])->middleware(['auth', 'verified', 'role:kasir'])->name('tampilProduct');
Route::get('/tampilrambut', [HaircutController::class, 'show'])->middleware(['auth', 'verified', 'role:kasir'])->name('tampilrambut');
Route::get('/bookingTambah', [BookingController::class, 'index'])->middleware(['auth', 'verified', 'role:kasir'])->name('tampilBooking');
Route::post('/isi', [BookingController::class, 'storeBooking'])->middleware(['auth', 'verified', 'role:user'])->name('isiBooking');

//-----------------------------------------------------------

Route::post('/userStore', [userController::class, 'store'])->middleware(['auth', 'verified', 'role:kasir'])->name('userStore');

Route::get('/userTambah', function () {
    return view('kasir.tambahUser');
})->middleware(['auth', 'verified', 'role:kasir'])->name('userTambah');



require __DIR__.'/auth.php';

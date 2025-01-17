<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DhuhaController;
use App\Http\Controllers\PesertaAktifController;
use App\Http\Controllers\OnBoardingController;
use App\Http\Controllers\obprivatecontroller;
use App\Http\Controllers\JoggingController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\SactionController;
use App\Http\Controllers\ZuminController;
use App\Http\Controllers\ZumatController;


    // Route Login
    Route::get('/login', [LoginController::class,'showLogin'])->name('login');
    Route::post('/actionLogin', [LoginController::class,'actionLogin'])->name('actionLogin');
    Route::get('/logout', [LoginController::class,'Logout'])->name('Logout');

    // Middleware Auth
    Route::middleware(['auth'])->group(function() {
    // Dashboard
    Route::get('/', [DashboardController::class,'index']);

    // User Management
    Route::get('/user', [UserController::class,'index']);
    Route::get('/user/tambah', [UserController::class,'create']);
    Route::post('/user/simpan', [UserController::class,'store']);
    Route::get('/user/{id}/edit', [UserController::class,'edit']);
    Route::post('/user/{id}/update', [UserController::class,'update']);
    Route::get('/user/{id}/delete', [UserController::class,'destroy']);

        // Rute untuk menampilkan daftar onboarding
    Route::get('/onboarding', [OnBoardingController::class, 'index'])->name('onboarding.index');

    // Rute untuk menampilkan form untuk menambah onboarding
    Route::get('/onboarding/tambah', [OnBoardingController::class, 'create'])->name('onboarding.create');

    // Rute untuk menyimpan data onboarding baru
    Route::post('/onboarding/simpan', [OnBoardingController::class, 'store'])->name('onboarding.store');

    // Rute untuk menampilkan detail onboarding berdasarkan ID
    Route::get('/onboarding/{id}/show', [OnBoardingController::class, 'show'])->name('onboarding.show');

    // Rute untuk menampilkan form edit untuk onboarding
    Route::get('/onboarding/{id}/edit', [OnBoardingController::class, 'edit'])->name('onboarding.edit');

    // Rute untuk memperbarui data onboarding berdasarkan ID
    Route::put('/onboarding/{id}', [OnBoardingController::class, 'update'])->name('onboarding.update');

    // Rute untuk menghapus data onboarding berdasarkan ID
    Route::delete('/onboarding/{id}', [OnBoardingController::class, 'destroy'])->name('onboarding.destroy');

    Route::get('/onboardingprivate',[obprivateController::class,'index']);
    Route::get('/onboardingprivate/tambah',[obprivateController::class,'create']);
    // Route::post('/onboardingprivate/simpan',[obprivateController::class,'store']);
    Route::post('/onboardingprivate/simpan', [obprivateController::class, 'store'])->name('onboardingprivate.store');
    Route::get('/onboardingprivate/{id}/show',[obprivateController::class,'show']);
    Route::get('/onboardingprivate/{id}/edit', [obprivateController::class, 'edit']); // Menampilkan form edit
    Route::put('/onboardingprivate/{id}', [obprivatecontroller::class, 'update'])->name('onboardingprivate.update');
    Route::delete('/onboardingprivate/{id}', [obprivateController::class, 'destroy'])->name('onboardingprivate.destroy');


    //dhuha
    Route::get('/dhuha', [DhuhaController::class,'index']);
    Route::get('/dhuha/form', [DhuhaController::class, 'showForm']);
    Route::post('/dhuha/simpan', [DhuhaController::class, 'store'])->name('home.dhuha.store');
    Route::get('/dhuha/{id}/detail', [DhuhaController::class,'detail']);

    //paktif
    Route::get('/paktif', [PesertaAktifController::class,'index']);
    Route::get('/paktif/tambah', [PesertaAktifController::class,'create']);
    Route::post('/paktif/simpan', [PesertaAktifController::class,'store']);

        //jogging
        Route::get('/jogging', [JoggingController::class,'index']);
        Route::get('/jogging/form', [JoggingController::class, 'showForm']);
        Route::post('/jogging/simpan', [JoggingController::class, 'store'])->name('home.jogging.store');

        //lunch
        Route::get('/lunch', [LunchController::class,'index']);
        Route::get('/lunch/form', [LunchController::class, 'showForm']);
        Route::post('/lunch/simpan', [LunchController::class, 'store'])->name('home.lunch.store');

        //Zumba senin
        Route::get('/zumin', [ZuminController::class,'index']);
        Route::get('/zumin/form', [ZuminController::class, 'showForm']);
        Route::post('/zumin/simpan', [ZuminController::class, 'store'])->name('home.zumin.store');

        //Zumba jumat
        Route::get('/zumat', [ZumatController::class,'index']);
        Route::get('/zumat/form', [ZumatController::class, 'showForm']);
        Route::post('/zumat/simpan', [ZumatController::class, 'store'])->name('home.zumat.store');

        //Zumba jumat
        Route::get('/saction', [SactionController::class,'index']);
        Route::get('/saction/form', [SactionController::class, 'showForm']);
        Route::post('/saction/simpan', [SactionController::class, 'store'])->name('home.saction.store');



    // Maintenance Routes
    // Route::get('/jogging', function () {
    //     return view('absen_maintenance.jogging');
    // });
    // // Route::get('/dhuha', function () {
    // //     return view('absen_maintenance.dhuha');
    // // });
    // Route::get('/lunch', function () {
    //     return view('absen_maintenance.lunch');
    // });
    // Route::get('/zumat', function () {
    //     return view('absen_maintenance.zumat');
    // });
    // Route::get('/zumnin', function () {
    //     return view('absen_maintenance.zumnin');
    // });
    // Route::get('/saction', function () {
    //     return view('absen_maintenance.saction');
    // });
    // // Route::get('/paktif', function () {
    // //     return view('absen_maintenance.paktif');
    // // });

    // // Form Absen
    // Route::get('/form-absen', function () {
    //     return view('form-absen'); // Ganti dengan nama file Blade Anda
    // });
    // Route::post('/submit-absen', function (Request $request) {
    //     $data = $request->validate([
    //         'id_presensi' => 'required',
    //         'nama' => 'required',
    //         'tanggal' => 'required|date',
    //         'presensi' => 'required', // Akan berisi "Hadir" atau "Tidak Hadir"
    //     ]);

    //     // Simpan data ke database atau proses sesuai kebutuhan
    //     return back()->with('success', 'Absen berhasil disimpan!');
    // });


});

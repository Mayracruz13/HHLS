<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;


Route::get('/', function () {
    return view('login');
});

Route::get('inicio', function () {
    return view('inicio');
});


Route::get('single', function () {
    return view('single');
});



Route::get('destinatation', function () {
    return view('destinatation');
});

Route::get('participacion', function () {
    return view('participacion');
});

Route::get('donar', function () {
    return view('donar');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('registro', function () {
    return view('registro');
});


use App\Http\Controllers\RegistrationController;

Route::get('/registro', [RegistrationController::class, 'create'])->name('registro.create');
Route::post('/registro', [RegistrationController::class, 'store'])->name('registro.store');


// routes/web.php

use App\Http\Controllers\FileUploadController;

// Ruta para mostrar el formulario de carga, requiere autenticación
Route::middleware('auth')->group(function () {
    Route::get('/upload', [FileUploadController::class, 'showUploadForm'])->name('upload.form');
    Route::post('/upload', [FileUploadController::class, 'storeUploads'])->name('upload.store');
    Route::delete('/upload/{id}', [FileUploadController::class, 'deleteFile'])->name('files.delete');
});

// Ruta para mostrar la lista de archivos (voluntarios) sin requerir autenticación
Route::get('/voluntarios', [FileUploadController::class, 'showFiles'])->name('files.show');


use App\Http\Controllers\ActivityController;

// Ruta pública para mostrar la vista de participación
Route::get('/participacion', [ActivityController::class, 'participacion'])->name('activities.participacion');

// Rutas que requieren autenticación para crear y manejar actividades
Route::middleware('auth')->group(function () {
    // Muestra la vista para crear una nueva actividad
    Route::get('/create', [ActivityController::class, 'create'])->name('activities.create');

    // Maneja la carga de nuevas actividades
    Route::post('/create', [ActivityController::class, 'store'])->name('activities.store');

    // Maneja la eliminación de actividades
    Route::delete('/create/{id}', [ActivityController::class, 'destroy'])->name('activities.destroy');
});


// routes/web.php

use App\Http\Controllers\ContribuyenteController;

// Ruta pública para guardar contribuyente
Route::post('/guardar-contribuyente', [ContribuyenteController::class, 'guardar'])->name('guardar.contribuyente');

// Ruta pública para la página de donación
Route::get('/donacion', function () {
    return view('donacion');
});

// Ruta pública para la página de pago
Route::get('/pay', function () {
    return view('pay');
});

// Rutas que requieren autenticación para ver contribuyentes
Route::middleware('auth')->group(function () {
    Route::get('/ver-contribuyentes', [ContribuyenteController::class, 'index'])->name('ver.contribuyentes');
});








use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;


Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // Ruta para el dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rutas de autenticación
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';



use App\Http\Controllers\DocumentController;

// Rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::get('/documents', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');
    Route::delete('/documents/{id}', [DocumentController::class, 'destroy'])->name('documents.destroy');
});

// Ruta para mostrar la lista de documentos en la vista principal sin requerir autenticación
Route::get('/destinatation', [DocumentController::class, 'index'])->name('documents.index');


use App\Http\Controllers\PdfController;

// Rutas para manejar PDFs con autenticación
Route::middleware('auth')->group(function () {
    Route::get('/pdfs', [PdfController::class, 'index'])->name('pdfs.index');
    Route::post('/pdfs', [PdfController::class, 'store'])->name('pdfs.store');
    Route::delete('/pdfs/{id}', [PdfController::class, 'destroy'])->name('pdfs.destroy');
});

// Ruta para mostrar el PDF sin requerir autenticación
Route::get('/single', [PdfController::class, 'show'])->name('single.show');


use App\Http\Controllers\RegistroController;

// Mostrar el formulario de registro
Route::get('/registro', [RegistroController::class, 'create'])->name('registro.create');

// Guardar el registro de voluntarios
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');

// Mostrar la lista de voluntarios registrados, requiere autenticación
Route::get('/unidos', [RegistroController::class, 'index'])->name('registro.index')->middleware('auth');


use App\Http\Controllers\PaymentController;

Route::get('pago', [PaymentController::class, 'showPaymentForm'])->name('paypal.pago');
Route::post('pago/pay', [PaymentController::class, 'payWithPayPal'])->name('paypal.pay');
Route::get('pago/status', [PaymentController::class, 'getPaymentStatus'])->name('paypal.status');

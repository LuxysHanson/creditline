<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\PageBlockController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfController;
use App\Http\Middleware\ForceJsonResponse;
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

Route::controller(PageController::class)
    ->group(function () {
        Route::get('/', 'home');
        Route::get('/form', 'form')->name('form');
        Route::get('/locale/set/{locale}', 'setLocale')->name('locale.set');
    });

Route::prefix('pdf')
    ->controller(PdfController::class)
    ->name('pdf.')
    ->group(function () {
        Route::get('/download', 'index')->name('generate');
    });

Route::prefix('ajax')
    ->name('ajax.')
    ->middleware(ForceJsonResponse::class)
    ->group(function () {

        # File Manager
        Route::prefix('file')->group(function () {
            Route::post('/store', [FileManagerController::class, 'store'])->name('file.store');
            Route::post('/destroy', [FileManagerController::class, 'destroy'])->name('file.destroy');
            Route::post('/imageRotate', [FileManagerController::class, 'imageRotate'])->name('file.rotate');
        });

        # SMS
        Route::post('/application/send-sms', [AjaxController::class, 'sendSms']);
        Route::post('/application/check-code', [AjaxController::class, 'checkCode']);

        # send Application
        Route::post('/application/create',[AjaxController::class, 'createApplication']);
        Route::post('/application/form-data',[AjaxController::class, 'formData']);

    });

/**
 * Admin Panel - routes
 */

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/page-blocks/delete-media',[PageBlockController::class, 'removeMedia'])->name('voyager.page-blocks.media-remove');
});

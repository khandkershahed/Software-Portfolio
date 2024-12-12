<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PageBannerController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\PasswordController;

use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;

use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\CompanyClientController;
use App\Http\Controllers\Admin\CompanyDataController;
use App\Http\Controllers\Admin\ServiceController;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware(['auth:admin'])->prefix('/admin')->name('admin.')->group(function () {

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('check-password', [PasswordController::class, 'checkPassword'])->name('checkPassword');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['verified'])->name('dashboard');

    ////////////// For Crud Operation ////////////////////

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'updateOrcreateSetting'])->name('settings.updateOrCreate');


    // All Resource Section 

    Route::resources(
        [
            'employee'              => EmployeeController::class,
            'contacts'              => ContactController::class,
            'page-banner'           => PageBannerController::class,

            'categories'            => CategoryController::class,
            'company-data'          => CompanyDataController::class,
            'company-client'        => CompanyClientController::class,

            'about'                 => AboutController::class,
            'service'               => ServiceController::class,
        ],
    );
});


//Other Routes
Route::middleware(['auth:admin'])->group(function () {

    //routes
    Route::put('admin/page-banner/{id}/toggle-status', [PageBannerController::class, 'toggleStatus'])
        ->name('admin.page-banner.toggle-status');

    //Company Data    
    Route::put('admin/company-data/{id}/toggle-status', [CompanyDataController::class, 'companyData'])
        ->name('admin.company-data.toggle-status');

    //Company Client    
    Route::put('admin/company-client/{id}/toggle-status', [CompanyClientController::class, 'companyClient'])
        ->name('admin.company-client.toggle-status');
});


// Role In Permission
Route::middleware(['auth:admin'])->group(function () {

    Route::controller(RoleController::class)->group(function () {

        //Permission
        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');

        //Role
        Route::get('/all/role', 'AllRole')->name('all.role');
        Route::post('/store/role', 'StoreRole')->name('store.role');
        Route::post('/update/role', 'UpdateRole')->name('update.role');
        Route::get('/delete/role/{id}', 'DeleteRole')->name('delete.role');

        //Role In Permission
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store', 'RolePermissionStore')->name('store.roles.permission');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'AdminRolesEdit')->name('admin.edit.roles');
        Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
        Route::get('/admin/delete/roles/{id}', 'AdminRolesDelete')->name('admin.delete.roles');

        //Admin Role Permission
        Route::get('/admin-all', 'AdminPermission')->name('all.admin.permission');
        Route::post('/admin-store', 'StoreAdminPermission')->name('store.admin.permission');
        Route::get('/admin-edit/{id}', 'EditAdminPermission')->name('edit.admin.permission');
        Route::post('/admin-update/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('/admin-delete/{id}', 'DeleteAdmin')->name('delete.admin');

        Route::get('/admin-inactive/{id}', 'InactiveAdmin')->name('admin.inactive');
        Route::get('/admin-active/{id}', 'ActiveAdmin')->name('admin.active');
    });
});

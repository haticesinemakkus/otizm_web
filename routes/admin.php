<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Panel\GeneralController;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\AdminController;
use App\Http\Controllers\Panel\CommentController;
use App\Http\Controllers\Panel\DemandController;
use App\Http\Controllers\Panel\PlanController;
use App\Http\Controllers\Panel\ProjectCategoryController;
use App\Http\Controllers\Panel\ProjectController;
use App\Http\Controllers\Panel\SettingController;
use App\Http\Controllers\Panel\UserController;

Route::group(['prefix' => '/', 'middleware' => ['auth:admin']], function() {
    Route::any('/', [GeneralController::class, 'index'])->name('panel.index');

    Route::group(['prefix' => '/user'], function() {
        Route::any('/', [UserController::class, 'list'])->name('panel.user_list');
        Route::get('/form/{unique?}', [UserController::class, 'form'])->name('panel.user_form');
        Route::post('/form/{unique?}', [UserController::class, 'saveForm'])->name('panel.user_save');
        Route::delete('/delete', [UserController::class, 'delete'])->name('panel.user_delete');
    });

    Route::group(['prefix' => '/admin'], function() {
        Route::any('/', [AdminController::class, 'list'])->name('panel.admin_list');
        Route::get('/form/{unique?}', [AdminController::class, 'form'])->name('panel.admin_form');
        Route::post('/form/{unique?}', [AdminController::class, 'save'])->name('panel.admin_save');
        Route::delete('/delete', [AdminController::class, 'delete'])->name('panel.admin_delete');
    });

    Route::group(['prefix' => '/plan'], function () {
        Route::any('/', [PlanController::class, 'list'])->name('panel.plan_list');
        Route::get('/form/{unique?}', [PlanController::class, 'form'])->name('panel.plan_form');
        Route::post('/form/{unique?}', [PlanController::class, 'save'])->name('panel.plan_save');
        Route::delete('/delete', [PlanController::class, 'delete'])->name('panel.plan_delete');
    });

    Route::group(['prefix' => '/project_category'], function () {
        Route::any('/', [ProjectCategoryController::class, 'list'])->name('panel.project_category_list');
        Route::get('/form/{unique?}', [ProjectCategoryController::class, 'form'])->name('panel.project_category_form');
        Route::post('/form/{unique?}', [ProjectCategoryController::class, 'save'])->name('panel.project_category_save');
        Route::delete('/delete', [ProjectCategoryController::class, 'delete'])->name('panel.project_category_delete');
    });

    Route::group(['prefix' => '/comment'], function () {
        Route::any('/', [CommentController::class, 'list'])->name('panel.comment_list');
        Route::get('/form/{unique?}', [CommentController::class, 'form'])->name('panel.comment_form');
        Route::post('/form/{unique?}', [CommentController::class, 'save'])->name('panel.comment_save');
        Route::delete('/delete', [CommentController::class, 'delete'])->name('panel.comment_delete');
    });

    Route::group(['prefix' => '/project'], function () {
        Route::any('/', [ProjectController::class, 'list'])->name('panel.project_list');
        Route::get('/form/{unique?}', [ProjectController::class, 'form'])->name('panel.project_form');
        Route::post('/form/{unique?}', [ProjectController::class, 'save'])->name('panel.project_save');
        Route::delete('/delete', [ProjectController::class, 'delete'])->name('panel.project_delete');
    });

    Route::group(['prefix' => '/demand'], function () {
        Route::any('/', [DemandController::class, 'list'])->name('panel.demand_list');
        Route::delete('/delete', [DemandController::class, 'delete'])->name('panel.demand_delete');
    });

    Route::group(['prefix' => 'settings'], function() {
        Route::get('form/{unique?}', [SettingController::class, 'form'])->name('panel.settings_form');
        Route::post('form/{unique?}', [SettingController::class, 'save'])->name('panel.settings_save');
    });

    Route::get('/profile', [AdminController::class, 'profile'])->name('panel.profile');
    Route::post('/profile', [AdminController::class, 'profile_save'])->name('panel.profile_save');
});

Route::get('/login', [AuthController::class, 'login'])->name('panel.login');
Route::post('/login', [AuthController::class, 'access'])->name('panel.access');
Route::get('/logout', [AuthController::class, 'logout'])->name('panel.logout');

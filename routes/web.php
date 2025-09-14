<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\study;
use App\Http\Controllers\Crud;

Route::controller(Crud::class)->prefix('/admin')->group(function(){
    Route::get('/create', 'create')->name('admin.create');
    Route::POST('/store','store')->name('admin.store');
    Route::DELETE('/{id}/destroy','destroy')->name('admin.destroy');
    Route::get('/{id}/edit','edit')->name('admin.edit');
    Route::get('/{id}/show','show')->name('admin.show');
    Route::PUT('/{id}/update','update')->name('admin.update');
});

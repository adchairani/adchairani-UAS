<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\JurnalUmumControler@index');
    Route::get('jurnalumum', 'App\Http\Controllers\JurnalUmumControler@index');
    
    Route::get('jurnalumum/tambah', 'App\Http\Controllers\JurnalUmumControler@tambah');
    Route::post('jurnalumum/tambah_proses', 'App\Http\Controllers\JurnalUmumControler@tambah_proses');
    Route::get('jurnalumum/edit/{id}', 'App\Http\Controllers\JurnalUmumControler@edit');
    Route::post('jurnalumum/edit_proses', 'App\Http\Controllers\JurnalUmumControler@edit_proses');
    Route::get('jurnalumum/delete/{id}', 'App\Http\Controllers\JurnalUmumControler@delete');
    



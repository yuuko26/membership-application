<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('members/export', [\App\Http\Controllers\MemberController::class, 'export'])->name('members.export');
Route::resource('members', \App\Http\Controllers\MemberController::class);

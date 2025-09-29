<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Members
Route::get('members/export', [\App\Http\Controllers\MemberController::class, 'export'])->name('members.export');
Route::resource('members', \App\Http\Controllers\MemberController::class);

// Promotions
Route::resource('promotions', \App\Http\Controllers\PromotionController::class);

// Rewards
Route::get('member-rewards/export', [\App\Http\Controllers\MemberRewardController::class, 'export'])->name('member-rewards.export');
Route::resource('member-rewards', \App\Http\Controllers\MemberRewardController::class);

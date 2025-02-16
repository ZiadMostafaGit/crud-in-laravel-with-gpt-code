<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::resource('members', MemberController::class);

Route::get('/', function () {
    return redirect()->route('members.index');
});

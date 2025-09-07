<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Livewire\Counter;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () { return view('welcome'); })->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login-post');

Route::get('/register', function () { return view('welcome-register'); })->name('register');

Route::get('/counter', Counter::class)->name('counter');

Route::get('/cache', function () {
    Cache::set('key', '123');
    return Cache::get('key');
})->name('cache');

Route::get('/request', function (Request $request) {
    dd($request);
})->name('request');

Route::get('/users', [UserController::class, 'show'])->name('users');

Route::get('/cars/{id}/{ip}', [CarController::class, 'index'])->name('cars');

Route::get('/table', function () { return view('table'); })->name('table')->middleware('auth');

Route::get('/session', function (Request $request) {
    //abort(404);
    session(['key' => 'value']);
    $request->session()->put('user.teams', 'developers');
    //$request->session()->regenerate();
    //$request->session()->flash('status', 'Задача выполнена успешно!');
    //dd(session('_token'));!!!!!!123
    dd($request->session()->all(), Auth::user());
})->name('session');

Route::get('/profile', function () {
    // Только аутентифицированные пользователи могут получить доступ к этому маршруту...
    return view('table');
})->middleware('auth.basic')->name('profile');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/table');
})->name('logout');

<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

Route::get('/', function () {

    return Inertia::render('Home');
});

Route::get('/about', function () {

    return Inertia::render('About');
});

Route::get('/users', function () {
    // return User::paginate(10);
    return Inertia::render('Users', [
        // 'users' => User::paginate(10)->map(fn ($user) => [
        //     'id' => $user->id,
        //     'name' => $user->name,
        //     'email' => $user->email,
        // ])
        'users' => User::paginate(10)
    ]);
});

Route::get('/testing', function () {

    return Inertia::render('Testing');
});



Route::post('/logout', function () {
    // return Inertia::render('Testing');
    dd(request('foo'));
});

Route::get('/register', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users/create', function () {
    $response = Request::validate([
        'name' => 'required',
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:5']
    ]);
    User::create($response);
    return redirect('/');
});

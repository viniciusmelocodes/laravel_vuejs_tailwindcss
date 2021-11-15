<?php

use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = User::get();

    return response()->json($users);
})->name('get-users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lvgt/config', [UsersController::class, 'handleConfigRequest']);
Route::get('/lvgt/data', [UsersController::class, 'handleDataRequest']);

// Route::get('/faker_users', function () {
//     $faker = Faker\Factory::create();
//     $limit = 30;

//     for ($i = 0; $i < $limit; $i++) {
//         $user = new User(['name' => $faker->name, 'email' => $faker->unique()->email, 'password' => Hash::make('123456789')]);
//         $user->save();
//     }

//     return response()->json('ok');
// });
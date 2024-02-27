<?php

use app\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () { 
    return 'World';
});

Route::get('/welcome', function() {
    return 'Selamat Datang';
}); 

Route::get('/about', function() {
    return '2241720140 - Pascalis D. S. L.';
});

// Route::get('/user/{name}', function($name){
//     return 'Nama saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; }); 

Route::get('/articles/{id}', function($id){
    return 'Pemburu Nikel<br>id: '.$id;
});

// Route::get('/user/{name?}', function($name='John'){
//     return 'Nama saya '.$name;
// });

// Route::get('/user/profile', function () { 
//     // 
//     })->name('profile'); 
//     Route::get( 
//     '/user/profile', 
//     [UserProfileController::class, 'show'] 
//     )->name('profile'); 
//     // Generating URLs... 
//     $url = route('profile'); 
//     // Generating Redirects... 
//     return redirect()->route('profile');


// Route::middleware(['first', 'second'])->group(function () { 
//     Route::get('/', function () { 
//         // Uses first & second middleware... 
//     }); 
 
// Route::get('/user/profile', function () {         // Uses first & second middleware... 
//     }); 
// }); 
 
// Route::->group(function () { 
// domain('{account}.example.com')
// 	get	('	user/{id}	
//     Route::	', function ($account, $id) { 
//         // 
//     }); 
// }); 
 
// Route::middleware('auth')->group(function () { 
//  	Route::get('/user', [UserController::class, 'index']); 
//  	Route::get('/post', [PostController::class, 'index']); 
//  	Route::get('/event', [EventController::class, 'index']); 
 	 
// }); 

Route::prefix('admin')->group(function () { 
    Route::get('/user', [UserController::class, 'index']); 
    Route::get('/post', [PostController::class, 'index']); 
    Route::get('/event', [EventController::class, 'index']);  
}); 


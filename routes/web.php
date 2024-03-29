<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

// Membuat Route
Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/articles/{id}',[ArticleController::class, 'articles']);


Route::resource('photos', PhotoController::class); 

Route::get('/greeting', function () {  	
    return view('blog.hello', ['name' => 'Pascalis'], ['occupation' => 'Student']); }); 
    
Route::get('/greeting', [WelcomeController::class, 'greeting']);
// Route::get('/welcome', function() {
    //     return 'Selamat Datang';
    // }); 
        
    // Route::get('/about', function() {
            //     return '2241720140 - Pascalis D. S. L.';
            // });
            
            // Route::get('/user/{name}', function($name){
                //     return 'Nama saya '.$name;
                // });
                
                // Route::get('/posts/{post}/comments/{comment}', function 
                // ($postId, $commentId) { 
                    //     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; }); 
                    
                    // Route::get('/articles/{id}', function($id){
                        //     return 'Pemburu Nikel<br>id: '.$id;
                        // });
                        
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
        
        // Route::prefix('admin')->group(function () { 
            //     Route::get('/user', [UserController::class, 'index']); 
            //     Route::get('/post', [PostController::class, 'index']); 
            //     Route::get('/event', [EventController::class, 'index']);  
            // }); 
            
            
        
            Route::get('/world', function () { 
                return 'World';
             });



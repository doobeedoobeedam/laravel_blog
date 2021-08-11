<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect('blog');
});

Route::resource('blog', BlogController::class);



















// Route::get('/', [PostController::class, 'index']);



// Route::get('/about', function () {
//     return view('about', [
//         "name" => "Kusuma Wecitra",
//         "email" => "citrac491@gmail.com",
//         "image" => "https://tse4.mm.bing.net/th?id=OIP.Oz9DM9IoS1FS0tmgH7T1iQHaHa&pid=Api&P=0&w=300&h=300"
//     ]);
// });

// Route::get('/posts', function () {
//     return view('posts', [
//         "posts" => Blog::all()
//     ]);
// });

// Route::get('posts/{slug}', function ($slug){
//     return view('post', [
//         "post" => Blog::find($slug)
//     ]);
// });


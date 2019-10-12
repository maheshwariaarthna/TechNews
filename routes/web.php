<?php

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
    $mobileNews=\App\Post::where('category','=','mobile')->get();

    $tabletNews=\App\Post::where('category','=','tablet')->get();

    $gadgetNews=\App\Post::where('category','=','gadget')->get();

    $cameraNews=\App\Post::where('category','=','camera')->get();

    $designNews=\App\Post::where('category','=','design')->get();

    return View::make('index',compact('mobileNews','tabletNews','gadgetNews','cameraNews','designNews'));
});

Route::get('/category/{category}', function(\Illuminate\Http\Request $request, $category){

	$posts=\App\Post::where('category','=',$category)->get();
	return View::make('category',compact('posts','category'));

});

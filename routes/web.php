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

//Category page
Route::get('/category/{category}', function(\Illuminate\Http\Request $request, $category){

	$posts=\App\Post::where('category','=',$category)->get();
	return View::make('category',compact('posts','category'));

});

//Contact Us Page
Route::post('/contact-us',function(\Illuminate\Http\Request $request){

	//Getting the parameters
	$query=new \App\Contact;
	$query->name=$request->name;
	$query->phone=$request->phone;
	$query->email=$request->email;
	$query->message=$request->message;
	try {
		$status='success';
		$query->save();
		
	} catch (Exception $e) {
		$status='failure';
	}
	return View::make('contact',compact('status'));		
});

Route::get('contact-us',function(){
	$status='none';
	return View::make('contact',compact('status'));
});

//Issues Page

Route::get('/report-technical-issues', function(){
	$status='none';
	return View::make('issues', compact('status'));
});

Route::post('/report-technical-issues', function(\Illuminate\Http\Request $request){
	$query=new \App\Issue;
	$query->name=$request->name;
	$query->email=$request->email;
	$query->issue=$request->message;
	try
	{
		$query->save();
		$status='success';		
	}
	catch(Exception $e)
	{
		$status='failure';
	}
	return View::make('issues',compact('status'));
});
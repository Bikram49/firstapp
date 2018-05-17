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

Route::get('/', function (){
/*
	Schema::create('art', function($newtable){   //$newtable is a closure parameter for the schema.

		$newtable->increments('id');
		$newtable->string('artist');
		$newtable->string('title',500);
		$newtable->text('description');
		$newtable->date('created');
		$newtable->date('exhibition_date');
		$newtable->timestamps();

	});
	
	Schema::table('art', function($newtable){

		$newtable->boolean('alumni');
		$newtable->dropColumn('exhibition_date');
	});
 */
    return view('hello');
});


Route::get('about', function(){

	return "this is about page";

});
Route::get('about/direction', function(){

	return "directions goes here";

});

Route::get('about/{theSubject}', function($theSubject){

	return $theSubject." content goes here.";

});

Route::get('about/classes/{theSubject}', function($theSubject){

	// variables are known under double quote only i.e code below won't return value of {$theSubject} under single quote.
	return "{$theSubject} classes are running";  

});



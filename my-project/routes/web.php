<?php

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Rule\Parameters;

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

Route::get('/hello',function (){
    return response('<h3>Hello, world!</h3>',200)
            ->header('Content-Type', 'text/html')
            ->header('custom-header','Andrea Monterrosa');
});

Route::get('/consulta/{id}', function ($id){
    return response('consulta <h1>'.$id.'</h1>',200);
})->where('id','[0-9]+');//this makes sure that only numbers are allowed in the route 
//for the id parameter

Route::get('/search',function(Request $request){
    // dd($request);//this is for debugging
    return response('<h1>'.$request->city.', '.$request->country.'</h1>',200);
});
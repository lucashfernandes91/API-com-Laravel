<?php

use Illuminate\Http\Request;

Route::get('/', function () 
{
    return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);;
});

Route::resource('jobs', 'JobsController');
Route::resource('companies', 'CompaniesController');


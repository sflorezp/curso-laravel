<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('ejemplo');
});

Route::controller('personal','PersonalController');
Route::controller('clase','Class2Controller');
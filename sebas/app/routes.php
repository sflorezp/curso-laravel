<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('ejemplo');
});

Route::get('/test', function()
{
	return View::make('masterpage.template')
        ->with("nom", "sebas")
        ->with("edad", "23");
});

Route::get('/sflorezp', function()
{
	return View::make('perfil.perfil')
        ->with("nombre", "Sebas");        
});

Route::controller('personal','PersonalController');
Route::controller('clase','Class2Controller');
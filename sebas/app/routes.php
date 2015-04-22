<?php

Route::get('/', function() {
    return View::make('hello');
});

Route::get('/prueba', function() {
    return View::make('pruebajs');
});

Route::get('/complexify', function() {
    return View::make('pluginsJS.complexify');
});

Route::get('/boot', function() {
    return View::make('boot');
});

Route::get('/test', function() {
    return View::make('masterpage.template')
                    ->with("nom", "sebas")
                    ->with("edad", "23");
});

Route::get('/pickadate', function() {
    return View::make('pluginsJS.pickadate');
});

/*Route::get('/profile', function() {
    if(Auth::check()){
    return View::make('perfil.perfil')  PREGUNTARLE A PINEDA??
                    ->with("nombre", Auth::user()->nombre);
    } else {
        return View::make('general.login');
    }
});*/

Route::get('/profile', array('before'=>'auth', function() {
    
    $publicaciones = Publicacion::orderBy('id', 'desc')->get();/*Vaya a la base de datos y traigame todas las publicaciones*/
    return View::make('perfil.perfil')
                    ->with("nombre", Auth::user()->nombre)
                    ->with("publicaciones", $publicaciones);
}));

Route::get('/', function() {
    if(Auth::check()){
        return Redirect::to("profile");  //Redirect::to es igual a return View::make ???
    }
    return View::make('general.login');
});
Route::post('/loguear', function() {
    $email = Input::get('correo');
    $password = Input::get('password');
    if (Auth::attempt(array('correo' => $email, 'password' => $password))) {
        return Redirect::to("/profile");
    } else {
        echo'Usuario no logueado';
    }
});

Route::get('/logout', function() {
    Auth::logout();
    return Redirect::to("/");
});


Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Class2Controller');
Route::controller('publicacion', 'PublicacionController');

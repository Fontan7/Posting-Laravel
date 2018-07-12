<?php

Route::get('/', function () {  //pagina de bienvenida para usuarios nuevos o deslogueados
    return view('welcome');
});

Route::get('/welcome', function () {  //hace lo mismo que la ruta anterior, solo que tambien funciona si el usuario tipea welcome en la url
    return view('welcome');
});

Route::get('/posteos', 'front\postcontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/FAQs', function () {
    return view('FAQs');
});

Route::get('/Contact', function () {
    return view('Contact');
});

// genero un route para que un administrador pueda dar de alta redes
// a las cuales puede enviar Posting
Route::resource('admin/networks', 'admin\NetworkController');
// Route::get('protected', ['middleware' => ['auth', 'admin'],])

Route::group(['middleware' => ['auth', 'admin']], function()
{
  Route::resource('admin/networks', 'admin\NetworkController');
});

// genero un route para que un administrador pueda dar de alta roles de usuarios
Route::resource('admin/rolls', 'admin\RollController');


// genero un route para que un administrador pueda dar de modificar usuarios
Route::resource('admin/users', 'admin\UserController');


Route::post('post/store', 'front\postcontroller@store');
Route::post('post/{id}/destroy', 'front\postcontroller@destroy');

// genero un route para relaciones, poder seleccionar
Route::resource('front/relations', 'front\RelationController');

Route::get('front/chats/{relation}/index', 'front\ChatController@index');
Route::post('front/chats/{relation}/store', 'front\ChatController@store');

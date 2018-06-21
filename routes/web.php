<?php



Route::get('/', function () {  //pagina de bienvenida para usuarios nuevos o deslogueados
    return view('welcome');
});
Route::get('/welcome', function () {  //hace lo mismo que la ruta anterior, solo que tambien funciona si el usuario tipea welcome en la url
    return view('welcome');
});



Route::get('/ubercommand', function () {  //ubercommand (super comando) es donde el usuario escribe los post y decide a que redes enviarlo
    return view('ubercommand');
});

Route::get('/profile', function () {  //profile es donde el usuario puede ver su propio perfil, y cambiar su foto o nickname
    return view('profile');
});

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
Route::resource('admin/networks', 'admin\networkController');

// genero un route para que un administrador pueda dar de alta roles de usuarios
Route::resource('admin/rolls', 'admin\RollController');

Route::post('post/preview', 'front\postcontroller@preview');

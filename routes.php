<?php
  // file: routes.php
  Route::get('/', function () { 
    return view('home'); 
  });

  Route::resource('author', 'AuthorController');

  Route::get('/author/(:number)/delete','AuthorController@destroy');

  Route::get('/','AuthorController@index');

  Route::resource('book', 'BookController');
  // Route::resource('author', 'AuthorController');
  Route::resource('publisher', 'PublisherController');

  Route::dispatch();
?>
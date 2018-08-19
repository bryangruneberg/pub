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


Auth::routes();

// redirect from register page to home page
Route::get('/register', function () {
    return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/keys', function () {
    return view('keys');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jiracat', function () {
    return view('jiracat');
});

Route::get('/laragoon', function () {
    return view('laragoon');
});

Route::get('/twittering-machines', function () {
    return view('twittering-machines');
});

Route::get('/toots', function () {
    $feed = Feeds::make('https://fosstodon.org/@bryangruneberg.atom');

    $data = array(
      'title'     => $feed->get_title(),
      'permalink' => $feed->get_permalink(),
      'items'     => $feed->get_items(),
    );

    return View::make('toots', $data);
});

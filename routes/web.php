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

Route::get('/', function () {
    $events = App\Event::all();
    return view('index',compact(["events"]));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("/events","EventController")->middleware("auth");
Route::resource("/events/{event_id}/presenters","PresenterController")->middleware("auth");

Route::get("/events/{event_id}/visit","EventController@visitEvent")->middleware("auth")->name("event_visit");
Route::get("/events/{event_id}/unvisit","EventController@unvisitEvent")->middleware("auth")->name("event_unvisit");

Route::get("/profile/{user_id}","UserController@show")->name("profile");
Route::get("/dashboard",function(){
    $events = App\Event::all();
    return view("dashboard",compact(["events"]));
})->middleware("auth")->name("dashboard");

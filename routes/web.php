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
    // return view('welcome');
    return redirect('/projects');
});

/*

    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)

*/

Route::resource('projects', 'ProjectsController');

// Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

// Route::get('/projects', 'ProjectsController@index');

// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{projects}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{projects}', 'ProjectsController@update');
// Route::delete('/projects/{projects}', 'ProjectsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
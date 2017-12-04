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

Route::get('MainProyect/{id}', 'ProjectController@mostrarProyectoPrincipal');

Auth::routes();

Route::get('/firstForm', 'formController@index');

Route::post('/firstForm','formController@handleForm');

Route::get('/creatorForm', function(){return view ('createProject');});

Route::post('/createProject', 'projectController@createProject');

Route::get('/createProject', 'projectController@index');

Route::get('/project/editProject/{id}', 'projectController@showProjectEditor');

Route::put('/project/editProject/{id}', 'projectController@editProject');

Route::get('/project/becomeCollaborator/{id}', function(){return view('project');});

Route::post('/project/becomeCollaborator/{id}','ProjectController@becomeCollaborator ');

Route::get('/user', 'userController@showProfile');

Route::put('/user', 'userController@editProfile');

Route::get('/user/myProjects', 'userController@myProjects');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

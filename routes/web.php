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

Route::get('/firstForm', 'formController@index');

Route::post('/firstForm','formController@handleForm');

Route::get('/newProject', function(){return view('projectForm');})->name('newProject');

Route::post('/createProject', 'projectController@createProject');

Route::get('/newPartnershipRequest', 'messageController@showNewPartnershipRequest');

Route::get('myProjects', 'projectController@showMyProjects');

Route::put('/project/editProject/{id}', 'projectController@editProject');

Route::get('/project/{id}', 'projectController@showProject');

Route::get('becomeCollaborator/{id}','ProjectController@newPartnershipRequest');

Route::post('becomeCollaborator','messageController@becomeCollaborator');

Route::post('/requestDecision', 'messageController@requestDecision');

Route::get('/partnershipsRecieved','messageController@showPartnershipRequests');

Route::get('/user', 'userController@showProfile');

Route::put('/user', 'userController@editProfile');

Route::get('/myMessages', 'messageController@listMessages');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/myPartnershipRequests/{id}', 'messageController@myPartnershipRequests');

Route::get('/myPartnershipRequests/{id}', 'messageController@myPartnershipRequests');

Route::get('/projectList', 'projectController@showMyRecommendedProjects')->name('projectList');

Auth::routes();

Route::get('/home', 'projectController@showMyRecommendedProjects');

Auth::routes();

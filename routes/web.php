<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['uses' => 'HomeController@GET_index', 'as' => '_home']);

Route::get('/login', ['uses' => 'AuthController@GET_login', 'as' => '_auth.login']);
Route::post('/login', ['uses' => 'AuthController@POST_login', 'as' => '_auth.login.post']);
// Route::post('/login', ['uses' => 'AuthController@postLogin', 'as' => '_auth.login.post']);
Route::get('/signup', ['uses' => 'AuthController@GET_signup', 'as' => '_auth.signup']);
Route::post('/signup', ['uses' => 'AuthController@POST_signup', 'as' => '_auth.signup.post']);
Route::get('/logout', ['uses' => 'AuthController@GET_logout', 'as' => '_auth.logout']);
// Route::get('/activate', ['uses' => 'AuthController@GET_activate0', 'as' => '_auth.activate0']);
Route::get('/activate/{code}', ['uses' => 'AuthController@GET_activate', 'as' => '_auth.activate']);
Route::post('/activate/{code}', ['uses' => 'AuthController@POST_activate', 'as' => '_auth.activate.post']);
//
// //-- Authentication Routes --//
// Route::get('/admin', ['uses' => 'AdminController@GET_index', 'as' => 'admin']);
//
// // Create User
// Route::get(		'/user/list', 			['as' => 'user.list', 					'uses' => 'UserController@GET_listUser']);
// Route::get(		'/user/create', 		['as' => 'user.create', 				'uses' => 'UserController@GET_createUserForm']);
// Route::post(	'/user/create', 		['as' => 'user.create.post', 			'uses' => 'UserController@POST_createUser']);
// Route::get(		'/user/update/{id}', 	['as' => 'user.update', 				'uses' => 'UserController@GET_updateUserForm']);
// Route::put(		'/user/update/{id}', 	['as' => 'user.update.put', 			'uses' => 'UserController@PUT_updateUser']);
// Route::delete(	'/user/delete/{id}', 	['as' => 'user.delete', 				'uses' => 'UserController@DELETE_deleteUser']);
//
// // Create Group
// Route::delete(	'/group/delete/{id}', 	['as' => 'group.delete', 				'uses' => 'GroupController@DELETE_deleteGroup']);
// Route::get(		'/group/create', 		['as' => 'group.create', 				'uses' => 'GroupController@GET_createGroupForm']);
// Route::post(	'/group/create', 		['as' => 'group.create.post',		 	'uses' => 'GroupController@POST_createGroup']);
// Route::get(		'/group/assign', 		['as' => 'group.assign', 				'uses' => 'GroupController@GET_assignGroupForm']);
// Route::post(	'/group/assign/{id}', 	['as' => 'group.assign.post', 			'uses' => 'GroupController@POST_assignGroup']);

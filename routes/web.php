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

$this->get('/', function () {
    return redirect('/tasks');
});

Auth::routes();

$this->get('/tasks', 'TasksController@index')->name('home');
$this->get('tasks/create', 'TasksController@create')->name('task.create');
$this->post('/tasks', 'TasksController@store')->name('task.store');
$this->get('/tasks/{id}', 'TasksController@show')->name('task.show');
$this->get('/tasks/{id}/edit', 'TasksController@edit')->name('task.edit');
$this->put('/tasks/{id}', 'TasksController@update')->name('task.update');
$this->delete('/tasks/{id}', 'TasksController@destroy')->name('task.destroy');

$this->resource('category', 'CategoryController');

<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'Main@home')->name('home');

Route::get('/new_task', 'Main@new_task')->name('new_task_frm');
Route::post('/new_task_submit', 'Main@new_task_submit')->name('new_task_submit');

Route::get('/task_done/{id}', 'Main@task_done')->name('task_done');
Route::get('/task_undone/{id}', 'Main@task_undone')->name('task_undone');

Route::get('/edit_task_frm/{id}', 'Main@edit_task_frm')->name('edit_task_frm');
Route::post('/edit_task_submit', 'Main@edit_task_submit')->name('edit_task_submit');

Route::get('/task_visible/{id}', 'Main@task_visible')->name('task_visible');
Route::get('/task_invisible/{id}', 'Main@task_invisible')->name('task_invisible');

Route::get('/task_delete/{id}', 'Main@task_delete')->name('task_delete');

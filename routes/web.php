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

$this->get('/',                 ['as'=>'menu.front_view',  'uses'=>'MenuController@frontView']);
$this->get('menu/index',        ['as'=> 'menu.index',   'uses'=>'MenuController@index']);
$this->get('menu/create',       ['as'=> 'menu.create',   'uses'=>'MenuController@create']);
$this->post('menu/save',        ['as'=>'menu.store',    'uses'=>'MenuController@save']);




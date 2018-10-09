<?php

Route::get('/', ['uses' => 'ProdutoController@index', 'as' => 'home']);

Route::get('/produtos', ['uses' => 'ProdutoController@index', 'as' => 'produto']);
Route::get('/produtos/adicionar', ['uses' => 'ProdutoController@adicionar', 'as' => 'produto.adicionar']);
Route::get('/produtos/editar', ['uses' => 'ProdutoController@editar', 'as' => 'produto.editar']);

Route::get('/categorias', ['uses' => 'CategoriaController@index', 'as' => 'categoria']);
Route::get('/categorias/adicionar', ['uses' => 'CategoriaController@adicionar', 'as' => 'categoria.adicionar']);
Route::post('/categorias/gravar', ['uses' => 'CategoriaController@gravar', 'as' => 'categoria.gravar']);
Route::get('/categorias/editar', ['uses' => 'CategoriaController@editar', 'as' => 'categoria.editar']);
Route::get('/categorias/deletar', ['uses' => 'CategoriaController@deletar', 'as' => 'categoria.deletar']);
Route::post('/categorias/editar', ['uses' => 'CategoriaController@salvar', 'as' => 'categoria.salvar']);
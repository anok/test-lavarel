<?php

Route::get('/', ['uses' => 'ProdutoController@index', 'as' => 'home']);

Route::get('/produtos', ['uses' => 'ProdutoController@index', 'as' => 'produto']);
Route::get('/produtos/adicionar', ['uses' => 'ProdutoController@adicionar', 'as' => 'produto.adicionar']);
Route::get('/produtos/editar', ['uses' => 'ProdutoController@editar', 'as' => 'produto.editar']);
Route::post('/produtos/gravar', ['uses' => 'ProdutoController@gravar', 'as' => 'produto.gravar']);
Route::post('/produtos/editar', ['uses' => 'ProdutoController@salvarEdicao', 'as' => 'produto.salvarEdicao']);
Route::delete('/produtos/deletar', ['uses' => 'ProdutoController@deletar', 'as' => 'produto.deletar']);

Route::get('/categorias', ['uses' => 'CategoriaController@index', 'as' => 'categoria']);
Route::get('/categorias/adicionar', ['uses' => 'CategoriaController@adicionar', 'as' => 'categoria.adicionar']);
Route::post('/categorias/gravar', ['uses' => 'CategoriaController@gravar', 'as' => 'categoria.gravar']);
Route::get('/categorias/editar', ['uses' => 'CategoriaController@editar', 'as' => 'categoria.editar']);
Route::delete('/categorias/deletar', ['uses' => 'CategoriaController@deletar', 'as' => 'categoria.deletar']);
Route::post('/categorias/editar', ['uses' => 'CategoriaController@salvarEdicao', 'as' => 'categoria.salvarEdicao']);
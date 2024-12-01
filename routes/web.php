<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PedidoController;

// -------------------------------------------
// ROTAS PARA PESSOAS
// -------------------------------------------

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');  // Listar todas as pessoas
Route::get('/pessoas/create', [PessoaController::class, 'create'])->name('pessoas.create');  // Formulário de criação de pessoa
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');  // Armazenar uma nova pessoa
Route::get('/pessoas/{pessoa}', [PessoaController::class, 'show'])->name('pessoas.show');  // Exibir uma pessoa
Route::get('/pessoas/{pessoa}/edit', [PessoaController::class, 'edit'])->name('pessoas.edit');  // Formulário de edição de pessoa
Route::put('/pessoas/{pessoa}', [PessoaController::class, 'update'])->name('pessoas.update');  // Atualizar uma pessoa
Route::delete('/pessoas/{pessoa}', [PessoaController::class, 'destroy'])->name('pessoas.destroy');  // Deletar uma pessoa

// -------------------------------------------
// ROTAS PARA CARROS
// -------------------------------------------

Route::get('/carros', [CarroController::class, 'index'])->name('carros.index');  // Listar todos os carros
Route::get('/carros/create', [CarroController::class, 'create'])->name('carros.create');  // Formulário de criação de carro
Route::post('/carros', [CarroController::class, 'store'])->name('carros.store');  // Armazenar um novo carro
Route::get('/carros/{carro}', [CarroController::class, 'show'])->name('carros.show');  // Exibir um carro
Route::get('/carros/{carro}/edit', [CarroController::class, 'edit'])->name('carros.edit');  // Formulário de edição de carro
Route::put('/carros/{carro}', [CarroController::class, 'update'])->name('carros.update');  // Atualizar um carro
Route::delete('/carros/{carro}', [CarroController::class, 'destroy'])->name('carros.destroy');  // Deletar um carro

// -------------------------------------------
// ROTAS PARA ANIMAIS
// -------------------------------------------

Route::get('/animais', [AnimalController::class, 'index'])->name('animais.index');  // Listar todos os animais
Route::get('/animais/create', [AnimalController::class, 'create'])->name('animais.create');  // Formulário de criação de animal
Route::post('/animais', [AnimalController::class, 'store'])->name('animais.store');  // Armazenar um novo animal
Route::get('/animais/{animal}', [AnimalController::class, 'show'])->name('animais.show');  // Exibir um animal
Route::get('/animais/{animal}/edit', [AnimalController::class, 'edit'])->name('animais.edit');  // Formulário de edição de animal
Route::put('/animais/{animal}', [AnimalController::class, 'update'])->name('animais.update');  // Atualizar um animal
Route::delete('/animais/{animal}', [AnimalController::class, 'destroy'])->name('animais.destroy');  // Deletar um animal

// -------------------------------------------
// ROTAS PARA LIVROS
// -------------------------------------------

Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');  // Listar todos os livros
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');  // Formulário de criação de livro
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');  // Armazenar um novo livro
Route::get('/livros/{livro}', [LivroController::class, 'show'])->name('livros.show');  // Exibir um livro
Route::get('/livros/{livro}/edit', [LivroController::class, 'edit'])->name('livros.edit');  // Formulário de edição de livro
Route::put('/livros/{livro}', [LivroController::class, 'update'])->name('livros.update');  // Atualizar um livro
Route::delete('/livros/{livro}', [LivroController::class, 'destroy'])->name('livros.destroy');  // Deletar um livro

// -------------------------------------------
// ROTAS PARA EMPRESAS
// -------------------------------------------

Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');  // Listar todas as empresas
Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');  // Formulário de criação de empresa
Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');  // Armazenar uma nova empresa
Route::get('/empresas/{empresa}', [EmpresaController::class, 'show'])->name('empresas.show');  // Exibir uma empresa
Route::get('/empresas/{empresa}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');  // Formulário de edição de empresa
Route::put('/empresas/{empresa}', [EmpresaController::class, 'update'])->name('empresas.update');  // Atualizar uma empresa
Route::delete('/empresas/{empresa}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');  // Deletar uma empresa

// -------------------------------------------
// ROTAS PARA PEDIDOS
// -------------------------------------------

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');  // Listar todos os pedidos
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');  // Formulário de criação de pedido
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');  // Armazenar um novo pedido
Route::get('/pedidos/{pedido}', [PedidoController::class, 'show'])->name('pedidos.show');  // Exibir um pedido
Route::get('/pedidos/{pedido}/edit', [PedidoController::class, 'edit'])->name('pedidos.edit');  // Formulário de edição de pedido
Route::put('/pedidos/{pedido}', [PedidoController::class, 'update'])->name('pedidos.update');  // Atualizar um pedido
Route::delete('/pedidos/{pedido}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');  // Deletar um pedido
